<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 22/07/17
 * Time: 14:24
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Product;
use AppBundle\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    public function indexAction()
    {
        $product = $this->repositoryCustomer()->findAll();
        return $this->render('AppBundle:product:index.html.twig', [
            'products' => $product
        ]);
    }

    public function indexByCustomerAction(Product $product)
    {
        return $this->render('AppBundle:product:indexByProduct.html.twig', [
            'product' => $product
        ]);
    }

    public function createAction(Request $request)
    {

        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('AppBundle:product:form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function updateAction(Request $request, Product $product)
    {
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
        }

        return $this->render('AppBundle:customer:form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function deleteAction(Request $request, Product $product)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();

        return $this->redirectToRoute('customer_index');
    }

    public function repositoryCustomer()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Product');
    }
}