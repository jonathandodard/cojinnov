<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Provider;
use AppBundle\Form\ProviderType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProviderController extends Controller
{
    public function indexAction ()
    {
        $user = $this->getUser();

        $providers = $this->repositoryProvider()->findByUser($user);

        return $this->render('AppBundle:provider:index.html.twig', [
            'providers'=>$providers,
            'user' => $this->getUser()
        ]);
    }

    public function indexByProviderAction (Provider $provider)
    {
        $user = $this->getUser();

        return $this->render('AppBundle:provider:indexByProvider.html.twig', [
            'provider' => $provider,
            'user' => $this->getUser()
        ]);
    }

    public function createAction (Request $request)
    {
        $provider = new Provider();
        $form = $this->createForm(ProviderType::class, $provider);


        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $provider->setUser($this->getUser());
            $provider->setCreatedAt();
            $provider->setUpdatedAt('now');
            $em->persist($provider);
            $em->flush();

            return $this->redirectToRoute('provider_index');
        }

        return $this->render('AppBundle:provider:form.html.twig', [
            'form' => $form->createView(),
            'user' => $this->getUser()
        ]);
    }

    public function updateAction (Request $request, Provider $provider)
    {
        $form = $this->createForm(ProviderType::class, $provider);


        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $provider->setUser($this->getUser());
            $provider->setCreatedAt();
            $provider->setUpdatedAt('now');
            $em->persist($provider);
            $em->flush();

            return $this->redirectToRoute('provider_index');
        }

        return $this->render('AppBundle:provider:form.html.twig', [
            'form' => $form->createView(),
            'user' => $this->getUser()
        ]);
    }

    public function deleteAction ()
    {
        return $this->redirectToRoute('provider_index');
    }

    public function repositoryProvider()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Provider');
    }
}
