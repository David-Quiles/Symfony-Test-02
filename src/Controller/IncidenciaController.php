<?php

namespace App\Controller;

use App\Entity\Incidencia;
use App\Entity\TipoIncidencia;
use App\Entity\Emplazamiento;
use App\Form\IncidenciaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class IncidenciaController extends AbstractController
{
    /**
    * @Route("/incidencia", name="incidencia")
    */
    public function index(): Response
    {

        $incidencia = new Incidencia();
        $entityManager = $this->getDoctrine()->getManager();
        $emplazamientos_array = $this->getDoctrine()->getRepository(Emplazamiento::class)->findAll();
        //$incidencia = new Incidencia();
        $form = $this->createForm(IncidenciaType::class, $incidencia);
        return $this->render('incidencia/index.html.twig', [
            'controller_name' => 'IncidenciaController',
            'formulario' => $form->createView()
        ]);
    }
}