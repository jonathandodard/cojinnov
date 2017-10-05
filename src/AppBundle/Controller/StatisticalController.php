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
        $topTenProduct = $this->getProductsTenMax();
        $quarter = $this->fourQuater();
        
        $jsonQuater = json_encode($quarter);
        $jsonTopTenProduct = json_encode($topTenProduct);

        return $this->render('AppBundle:statistical:index.html.twig', [
            'jsonQuater' => $jsonQuater,
            'jsonTopTenProduct' => $jsonTopTenProduct,
        ]);
    }

    public function getProductsTenMax()
    {
        $productsOrder = $this->getDoctrine()->getRepository('AppBundle:ProductsOrder')->findAll();

        $tabProductOrder = [];

        foreach ($productsOrder as $productOrder) {
            array_push($tabProductOrder, $productOrder->getProduct()->getId());
        }

        $quantity = 0;
        $ref = '';
        $arrayRefCounter = [];
        foreach (array_unique($tabProductOrder) as $idProduct) {

            $idProducts = $this->getDoctrine()->getRepository('AppBundle:ProductsOrder')->findProductId($idProduct);

            foreach ($idProducts as $productOrder) {
                $quantity = $productOrder->getQuantity() + $quantity;
                $ref = $productOrder->getProduct()->getReference();
            }

            $arrayRefCounter[$ref] = $quantity;
            $quantity = 0;

        }
        arsort($arrayRefCounter);
        $arrayRef = [];
        $arrayCounter = ['data1'];
        foreach ($arrayRefCounter as $key => $item) {
            array_push($arrayRef, $key);
            array_push($arrayCounter, $item);
        }
        array_splice($arrayRef,11);
        array_splice($arrayCounter, 11);


        $arrayRefarrayCounter = [
            '1' => $arrayRef,
            '2' => $arrayCounter,
        ];

        return $arrayRefarrayCounter;
    }

    public function fourQuater()
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

        return $quarter;
    }

    public function indexByFavoritesAction()
    {
        $statistics = $this->repositoryCustomer()->findAll();

        return $this->render('AppBundle:statistical:indexByFavorites.html.twig', [
            'statistics' => $statistics
        ]);
    }

    public function repositoryStatistical()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Statistical');
    }
}