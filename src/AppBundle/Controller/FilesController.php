<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 06/10/17
 * Time: 13:04
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Customer;
use AppBundle\Entity\Files;
use AppBundle\Form\FilesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;

class FilesController extends Controller
{
    public function importCustomerAction(Request $request)
    {
        $files = new Files();

        $form = $this->createForm(FilesType::class, $files);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $files->getFiles();

            $fileName = $files->setName($this->nameFileUnique(Files::IMPORT, Files::CUSTOMER));
            $extension = pathinfo($file->getClientOriginalName())['extension'];

            $files->setExtention($extension);
            $files->setPath('import/customers/' . $this->nameFileUnique(Files::IMPORT, Files::CUSTOMER));
            $files->setType(Files::IMPORT);
            $files->setCreatedAt('now');
            $file->move(
                $this->getParameter('import_customer_directory'),
                $fileName->getName() . '.' . $extension
            );
            $em = $this->getDoctrine()->getManager();
            $em->persist($files);
            $em->flush();

            $row = 0;
            $error = [];
            $excelDoc = fopen('/home/jonathan/Documents/Projets/cojinnov/web/import/customers/' . $files->getName() . '.' . $extension, 'r');
            while (($data = fgetcsv($excelDoc, 1000, ",")) !== FALSE) {
                if ($data[0] && $data[10] && $row > 0 ) {
                    $em = $this->getDoctrine()->getManager();

                    $customer = new Customer();
                    $customer
                        ->setNumberAccount($data[0])
                        ->setEntitled($data[1])
                        ->setRanking($data[2])
                        ->setNameRepresentative($data[4])
                        ->setName($data[5])
                        ->setPhoneNumber($data[6])
                        ->setEmail($data[7])
                        ->setAddress($data[8])
                        ->setAdditionalAddress($data[9])
                        ->setZipCode($data[10])
                        ->setCity($data[12])
                        ->setUser($this->getUser())
                    ;

                    $customer->setCreatedAt('now');

//                    try {
                        $em->persist($customer);
                        $em->flush();
//                    } catch(\Doctrine\DBAL\DBALException $e) {
//                        array_push($error, [$e->getCode(), $customer->getNumberAccount()]);
//                        dump($e->getCode());die;
//                        $this->get('session')->getFlashBag()->add('error', 'Can\'t insert entity.');
//                        return $this->redirect($this->generateUrl('your_route'));
//                    }


                } else {
                    $row ++;
                }
            }
            fclose($excelDoc);

            return $this->redirect($this->generateUrl('customer_index'));
        }

        return $this->render('AppBundle:files:form.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function exportCustomerAction()
    {
        die('test');
    }

    public function importOrderAction()
    {
        die('test');
    }

    public function exportOrderAction()
    {
        die('test');
    }

    public function nameFileUnique($type,$nameEntity, $counter =1)
    {
        $name = $type.$nameEntity.date("Ymd").'-'.$this->getUser()->getId();

        $fileByName = $this->repositoryFiles()->findOneByName($name.'-'.$counter);
        if ($fileByName) {
            $counter ++;
            return $this->nameFileUnique($type,$nameEntity,$counter);
        }

        return $name.'-'.$counter;
    }

    public function repositoryFiles()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Files');
    }
}