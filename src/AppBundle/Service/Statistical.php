<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 11/10/17
 * Time: 17:14
 */

namespace AppBundle\Service;


use AppBundle\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\Validator\Constraints\Date;

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

    public function getMenstrualByUser(User $user)
    {
        $count = 0;
        $TabNumberMenstrual = $this->doctrine->getRepository('AppBundle:OrderCustomer')->menstrual($user);

        foreach ( $TabNumberMenstrual as $numberMenstrual )
        {
            $count = $count + $numberMenstrual->getTotalHT();
        }

        return $count;

    }

    public function getProductsTenMax($user)
    {
        $productsOrder = $this->doctrine->getRepository('AppBundle:ProductsOrder')->findByUser($user);
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

    public function fourQuater($user)
    {
        $quarterOne = $this->doctrine->getRepository('AppBundle:OrderCustomer')->quarterOne($user);
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

        $quarterTwo = $this->doctrine->getRepository('AppBundle:OrderCustomer')->quarterTwo($user);

        $quarterTwoHT = 0;
        $quarterTwoTTC = 0;
        foreach ($quarterTwo as $orderCustomer) {
            $quarterTwoHT = $quarterTwoHT + $orderCustomer->getTotalHT();
            $quarterTwoTTC = $quarterTwoTTC + $orderCustomer->getTotalTTC();
        }

        array_push($tabPriceHt, $quarterTwoHT);
        array_push($tabPriceTTC, $quarterTwoTTC);

        $quarterThree = $this->doctrine->getRepository('AppBundle:OrderCustomer')->quarterThree($user);

        $quarterThreeHT = 0;
        $quarterThreeTTC = 0;
        foreach ($quarterThree as $orderCustomer) {
            $quarterThreeHT = $quarterThreeHT + $orderCustomer->getTotalHT();
            $quarterThreeTTC = $quarterThreeTTC + $orderCustomer->getTotalTTC();
        }

        array_push($tabPriceHt, $quarterThreeHT);
        array_push($tabPriceTTC, $quarterThreeTTC);

        $quarterFour = $this->doctrine->getRepository('AppBundle:OrderCustomer')->quarterFour($user);

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

    // sale a product per semester
    public function SaleProduct(User $user)
    {
        $count = 0;
        $goal = $this->doctrine->getRepository('AppBundle:Goal')->findOneByUser($user);
        $time = Date('n');
        $semestre = ($time <= 6)?true:false;

        $product = $this->doctrine->getRepository('AppBundle:Product')->findOneByReference($goal->getGoalOneRef());
        $tabProductOrder = $this->doctrine->getRepository('AppBundle:ProductsOrder')->findCountProductId($product->getId(),$semestre, $user);
        foreach ($tabProductOrder as $value) {
            $count = $count + $value->getQuantity();
        }

        $percent = round((100 * $count)/$goal->getGoalOne(), 0);
        $percentMax = ($percent > 100 )? 100 : false;

        $parameters = [
            'reference' => $product->getReference(),
            'total' => $count,
            'goal' => $goal->getGoalOne(),
            'finishedPercent' => (!$percentMax)?$percent:['percent'=>round($percent, 0),'max'=>$percentMax]
        ];

        return $parameters;
    }

    // turnover per years
    public function turnoverYear(User $user)
    {
        $goal = $this->doctrine->getRepository('AppBundle:Goal')->findOneByUser($user);
        $percent = round((100 *  $this->getYearlyByUser($user))/$goal->getGoalTwo(), 0);
        $percentMax = ($percent > 100 )? 100 : false;


        $parameters = [
            'goal' => $goal->getGoalTwo(),
            'total' => $this->getYearlyByUser($user),
            'finishedPercent' => (!$percentMax)?$percent:['percent'=>$percent,'max'=>$percentMax]
        ];

        return $parameters;
    }

    // turnover per month
    public function turnoverMonth(User $user)
    {
        $goal = $this->doctrine->getRepository('AppBundle:Goal')->findOneByUser($user);
        $percent = round((100 *  $this->getMenstrualByUser($user))/$goal->getGoalThree(), 0);
        $percentMax = ($percent > 100 )? 100 : false;

        $parameters = [
            'goal' => $goal->getGoalThree(),
            'total' =>         $numberMenstrual = $this->getMenstrualByUser($user),
            'finishedPercent' => (!$percentMax)?$percent:['percent'=>round($percent, 0),'max'=> $percentMax]
        ];

        return $parameters;
    }

}