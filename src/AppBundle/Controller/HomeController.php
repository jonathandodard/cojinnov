<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 23/07/17
 * Time: 00:18
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:page:home.html.twig', [
            'page'=>'home'
        ]);

    }
}