<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\TipoIncidencia;
use App\Entity\Emplazamiento;

class DummyController extends AbstractController
{
    #[Route('/dummy', name: 'dummy')]
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        /* REMOVE DATA EMPLAZAMIENTO
        $emplazaminetos_list = $this->getDoctrine()->getRepository(Emplazamiento::class)->findAll();
        
        foreach($emplazaminetos_list as $emplazamiento){
            $entityManager->remove($emplazamiento);
            $entityManager->flush();
        }

        dd($emplazaminetos_list);
        $entityManager = $this->getDoctrine()->getManager();
        */ 
        for ($i = 0; $i < 8; $i++) {
            $tipoIncidencia = new TipoIncidencia();
            $emplazamiento = new Emplazamiento();
            $tipoIncidencia->setNombre('Tipo Incidencia '.$i);
            $entityManager->persist($tipoIncidencia);
            $emplazamiento->setNombre('Emplazamiento '.$i);
            $entityManager->persist($emplazamiento);
        }
        $entityManager->flush();
        $emplazaminetos_list = $this->getDoctrine()->getRepository(Emplazamiento::class)->findAll();
        
        return $this->render('dummy/index.html.twig', [
            'controller_name' => 'DummyController'
        ]);
    }
}