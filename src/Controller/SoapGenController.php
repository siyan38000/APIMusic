<?php


namespace App\Controller;

use App\Service\SoapOperations;
use Laminas\Soap\Wsdl;
use Laminas\Soap\Wsdl\ComplexTypeStrategy\DefaultComplexType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Laminas\Soap\AutoDiscover;

class SoapGenController extends AbstractController
{
    /**
     * @Route("/soapgen", name="soapgen")
     */
    public function soapGenAction()
    {
        // Génération automatique
        $autodiscover = new AutoDiscover();
        $autodiscover->setClass('\App\Soap\SoapOperations')
            ->setUri('http://localhost:8000/soap')
            ->setServiceName('SoapGenService');
        header('Content-Type: application/wsdl+xml');
        $autodiscover->generate();
        $autodiscover->dump("../soap.wsdl");
        return new Response($autodiscover->toXml());

        
    }
}