<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 22/07/17
 * Time: 21:05
 */

namespace AppBundle\Controller;


use AppBundle\Entity\OrderCustomer;
use AppBundle\Form\OrderCustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class orderCustomerController extends Controller
{
    public function indexAction()
    {
        $orderCustomers = $this->repositoryCustomer()->findAll();
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

    public function createAction(Request $request)
    {

        $orderCustomer = new OrderCustomer();
        $form = $this->createForm(OrderCustomerType::class, $orderCustomer);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orderCustomer);
            $em->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('AppBundle:orderCustomer:form.html.twig', [
            'form' => $form->createView()
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

    public function deleteAction(Request $request, OrderCustomer $orderCustomer)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($orderCustomer);
        $em->flush();

        return $this->redirectToRoute('customer_index');
    }

    public function repositoryCustomer()
    {
        return $this->getDoctrine()->getRepository('AppBundle:OrderCustomer');
    }
}