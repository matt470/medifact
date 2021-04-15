<?php

namespace App\Controller;

use App\Repository\PatientRepository;
use App\Repository\ActeRepository;
use App\Repository\FactureRepository;
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
    
    /**
     * @Route("/patients-debiteurs", name="patients_debiteurs")
     */
    public function patientsDebiteurs(PatientRepository $patientRepository): 
                                                                      Response {
        $this->denyAccessUnlessGranted('ROLE_PRATICIEN');
        
        $patients = $patientRepository->findAll();
        $patientsDebiteurs = [];
        foreach ($patients as $patient) {
            $factures = $patient->getFactures();
            $sommeTarif = 0;
            $sommePaye  = 0;
            foreach ($factures as $facture) {
                $sommeTarif += $facture->getTarif();
                $sommePaye  += $facture->getPaye();
            }
            if ($sommeTarif > $sommePaye) {
                array_push($patientsDebiteurs, $patient);
            }
        }
        
        return $this->render('patient/debiteurs.html.twig', [
            'patients' => $patientsDebiteurs,
        ]);
    }
    
    /**
     * @Route("/Chiffre-affaire", name="chiffre_affaire")
     */
    public function chiffreAffaire(FactureRepository $factureRepository) : 
                                                                      Response {
        $this->denyAccessUnlessGranted('ROLE_PRATICIEN');
        
        $annee = date("Y");
        $factures = $factureRepository->findByYear($annee);
        $chiffreAffaire = 0;
        foreach ($factures as $facture) {
            $chiffreAffaire += $facture->getPaye();    
        }
        
        return $this->render('index/chiffre-affaire.html.twig', [
            'factures'        => $factures,
            'chiffre_affaire' => $chiffreAffaire,
        ]);
    }
    
}
