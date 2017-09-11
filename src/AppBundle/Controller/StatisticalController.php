<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Statistical;
use AppBundle\Form\StatisticalType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

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

    public function updateAction(Request $request, Statistical $customer)
    {
        $form = $this->createForm(StatisticalType::class, $customer);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();

            return $this->redirectToRoute('statistical_list');
        }

        return $this->render('AppBundle:statistical:form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function indexByFavoriteAction(Request $request, Statistical $statistical){
        switch ($statistical->getEntity()) {
            case Statistical::ENTITY_CUSTOMER:
                $entity = $this->getDoctrine()->getRepository('AppBundle:Customer');
                break;
            case Statistical::ENTITY_ORDER:
                $entity = $this->getDoctrine()->getRepository('AppBundle:OrderCustomer');
                break;
            case Statistical::ENTITY_GOAL:
                $entity = $this->getDoctrine()->getRepository('AppBundle:Goal');
                break;
        };
        switch ($statistical->getPeriod()) {
            case Statistical::PERIOD_1 :
                $entityByPeriod = $entity->findByDateOneMonth();
                break;
            case Statistical::PERIOD_3 :
                $entityByPeriod = $entity->findByDateThreeMonth();
                break;
            case Statistical::PERIOD_6 :
                $entityByPeriod = $entity->findByDateSixMonth();
                break;
            case Statistical::PERIOD_12 :
                $entityByPeriod = $entity->findByDateYear();
                break;
            case Statistical::PERIOD_INFI :
                $entityByPeriod = $entity->findAll();
                break;
        };

        $arrayX = array();
        $testt = [];
        foreach ($entityByPeriod as $var) {
            array_push($arrayX, $var->getCreatedAt()->format('m-Y'));
        }
        $arrayX = array_unique($arrayX);


        foreach ($entityByPeriod as $var){
            array_push($testt, $this->getDoctrine()->getRepository('AppBundle:Customer')->findByDateByMonth($var->getCreatedAt()->format('Y'),$var->getCreatedAt()->format('m')));
        }


dump($testt);die;

        $customer = $this->getDoctrine()->getRepository('AppBundle:Customer');
        $customer->findByDateThreeMonth();
        die;
    }



    public function repositoryStatistical()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Statistical');
    }
}