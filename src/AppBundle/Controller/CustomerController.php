<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 04/07/17
 * Time: 18:23
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Customer;
use AppBundle\Form\CustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();

        $customers = $this->repositoryCustomer()->findByUser($user);

        return $this->render('AppBundle:customer:index.html.twig', [
            'customers' => $customers,
            'user' => $this->getUser()
        ]);
    }

    public function indexByCustomerAction(Customer $customer)
    {
        $user = $this->getUser();

        $orders = $this->getDoctrine()->getRepository('AppBundle:OrderCustomer')->findBy(
            [
                'customer' =>$customer,
                'user' => $user
            ]
        );

        return $this->render('AppBundle:customer:indexByCustomer.html.twig', [
            'customer' => $customer,
            'orders' => $orders,
            'user' => $this->getUser()
        ]);
    }

    public function createAction(Request $request)
    {
        $customer = new Customer();
        $form = $this->createForm(CustomerType::class, $customer);


        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $customer->setUser($this->getUser());
            $customer->setCreatedAt();
            $customer->setUpdatedAt('now');
            $user = $this->getUser()->addCustomer($customer);
            $em->persist($customer);
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('customer_index');
        }

        return $this->render('AppBundle:customer:form.html.twig', [
            'form' => $form->createView(),
            'user' => $this->getUser()
        ]);
    }

    public function updateAction(Request $request, Customer $customer)
    {
        $form = $this->createForm(CustomerType::class, $customer);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();

            return $this->redirectToRoute('customer_index');
        }

        return $this->render('AppBundle:customer:form.html.twig', [
            'form' => $form->createView(),
            'user' => $this->getUser()
        ]);
    }

    public function deleteAction(Request $request, Customer $customer)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($customer);
        $em->flush();

        return $this->redirectToRoute('customer_index');
    }

    public function sortAction(Request $request)
    {
        if($request->isXmlHttpRequest()) {
            $alias = $request->get('data');
            $tabCustomer =[];

            if($request->isXmlHttpRequest()) {
                $entities = $this->repositoryCustomer()->sortsBy($alias);
                foreach ($entities as $entity ) {
                    array_push($tabCustomer, array(
                        'Id' => $entity->getId(),
                        'NumberAccount' => $entity->getNumberAccount(),
                        'Entitled' => $entity->getEntitled(),
                        'Ranking' => $entity->getRanking(),
                        'NameRepresentative' => $entity->getNameRepresentative(),
                        'Name' => $entity->getName(),
                        'Email' => $entity->getEmail(),
                        'Address' => $entity->getAddress(),
                        'AdditionalAddress' => $entity->getAdditionalAddress(),
                        'ZipCode' => $entity->getZipCode(),
                        'City' => $entity->getCity(),
                        'PhoneNumber' => $entity->getPhoneNumber(),
                    ));
                }
            }
            return new JsonResponse($tabCustomer);
        }
    }

    public function searchAction(Request $request)
    {
        $tabCustomer =[];
        if($request->isXmlHttpRequest()) {
            $entities = $this->repositoryCustomer()->searchByAll($request->get('data'), $this->getUser());
            foreach ($entities as $entity ) {
                array_push($tabCustomer, array(
                    'Id' => $entity->getId(),
                    'NumberAccount' => $entity->getNumberAccount(),
                    'Entitled' => $entity->getEntitled(),
                    'Ranking' => $entity->getRanking(),
                    'NameRepresentative' => $entity->getNameRepresentative(),
                    'Name' => $entity->getName(),
                    'Email' => $entity->getEmail(),
                    'Address' => $entity->getAddress(),
                    'AdditionalAddress' => $entity->getAdditionalAddress(),
                    'ZipCode' => $entity->getZipCode(),
                    'City' => $entity->getCity(),
                    'PhoneNumber' => $entity->getPhoneNumber(),
                ));
            }
        }
        return new JsonResponse($tabCustomer);
    }

    public function pdfAction(Customer $customer, Request $request)
    {

        $user = $this->getUser();

        $orders = $this->getDoctrine()->getRepository('AppBundle:OrderCustomer')->findBy(
            [
                'customer' =>$customer,
                'user' => $user
            ]
        );

        $html = $this->renderView('AppBundle:customer:pdfByCutomer.html.twig',
            [
                'customer' => $customer,
                'orders' => $orders,
                'base_dir' => $this->get('kernel')->getRootDir() . '/../web' . $request->getBasePath()
            ]
        );
//        'base_dir' => $this->get('kernel')->getRootDir() . '/../web' . $request->getBasePath()

        $filename = sprintf($customer->getNumberAccount().'.pdf', date('Y-m-d'));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );
    }

    public function repositoryCustomer()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Customer');
    }
}