<?php

namespace App\Controller;

use App\Entity\Acte;
use App\Form\ActeType;
use App\Repository\PatientRepository;
use Symfony\Component\Security\Core\Security;
use App\Repository\ActeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/acte")
 */
class ActeController extends AbstractController
{
    /**
     * @Route("/", name="acte_index", methods={"GET"})
     */
    public function index(ActeRepository $acteRepository): Response
    {
        return $this->render('acte/index.html.twig', [
            'actes' => $acteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="acte_new", methods={"GET","POST"})
     */
    public function new(Request $request, PatientRepository $patientRepository): Response
    {
        $patient_id = $request->query->get('patient_id');
        $patient = $patientRepository->find($patient_id);
        $acte = new Acte();
        $acte->setPatient($patient);
        $acte->setGestionnaire($this->getUser());
        $form = $this->createForm(ActeType::class, $acte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($acte);
            $entityManager->flush();

            return $this->redirectToRoute('acte_index');
        }

        return $this->render('acte/new.html.twig', [
            'acte' => $acte,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="acte_show", methods={"GET"})
     */
    public function show(Acte $acte): Response
    {
        return $this->render('acte/show.html.twig', [
            'acte' => $acte,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="acte_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Acte $acte): Response
    {
        $form = $this->createForm(ActeType::class, $acte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('acte_index');
        }

        return $this->render('acte/edit.html.twig', [
            'acte' => $acte,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="acte_delete", methods={"POST"})
     */
    public function delete(Request $request, Acte $acte): Response
    {
        if ($this->isCsrfTokenValid('delete'.$acte->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($acte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('acte_index');
    }
}
