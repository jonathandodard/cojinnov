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
        return $this->render('AppBundle:orderCustomer:index.html.twig', [
            'orderCustomers' => $orderCustomers
        ]);
    }

    public function indexByCustomerAction(OrderCustomer $orderCustomer)
    {
        return $this->render('AppBundle:orderCustomer:indexByOrderCustomer.html.twig', [
            'orderCustomer' => $orderCustomer
        ]);
    }

    public function createAction(Request $request, Customer $customer)
    {
        $orderCustomer = new OrderCustomer();
        $form = $this->createForm(OrderCustomerType::class, $orderCustomer);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
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

            return $this->redirectToRoute('product_index');
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

    public function insertProductAction(Request $request)
    {
        $doctrine = $this->getDoctrine();
        $productsOrder = new ProductsOrder();

        $productsOrder
            ->setProduct($doctrine->getRepository('AppBundle:Product')->findOneById($request->get('product')))
            ->setCustomer($doctrine->getRepository('AppBundle:Customer')->findOneById($request->get('customer')))
            ->setQuantity($request->get('quantity'))
            ->setPrice($request->get('price'))
            ->setStatus($request->get('status'))
        ;
        $em = $doctrine->getManager();
        $em->persist($productsOrder);
        $em->flush();

        return new JsonResponse();

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