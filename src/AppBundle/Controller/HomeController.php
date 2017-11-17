<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 23/07/17
 * Time: 00:18
 */

namespace AppBundle\Controller;


use AppBundle\Service\Statistical;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function indexAction(Request $request, Statistical $statistical)
    {
        $topTenProduct = $statistical->getProductsTenMax($this->getUser());
        $quarter = $statistical->fourQuater($this->getUser());

        $jsonQuater = json_encode($quarter);
        $jsonTopTenProduct = json_encode($topTenProduct);
//dump($statistical->SaleProduct($this->getUser()));die;
        $goal = [
            'goalOne' => $statistical->SaleProduct($this->getUser()),
            'goalTwo' => $statistical->turnoverYear($this->getUser()),
            'goalThree' => $statistical->turnoverMonth($this->getUser()),
        ];

        return $this->render('AppBundle:page:home.html.twig', [
            'page'=>'home',
            'yearly'=> $statistical->getYearlyByUser($this->getUser()),
            'jsonQuater' => $jsonQuater,
            'jsonTopTenProduct' => $jsonTopTenProduct,
            'goal' => $goal,
            'user' => $this->getUser()
        ]);

    }
}