<?php

namespace App\Controller;

use App\Repository\PatientRepository;
use App\Repository\ActeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    
    /**
     * @Route("/patient/actes", name="actes")
     */
    public function actes (ActeRepository $acteRepository, Request $request) : Response {
        $patient_id = $request->query->get('patient_id');
        return $this->render('acte/index.html.twig', [
            'actes' => $acteRepository->findBy(['patient' => $patient_id])
        ]);
    }
    
    /**
     * @Route("/patient/acte/facture", name="facture_acte")
     */
    public function facture_acte (FactureRepository $factureRepository, Request $request) : Response {
        $acte_id = $request->query->get('acte_id');
        return $this->render('facture/index.html.twig', [
            'factures' => $factureRepository->findBy(['acte' => $acte_id])
        ]);
    }
    
}
