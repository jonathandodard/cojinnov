<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Statistical;
use AppBundle\Form\StatisticalType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class StatisticalController extends Controller
{
    public function indexAction()
    {
        $quarterOne = $this->getDoctrine()->getRepository('AppBundle:OrderCustomer')->quarterOne();
        $tabPriceHt = ['data1'];
        $tabPriceTTC = ['data2'];
        $quarterOneHT = 0;
        $quarterOneTTC = 0;

        foreach ($quarterOne as $priceHtquarterOne) {
            $quarterOneHT = $quarterOneHT + $priceHtquarterOne->getTotalHT();
            $quarterOneTTC = $quarterOneTTC + $priceHtquarterOne->getTotalTTC();
        }

        array_push($tabPriceHt, $quarterOneHT);
        array_push($tabPriceTTC, $quarterOneTTC);

        $quarterTwo = $this->getDoctrine()->getRepository('AppBundle:OrderCustomer')->quarterTwo();

        $quarterTwoHT = 0;
        $quarterTwoTTC = 0;
        foreach ($quarterTwo as $orderCustomer) {
            $quarterTwoHT = $quarterTwoHT + $orderCustomer->getTotalHT();
            $quarterTwoTTC = $quarterTwoTTC + $orderCustomer->getTotalTTC();
        }

        array_push($tabPriceHt, $quarterTwoHT);
        array_push($tabPriceTTC, $quarterTwoTTC);

        $quarterThree = $this->getDoctrine()->getRepository('AppBundle:OrderCustomer')->quarterThree();

        $quarterThreeHT = 0;
        $quarterThreeTTC = 0;
        foreach ($quarterThree as $orderCustomer) {
            $quarterThreeHT = $quarterThreeHT + $orderCustomer->getTotalHT();
            $quarterThreeTTC = $quarterThreeTTC + $orderCustomer->getTotalTTC();
        }

        array_push($tabPriceHt, $quarterThreeHT);
        array_push($tabPriceTTC, $quarterThreeTTC);

        $quarterTour = $this->getDoctrine()->getRepository('AppBundle:OrderCustomer')->quarterThree();

        $quarterFourHT = 0;
        $quarterFourTTC = 0;
        foreach ($quarterTour as $orderCustomer) {
            $quarterFourHT = $quarterFourHT + $orderCustomer->getTotalHT();
            $quarterFourTTC = $quarterFourTTC + $orderCustomer->getTotalTTC();
        }

        array_push($tabPriceHt, $quarterFourHT);
        array_push($tabPriceTTC, $quarterFourTTC);

        $quarter = [
            '1' => $tabPriceHt,
            '2' => $tabPriceTTC,
        ];

        $jsonQuater = json_encode($quarter);

        return $this->render('AppBundle:statistical:index.html.twig', [
            'jsonQuater' => $jsonQuater
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

    }

    public function updateAction(Request $request, Statistical $customer)
    {

    }

    public function indexByFavoriteAction(Request $request, Statistical $statistical){

    }



    public function repositoryStatistical()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Statistical');
    }
}