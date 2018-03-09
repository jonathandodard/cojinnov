<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 22/07/17
 * Time: 14:24
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Product;
use AppBundle\Entity\Provider;
use AppBundle\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    public function indexAction()
    {
        $providers = $this->getDoctrine()->getRepository('AppBundle:Provider')->findByUser($this->getUser());
        $products = $this->repositoryCustomer()->findByUser($this->getUser());

        return $this->render('AppBundle:product:index.html.twig', [
            'products' => $products,
            'providers' => $providers,
            'user' => $this->getUser()
        ]);
    }

    public function indexByProviderAction(Provider $provider)
    {
        $providers = $this->getDoctrine()->getRepository('AppBundle:Provider')->findByUser($this->getUser());

        $products = $this->repositoryCustomer()->findBy(
            [
                'user' => $this->getUser(),
                'provider' => $provider,
            ]
        );

        return $this->render('AppBundle:product:indexByProductsProvider.html.twig', [
            'products' => $products,
            'providers' => $providers,
            'provider' => $provider,
            'productDefinitions' => $provider->getProductDefinition(),
        ]);
    }

    public function indexByProductAction(Product $product)
    {
        $test = "{'tg': '288.79', 'ts' : '246.91', 'tb' : '222.22', 'ta':'210.53', 'taOne:'200', 'ppdia':'189.47'}";
//        dump(json_decode($product->getPrices()->getPrices()));die;
        return $this->render('AppBundle:product:indexByProduct.html.twig', [
            'product' => $product,
            'user' => $this->getUser()
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
            'form' => $form->createView(),
            'user' => $this->getUser()
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
            'form' => $form->createView(),
            'user' => $this->getUser()
        ]);
    }

    public function deleteAction(Request $request, Product $product)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();

        return $this->redirectToRoute('customer_index');
    }

    public function searchAction(Request $request)
    {
        $tabProduct =[];
        if($request->isXmlHttpRequest()) {
            $entities = $this->repositoryCustomer()->searchByAll($request->get('data'), $this->getUser());
            if (empty($entities)) {
                $tabProduct = false;
            } else {
                foreach ($entities as $entity ) {
                    array_push($tabProduct, array(
                        'Id' => $entity->getId(),
                        'Type' => $entity->getType(),
                        'Reference' => $entity->getReference(),
                        'Name' => $entity->getName(),
                        'Category' => $entity->getCategory(),
                        'ConditionProduct' => $entity->getConditionProduct(),
                        'Duration' => $entity->getDuration(),
                        'Pcb' => $entity->getPcb(),
                        'SaleUnit' => $entity->getSaleUnit(),
                        'Tg' => $entity->getTg(),
                        'Ts' => $entity->getTs(),
                        'Tb' => $entity->getTb(),
                        'TaOne' => $entity->getTaOne(),
                        'TaTwo' => $entity->getTaTwo(),
                        'Ppdia' => $entity->getPpdia(),
                    ));
                }
            }
        }
        return new JsonResponse($tabProduct);
    }

    public function repositoryCustomer()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Product');
    }
}