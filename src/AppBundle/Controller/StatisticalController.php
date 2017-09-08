<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Statistical;
use AppBundle\Form\StatisticalType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StatisticalController extends Controller
{
    public function listAction()
    {
        $statistics = $this->repositoryStatistical()->findAll();
// dump(count($statistics));die();
        return $this->render('AppBundle:statistical:index.html.twig', [
            'statistics' => $statistics
        ]);
    }

    public function indexByFavoritesAction()
    {
        $statistics = $this->repositoryCustomer()->findAll();

        return $this->render('AppBundle:statistical:indexByFavorites.html.twig', [
            'statistics' => $statistics
        ]);
    }

    public function createAction(Request $request)
    {
        $statistical = new Statistical();
        $form = $this->createForm(StatisticalType::class, $statistical);


        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $statistical->setUser($this->getUser());
            $statistical->setCreatedAt();
            $statistical->setUpdatedAt('now');
            $user = $this->getUser()->addStatistical($statistical);
            $em->persist($statistical);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('statistical_list');
        }

        return $this->render('AppBundle:statistical:form.html.twig', [
            'form' => $form->createView()
        ]);
    }

//    public function updateAction(Request $request, Customer $customer)
//    {
//        $form = $this->createForm(CustomerType::class, $customer);
//
//        $form->handleRequest($request);
//        if($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($customer);
//            $em->flush();
//
//            return $this->redirectToRoute('customer_index');
//        }
//
//        return $this->render('AppBundle:customer:form.html.twig', [
//            'form' => $form->createView()
//        ]);
//    }

    public function repositoryStatistical()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Statistical');
    }
}