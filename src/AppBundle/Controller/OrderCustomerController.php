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
use Symfony\Component\HttpFoundation\Response;

class OrderCustomerController extends Controller
{
    public function indexAction()
    {
        $orderCustomers = $this->repositoryOrderCustomer()->findByUser($this->getUser());

        foreach ($orderCustomers as $orderCustomer){
            $orderCustomer->setCustomer($this->getDoctrine()->getRepository('AppBundle:Customer')->findOneById($orderCustomer->getCustomer()->getId()));
        }

        return $this->render('AppBundle:orderCustomer:index.html.twig', [
            'orderCustomers' => $orderCustomers,
            'user' => $this->getUser()
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
            'ProductsOrder' => $ProductsOrder,
            'user' => $this->getUser()
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
            $orderCustomer->setName($this->setUniqueNameOrder($customer));

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
            'order' => $orderCustomer,
            'user' => $this->getUser()
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
            'form' => $form->createView(),
            'user' => $this->getUser()
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
        $user = $this->getUser();

        $doctrine = $this->getDoctrine();
        $productsOrder = new ProductsOrder();
        $product = $doctrine->getRepository('AppBundle:Product')->findOneById($request->get('product'));
        $customer = $doctrine->getRepository('AppBundle:Customer')->findOneById($request->get('customer'));
        
        $productsOrder
            ->setProduct($product)
            ->setCustomer($customer)
            ->setQuantity($request->get('quantity'))
            ->setPrice($request->get('price'))
            ->setStatus($request->get('status'))
            ->setCreatedAt()
            ->setUpdatedAt('now');
        $productsOrder->setPriceHt($this->htPrice($request->get('quantity'),$request->get('price')));
        $productsOrder->setPriceTTC($this->ttcPrice($request->get('quantity'), $request->get('price'), $request->get('tva')));
        $productsOrder->setTva($request->get('tva'));
        $productsOrder->setUser($user);

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

    public function setUniqueNameOrder (Customer $customer, $counter = 1)
    {
        $name = date("Ymd").$customer->getId().$this->getUser()->getId();

        $orderCustomerByName = $this->repositoryOrderCustomer()->findOneByName($name.'-'.$counter);
        if ($orderCustomerByName) {
            $counter ++;
            return $this->setUniqueNameOrder($customer, $counter);
        }

        return $name.'-'.$counter;
    }

    public function pdfAction(OrderCustomer $orderCustomer, Request $request)
    {

        $customer = $this->getDoctrine()->getRepository('AppBundle:Customer')->findOneById($orderCustomer->getCustomer()->getId());
        $ProductsOrder = $this->getDoctrine()->getRepository('AppBundle:ProductsOrder')->findByOrderId($orderCustomer->getId());

        foreach ($ProductsOrder as $ProductOrder){
            $ProductOrder->setProduct($this->getDoctrine()->getRepository('AppBundle:Product')->findOneById($ProductOrder->getProduct()->getId()));
        }

        $html = $this->renderView('AppBundle:orderCustomer:pdfOrderCustomer.html.twig',
            [
                'orderCustomer' => $orderCustomer,
                'customer'      => $customer,
                'ProductsOrder' => $ProductsOrder,
                'base_dir' => $this->get('kernel')->getRootDir() . '/../web' . $request->getBasePath()
            ]
        );
//        'base_dir' => $this->get('kernel')->getRootDir() . '/../web' . $request->getBasePath()

        $filename = sprintf($customer->getNumberAccount().'.pdf', date('Y-m-d'));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );
    }

    public function repositoryOrderCustomer()
    {
        return $this->getDoctrine()->getRepository('AppBundle:OrderCustomer');
    }
}