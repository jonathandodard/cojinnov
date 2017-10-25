<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 17/10/17
 * Time: 08:27
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    public function setNameAction(Request $request)
    {
        if($request->isXmlHttpRequest()) {
            $user = $this->getUser();
            $user->setUsername($request->get('data'));
            $user->setUsernameCanonical($request->get('data'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        return new JsonResponse();
    }

    public function setMailAction(Request $request)
    {
        if($request->isXmlHttpRequest()) {
            $user = $this->getUser();
            $user->setEmail($request->get('data'));
            $user->setEmailCanonical($request->get('data'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        return new JsonResponse();
    }

    public function setPassword()
    {

    }
}