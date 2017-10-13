<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 11/10/17
 * Time: 17:14
 */

namespace AppBundle\Service;


use Doctrine\Bundle\DoctrineBundle\Registry;

class Statistical
{

    private $doctrine;

    public function __construct(Registry $registry)
    {
        $this->doctrine = $registry;
    }

    public function getYearlyByUser($user)
    {
        $yearly = 0;

        $ordersCustomerYearly = $this->doctrine->getRepository('AppBundle:OrderCustomer')->yearly($user);

        foreach ($ordersCustomerYearly as $orderCustomerYearly) {
            $yearly = $yearly + $orderCustomerYearly->getTotalHT();
        }

        return $yearly;
    }

    public function getProductsTenMax()
    {
        $productsOrder = $this->doctrine->getRepository('AppBundle:ProductsOrder')->findAll();
        $tabProductOrder = [];

        foreach ($productsOrder as $productOrder) {
            array_push($tabProductOrder, $productOrder->getProduct()->getId());
        }

        $quantity = 0;
        $ref = '';
        $arrayRefCounter = [];
        foreach (array_unique($tabProductOrder) as $idProduct) {

            $idProducts = $this->doctrine->getRepository('AppBundle:ProductsOrder')->findProductId($idProduct);

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
//        array_splice($arrayRef,11);
//        array_splice($arrayCounter, 11);


        $arrayRefarrayCounter = [
            '1' => $arrayRef,
            '2' => $arrayCounter,
        ];

        return $arrayRefarrayCounter;
    }

    public function fourQuater()
    {
        $quarterOne = $this->doctrine->getRepository('AppBundle:OrderCustomer')->quarterOne();
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

        $quarterTwo = $this->doctrine->getRepository('AppBundle:OrderCustomer')->quarterTwo();

        $quarterTwoHT = 0;
        $quarterTwoTTC = 0;
        foreach ($quarterTwo as $orderCustomer) {
            $quarterTwoHT = $quarterTwoHT + $orderCustomer->getTotalHT();
            $quarterTwoTTC = $quarterTwoTTC + $orderCustomer->getTotalTTC();
        }

        array_push($tabPriceHt, $quarterTwoHT);
        array_push($tabPriceTTC, $quarterTwoTTC);

        $quarterThree = $this->doctrine->getRepository('AppBundle:OrderCustomer')->quarterThree();

        $quarterThreeHT = 0;
        $quarterThreeTTC = 0;
        foreach ($quarterThree as $orderCustomer) {
            $quarterThreeHT = $quarterThreeHT + $orderCustomer->getTotalHT();
            $quarterThreeTTC = $quarterThreeTTC + $orderCustomer->getTotalTTC();
        }

        array_push($tabPriceHt, $quarterThreeHT);
        array_push($tabPriceTTC, $quarterThreeTTC);

        $quarterFour = $this->doctrine->getRepository('AppBundle:OrderCustomer')->quarterFour();

        $quarterFourHT = 0;
        $quarterFourTTC = 0;
        foreach ($quarterFour as $orderCustomer) {
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

}