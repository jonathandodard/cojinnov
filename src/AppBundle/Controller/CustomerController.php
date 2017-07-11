<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 04/07/17
 * Time: 18:23
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Customer;
use AppBundle\Form\CustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CustomerController extends Controller
{
    public function indexAction()
    {
        $customers = $this->repositoryCustomer()->findAll();

        return $this->render('AppBundle:customer:index.html.twig', [
            'customers' => $customers
        ]);
    }

    public function indexByCustomerAction(Customer $customer)
    {
        return $this->render('AppBundle:customer:indexByCustomer.html.twig', [
            'customer' => $customer
        ]);
    }

    public function createAction(Request $request)
    {
        $customer = new Customer();

        $form = $this->createForm(CustomerType::class, $customer);


        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();

            return $this->redirectToRoute('customer_create');
        }

        return $this->render('AppBundle:customer:form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function updateAction(Request $request, Customer $customer)
    {
        $form = $this->createForm(CustomerType::class, $customer);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();
        }

        return $this->render('AppBundle:customer:form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function deleteAction(Request $request, Customer $customer)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($customer);
        $em->flush();

        return $this->redirectToRoute('customer_index');
    }

    public function repositoryCustomer()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Customer');
    }
}

//a:0:{}