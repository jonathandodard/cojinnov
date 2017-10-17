<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 17/10/17
 * Time: 08:27
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:user:index.html.twig', [
            'user' => $this->getUser()
        ]);

    }

    public function setName()
    {

    }
}