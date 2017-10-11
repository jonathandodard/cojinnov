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

class HomeController extends Controller
{
    public function indexAction(Statistical $statistical)
    {
        $topTenProduct = $statistical->getProductsTenMax();
        $quarter = $statistical->fourQuater();

        $jsonQuater = json_encode($quarter);
        $jsonTopTenProduct = json_encode($topTenProduct);

        return $this->render('AppBundle:page:home.html.twig', [
            'page'=>'home',
            'yearly'=> $statistical->getYearlyByUser($this->getUser()),
            'jsonQuater' => $jsonQuater,
            'jsonTopTenProduct' => $jsonTopTenProduct
        ]);

    }
}