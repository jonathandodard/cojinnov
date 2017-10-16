<?php

namespace AppBundle\Controller;

use AppBundle\Service\Statistical;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatisticalController extends Controller
{
    public function indexAction(Statistical $statistical)
    {
        $topTenProduct = $statistical->getProductsTenMax($this->getUser());
        $quarter = $statistical->fourQuater($this->getUser());
        
        $jsonQuater = json_encode($quarter);
        $jsonTopTenProduct = json_encode($topTenProduct);

        return $this->render('AppBundle:statistical:index.html.twig', [
            'jsonQuater' => $jsonQuater,
            'jsonTopTenProduct' => $jsonTopTenProduct,
        ]);
    }
}