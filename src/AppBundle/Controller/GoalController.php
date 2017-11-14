<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 02/11/17
 * Time: 09:54
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Goal;
use AppBundle\Form\GoalType;
use AppBundle\Service\Statistical;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GoalController extends Controller
{

    public function updateAction(Request $request, Statistical $statistical)
    {
        $goalUser = $this->getDoctrine()->getRepository('AppBundle:Goal')->findOneByUser($this->getUser());
        if ($goalUser) {
            $goal = $goalUser;
            $goal->setUpdatedAt('now');
        } else {
            $goal = new Goal();
            $goal->setUser($this->getUser());
            $goal->setCreatedAt('now');
        }

        $form = $this->createForm(GoalType::class, $goal);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $goal->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($goal);
            $em->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('AppBundle:goal:form.html.twig', [
            'form' => $form->createView(),
            'user' => $this->getUser()
        ]);
    }

}