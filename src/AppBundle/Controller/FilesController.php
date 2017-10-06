<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 06/10/17
 * Time: 13:04
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Files;
use AppBundle\Form\FilesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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

            $fileName = $files->setName($this->nameFileUnique(Files::IMPORT,Files::CUSTOMER));

            $files->setExtention(pathinfo($file->getClientOriginalName())['extension']);
            $files->setPath('import/customers/'.$this->nameFileUnique(Files::IMPORT,Files::CUSTOMER));
            $files->setType(Files::IMPORT);
            $files->setCreatedAt('now');
            $file->move(
                $this->getParameter('import_customer_directory'),
                $fileName->getName()
            );

            $em = $this->getDoctrine()->getManager();
            $em->persist($files);
            $em->flush();

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