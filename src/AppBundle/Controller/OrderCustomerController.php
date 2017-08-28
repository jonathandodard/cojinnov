<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 22/07/17
 * Time: 21:05
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Customer;
use AppBundle\Entity\OrderCustomer;
use AppBundle\Entity\ProductsOrder;
use AppBundle\Form\OrderCustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class OrderCustomerController extends Controller
{
    public function indexAction()
    {
        $orderCustomers = $this->repositoryOrderCustomer()->findAll();
        foreach ($orderCustomers as $orderCustomer){
            $orderCustomer->setCustomer($this->getDoctrine()->getRepository('AppBundle:Customer')->findOneById($orderCustomer->getCustomer()->getId()));
        }

        return $this->render('AppBundle:orderCustomer:index.html.twig', [
            'orderCustomers' => $orderCustomers
        ]);
    }

    public function indexByOrderCustomerAction(OrderCustomer $orderCustomer)
    {
        $orderCustomers = $this->repositoryOrderCustomer()->findOneById($orderCustomer);
        $customer = $this->getDoctrine()->getRepository('AppBundle:Customer')->findOneById($orderCustomer->getCustomer()->getId());
        $ProductsOrder = $this->getDoctrine()->getRepository('AppBundle:ProductsOrder')->findByOrderId($orderCustomer->getId());

        foreach ($ProductsOrder as $ProductOrder){
            $ProductOrder->setProduct($this->getDoctrine()->getRepository('AppBundle:Product')->findOneById($ProductOrder->getProduct()->getId()));
        }

        return $this->render('AppBundle:orderCustomer:indexByOrderCustomer.html.twig', [
            'orderCustomer' => $orderCustomer,
            'customer'      => $customer,
            'ProductsOrder' => $ProductsOrder
        ]);
    }

    public function createAction(Request $request, Customer $customer)
    {
        $orderCustomer = new OrderCustomer();
        $form = $this->createForm(OrderCustomerType::class, $orderCustomer);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $orderCustomer->setCreatedAt();
            $orderCustomer->setUpdatedAt('now');
            $orderCustomer->setCustomer($customer);
            $orderCustomer->setUser($this->getUser());
            $em->persist($orderCustomer);
            $em->flush();

            $products = $this->getDoctrine()->getRepository('AppBundle:ProductsOrder')
                ->findBy(
                    [
                        'status' => '2',
                        'customer' => $customer->getId()
                    ]
                );
            foreach ($products as $product) {
                $product->setOrderId($orderCustomer);
                $product->setStatus(ProductsOrder::VALIDATE);

                $em->persist($product);
                $em->flush();
            }

            return $this->redirectToRoute('customer_index_by_costumer', ['id' => $customer->getId()]);
        }

        return $this->render('AppBundle:orderCustomer:form.html.twig', [
            'form' => $form->createView(),
            'customer' => $customer,
            'order' => $orderCustomer
        ]);
    }

    public function updateAction(Request $request, OrderCustomer $orderCustomer)
    {
        $form = $this->createForm(ProductType::class, $orderCustomer);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orderCustomer);
            $em->flush();
        }

        return $this->render('AppBundle:orderCustomer:form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function updatePriceAction(Request $request)
    {
        $productsOrder = $this->getDoctrine()->getRepository('AppBundle:ProductsOrder')->findOneById($request->get('id'));
        $productsOrder->setPrice($request->get('price'));
        $productsOrder->setPriceHt($this->htPrice( $productsOrder->getQuantity(), $request->get('price')));
        $productsOrder->setPriceTTC($this->ttcPrice($productsOrder->getQuantity(), $request->get('price'), $productsOrder->getTva()));
        $em = $this->getDoctrine()->getManager();

        $em->persist($productsOrder);
        $em->flush();

        return new JsonResponse(
            [
                'id' => $productsOrder->getId(),
                'price'=> $productsOrder->getPrice(),
                'priceHt' => $this->htPrice( $productsOrder->getQuantity(), $request->get('price')),
                'priceTtc' => $this->ttcPrice($productsOrder->getQuantity(), $request->get('price'), $productsOrder->getTva())
            ]
        );
    }

    public function updateQuantityAction(Request $request)
    {
        $productsOrder = $this->getDoctrine()->getRepository('AppBundle:ProductsOrder')->findOneById($request->get('id'));
        $productsOrder->setQuantity($request->get('quantity'));
        $productsOrder->setPriceHt($this->htPrice( $request->get('quantity'), $productsOrder->getPrice()));
        $productsOrder->setPriceTTC($this->ttcPrice($request->get('quantity'), $productsOrder->getPrice(), $productsOrder->getTva()));
        $em = $this->getDoctrine()->getManager();

        $em->persist($productsOrder);
        $em->flush();

        return new JsonResponse(
            [
                'id' => $productsOrder->getId(),
                'quantity'=> $productsOrder->getQuantity(),
                'priceHt' => $productsOrder->getPriceHt(),
                'priceTtc' => $productsOrder->getPriceTTC()
            ]
        );
    }

    public function insertProductAction(Request $request)
    {
        $doctrine = $this->getDoctrine();
        $productsOrder = new ProductsOrder();
        $product = $doctrine->getRepository('AppBundle:Product')->findOneById($request->get('product'));
        
        $productsOrder
            ->setProduct($product)
            ->setCustomer($doctrine->getRepository('AppBundle:Customer')->findOneById($request->get('customer')))
            ->setQuantity($request->get('quantity'))
            ->setPrice($request->get('price'))
            ->setStatus($request->get('status'))
            ->setCreatedAt()
            ->setUpdatedAt('now');
        $productsOrder->setPriceHt($this->htPrice($request->get('quantity'),$request->get('price')));
        $productsOrder->setPriceTTC($this->ttcPrice($request->get('quantity'), $request->get('price'), $request->get('tva')));
        $productsOrder->setTva($request->get('tva'));

        $em = $doctrine->getManager();
        $em->persist($productsOrder);
        $em->flush();

        $idProductOrder = $this->getDoctrine()->getRepository('AppBundle:ProductsOrder')->findOneById($productsOrder->getId());

        return new JsonResponse(
            [
                'valuesProduct'=> [
                    'id'=> $product->getId(),
                    'reference'=> $product->getReference(),
                    'name'=> $product->getName(),
                ],
                'productsOrder' => [
                    'id'=>$idProductOrder->getId(),
                    'quantity'=>$idProductOrder->getQuantity(),
                    'price'=>$idProductOrder->getPrice(),
                    'htPrice'=>$idProductOrder->getPriceHt(),
                    'ttcPrice'=>$idProductOrder->getPriceTTC(),
                ]
            ]);

    }

    public function deleteProductAction(Request $request)
    {
        $doctrine = $this->getDoctrine();
        $productsOrder = $doctrine->getRepository('AppBundle:ProductsOrder')->findOneById($request->get('id'));

        $em = $doctrine->getManager();
        $em->remove($productsOrder);
        $em->flush();

        return new JsonResponse(
            [
                'id' => $request->get('id')
            ]
        );
    }

    public function htPrice($quantity, $price)
    {
        return $quantity*$price;
    }

    public function ttcPrice($quantity, $price, $tva)
    {
        $addTva = (($quantity*$price)*$tva)/100;
        return ($quantity*$price)+$addTva;
    }

    public function deleteAction(Request $request, OrderCustomer $orderCustomer)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($orderCustomer);
        $em->flush();

        return $this->redirectToRoute('customer_index');
    }

    public function repositoryOrderCustomer()
    {
        return $this->getDoctrine()->getRepository('AppBundle:OrderCustomer');
    }
}