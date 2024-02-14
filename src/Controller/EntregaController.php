<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class EntregaController extends AbstractController
{
    #[Route('/pdfdownload')]
    public function getPdf(): Response
    {
        return $this -> render('entrega/getpdf.html.twig');
    }

    #[Route('/')]
    public function login(): Response
    {
        return $this -> render('entrega/login.html.twig');
    }

    #[Route('/enviardatos', name:'app_enviar', methods:['POST'])]
    public function enviar(Request $respuesta)
    {
        if($respuesta->request->get ('mensaje') != "")
        {
            $valor = $respuesta->request->get('mensaje');

            return $this->render('entrega/getpdf.html.twig', 
            [
                'user' => $valor
            ]);
        }
        else
        {
            return new Response('<h1 style="text-align: center">Ingrese Un nikname</h1>');
        }
    }
}