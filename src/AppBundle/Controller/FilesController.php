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
use AppBundle\Entity\Product;
use AppBundle\Form\FilesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\File\File;
use PHPExcel_Shared_ZipArchive;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

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
            $excelDoc = fopen('/home/pi/projects/prod_cojinnov/cojinnov/web/import/customers'. $files->getName() . '.' . $extension, 'r');
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
            'user' => $this->getUser()
        ));
    }

    public function exportCustomerListAction()
    {

        $workbook = new \PHPExcel;

        $sheet = $workbook->getActiveSheet();

        $customers = $this->getDoctrine()->getRepository('AppBundle:Customer')->findAll();

        $styleA1 = $sheet->getStyle('1');
        $styleFont = $styleA1->getFont();
        $styleFont->setBold(true);

//        header
        $sheet->setCellValueByColumnAndRow(0,1, 'NumberAccount');
        $sheet->setCellValueByColumnAndRow(1,1, 'Entitled');
        $sheet->setCellValueByColumnAndRow(2,1, 'Ranking');
        $sheet->setCellValueByColumnAndRow(3,1, 'NameRepresentative');
        $sheet->setCellValueByColumnAndRow(4,1, 'Name');
        $sheet->setCellValueByColumnAndRow(5,1, 'Email');
        $sheet->setCellValueByColumnAndRow(6,1, 'Address');
        $sheet->setCellValueByColumnAndRow(7,1, 'AdditionalAddress');
        $sheet->setCellValueByColumnAndRow(8,1, 'ZipCode');
        $sheet->setCellValueByColumnAndRow(9,1, 'City');
        $sheet->setCellValueByColumnAndRow(10,1, 'PhoneNumber');
        $sheet->setCellValueByColumnAndRow(11,1, 'Price');

        $row = 0;
        for ($counter = 0; $counter <  count($customers); $counter++) {
            $row = ($counter == 0)?2: $row + 1;

            $sheet->getColumnDimension('A')->setWidth("15");
            $sheet->setCellValueByColumnAndRow(0, $row, $customers[$counter]->getNumberAccount());
            $sheet->getColumnDimension('B')->setWidth("30");
            $sheet->setCellValueByColumnAndRow(1, $row, $customers[$counter]->getEntitled());
            $sheet->getColumnDimension('C')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(2, $row, $customers[$counter]->getRanking());
            $sheet->getColumnDimension('D')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(3, $row, $customers[$counter]->getNameRepresentative());
            $sheet->getColumnDimension('E')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(4, $row, $customers[$counter]->getName());
            $sheet->getColumnDimension('F')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(5, $row, $customers[$counter]->getEmail());
            $sheet->getColumnDimension('G')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(6, $row, $customers[$counter]->getAddress());
            $sheet->getColumnDimension('H')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(7, $row, $customers[$counter]->getAdditionalAddress());
            $sheet->getColumnDimension('I')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(8, $row, $customers[$counter]->getZipCode());
            $sheet->getColumnDimension('J')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(9, $row, $customers[$counter]->getCity());
            $sheet->getColumnDimension('K')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(10, $row, $customers[$counter]->getPhoneNumber());
            $sheet->getColumnDimension('L')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(11, $row, $customers[$counter]->getPrice());
        }

        $writer = new \PHPExcel_Writer_Excel2007($workbook);

//        $records = '/home/jonathan/Documents/fichier.xlsx';
//        $writer->save($records);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="nomfichier.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = \PHPExcel_IOFactory::createWriter($workbook, 'Excel2007');
        $writer->save('php://output');

        return $this->redirect($this->generateUrl('import_cutomer'));
    }

    public function exportByCustomerAction(Customer $customer)
    {

        $user = $this->getUser();

        $orders = $this->getDoctrine()->getRepository('AppBundle:OrderCustomer')->findBy(
            [
                'customer' =>$customer,
                'user' => $user
            ]
        );


        $workbook = new \PHPExcel;

        $sheet = $workbook->getActiveSheet();

        $styleA1 = $sheet->getStyle('2');
        $styleFont = $styleA1->getFont();
        $styleFont->setBold(true);
        $style = array(
            'alignment' => array(
                'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            )
        );

        $sheet->getStyle("A1")->applyFromArray($style);


        $sheet->mergeCells('A1:D1');
        $sheet->setCellValueByColumnAndRow(0,1, 'Client : '.$customer->getNumberAccount());
        $sheet->setCellValueByColumnAndRow(0,2, 'NumberOrder');
        $sheet->setCellValueByColumnAndRow(1,2, 'date');
        $sheet->setCellValueByColumnAndRow(2,2, 'price_wt');
        $sheet->setCellValueByColumnAndRow(3,2, 'price_iot');

        $row = 0;
        for ($counter = 0; $counter <  count($orders); $counter++) {
            $row = ($counter == 0) ? 3 : $row + 1;

            $sheet->getColumnDimension('A')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(0, $row, $orders[$counter]->getName());
            $sheet->getColumnDimension('B')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(1, $row, $orders[$counter]->getCreatedAt());
            $sheet->getColumnDimension('C')->setWidth("15");
            $sheet->setCellValueByColumnAndRow(2, $row, $orders[$counter]->getTotalHT()." €");
            $sheet->getColumnDimension('D')->setWidth("15");
            $sheet->setCellValueByColumnAndRow(3, $row, $orders[$counter]->getTotalTTC()." €");

        }
        $writer = new \PHPExcel_Writer_Excel2007($workbook);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Export.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = \PHPExcel_IOFactory::createWriter($workbook, 'Excel2007');
        $writer->save('php://output');

        return $this->redirect($this->generateUrl('import_cutomer'));

    }

    public function importOrderAction()
    {
        die('test');
    }

    public function exportOrderAction()
    {
        $user = $this->getUser();

        $orders = $this->getDoctrine()->getRepository('AppBundle:OrderCustomer')->findBy(
            [
                'user' => $user
            ]
        );


        $workbook = new \PHPExcel;

        $sheet = $workbook->getActiveSheet();

        $styleA1 = $sheet->getStyle('0');
        $styleB1 = $sheet->getStyle('2');
        $styleFontA1 = $styleA1->getFont();
        $styleFontB2 = $styleB1->getFont();
        $styleFontA1->setBold(true);
        $styleFontB2->setBold(true);

        $sheet->mergeCells('A1:E1');
        $sheet->setCellValueByColumnAndRow(0,1, $this->translate('list_of_orders'));

        $style = array(
            'alignment' => array(
                'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            )
        );

        $sheet->getStyle("A1")->applyFromArray($style);

        $sheet->setCellValueByColumnAndRow(0,2, 'NumberOrder');
        $sheet->setCellValueByColumnAndRow(1,2, 'Customer');
        $sheet->setCellValueByColumnAndRow(2,2, 'date');
        $sheet->setCellValueByColumnAndRow(3,2, 'price_wt');
        $sheet->setCellValueByColumnAndRow(4,2, 'price_iot');
//        dump($orders);die;

        $row = 0;
        for ($counter = 0; $counter <  count($orders); $counter++) {
            $row = ($counter == 0) ? 3 : $row + 1;

            $sheet->getColumnDimension('A')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(0, $row, $orders[$counter]->getName());
            $sheet->getColumnDimension('B')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(1, $row, $orders[$counter]->getCustomer()->getNumberAccount());
            $sheet->getColumnDimension('C')->setWidth("20");
            $sheet->setCellValueByColumnAndRow(2, $row, $orders[$counter]->getCreatedAt());
            $sheet->getColumnDimension('D')->setWidth("15");
            $sheet->setCellValueByColumnAndRow(3, $row, $orders[$counter]->getTotalHT()." €");
            $sheet->getColumnDimension('E')->setWidth("15");
            $sheet->setCellValueByColumnAndRow(4, $row, $orders[$counter]->getTotalTTC()." €");

        }
        $writer = new \PHPExcel_Writer_Excel2007($workbook);

//        $records = '/home/jonathan/Documents/fichier.xlsx';
//        $writer->save($records);
        $dateNow = new \DateTime('NOW');


        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Export_orders_'.$dateNow->format('Y-n-d').'.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = \PHPExcel_IOFactory::createWriter($workbook, 'Excel2007');
        $writer->save('php://output');

        return $this->redirect($this->generateUrl('import_cutomer'));
    }


     public function importProductsAction(Request $request)
    {
        $files = new Files();

        $form = $this->createForm(FilesType::class, $files);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $files->getFiles();

            $fileName = $files->setName($this->nameFileUnique(Files::IMPORT, Files::PRODUCT));
            $extension = pathinfo($file->getClientOriginalName())['extension'];

            $files->setExtention($extension);
            $files->setPath('import/products/' . $this->nameFileUnique(Files::IMPORT, Files::PRODUCT));
            $files->setType(Files::IMPORT);
            $files->setCreatedAt('now');
            $file->move(
                $this->getParameter('import_products_directory'),
                $fileName->getName() . '.' . $extension
            );

            $em = $this->getDoctrine()->getManager();
            $em->persist($files);
            $em->flush();

            $row = 0;
            $error = [];
            $excelDoc = fopen('/home/pi/projects/prod_cojinnov/cojinnov/web/import/products' . $files->getName() . '.' . $extension, 'r');
            while (($data = fgetcsv($excelDoc, 1000, ",")) !== FALSE) {
                if ($data[0] && $row > 0 ) {
                    $em = $this->getDoctrine()->getManager();

                    $tg = (str_replace(',','.',str_replace("€",'',$data[9])));
                    $ts = (str_replace(',','.',str_replace("€",'',$data[10])));
                    $tb = (str_replace(',','.',str_replace("€",'',$data[11])));
                    $taOne = (str_replace(',','.',str_replace("€",'',$data[12])));
                    $taTwo = (str_replace(',','.',str_replace("€",'',$data[13])));
                    $tpdia = (str_replace(',','.',str_replace("€",'',$data[14])));



                    $product = new Product();
                    $product
                        ->setType($data[0])
                        ->setReference($data[1])
                        ->setName($data[3])
                        ->setCategory($data[4])
                        ->setConditionProduct($data[5])
                        ->setDuration($data[6])
                        ->setPcb($data[7])
                        ->setSaleUnit($data[8])
                        ->setTg($tg)
                        ->setTs($ts)
                        ->setTb($tb)
                        ->setTaOne($taOne)
                        ->setTaTwo($taTwo)
                        ->setPpdia($tpdia)
                        ->setUser($this->getUser())
                    ;

                    $em->persist($product);
                    $em->flush();


                } else {
                    $row ++;
                }
            }
            fclose($excelDoc);

            return $this->redirect($this->generateUrl('product_index'));
        }


        return $this->render('AppBundle:files:form.html.twig', array(
            'form' => $form->createView(),
            'user' => $this->getUser()
        ));
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

    public function translate($value)
    {
        return $this->get('translator')->trans($value);
    }

    public function repositoryFiles()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Files');
    }
}