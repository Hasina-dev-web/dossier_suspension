<?php

namespace App\Controller;

use App\Entity\DossierSuspension;
use App\Form\DossierSuspensionType;
use App\Repository\DossierSuspensionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/dossier/suspension")
 */
class DossierSuspensionController extends Controller
{
    /**
     * @Route("/", name="dossier_suspension_index", methods={"GET"})
     * @IsGranted("ROLE_SUPER_ADMIN" , message="Vous n'avez pas d'accès")
     */
    public function index(DossierSuspensionRepository $dossierSuspensionRepository): Response
    {
        return $this->render('dossier_suspension/index.html.twig', [
            'dossier_suspensions' => $dossierSuspensionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="dossier_suspension_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $dossierSuspension = new DossierSuspension();
        $form = $this->createForm(DossierSuspensionType::class, $dossierSuspension);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($dossierSuspension);
            $entityManager->flush();

            return $this->redirectToRoute('dossier_suspension_index');
        }

        return $this->render('dossier_suspension/new.html.twig', [
            'dossier_suspension' => $dossierSuspension,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="dossier_suspension_show", methods={"GET"})
     */
    public function show(DossierSuspension $dossierSuspension): Response
    {
        return $this->render('dossier_suspension/show.html.twig', [
            'dossier_suspension' => $dossierSuspension,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="dossier_suspension_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN", message="No access! Get out!")
     */
    public function edit(Request $request, DossierSuspension $dossierSuspension): Response
    {
        $form = $this->createForm(DossierSuspensionType::class, $dossierSuspension);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dossier_suspension_show' , ['id'=>$dossierSuspension->getId()]);
        }

        return $this->render('dossier_suspension/edit.html.twig', [
            'dossier_suspension' => $dossierSuspension,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="dossier_suspension_delete", methods={"DELETE"})
     * @IsGranted("ROLE_SUPER_ADMIN" ,message="Vous n'avez pas d'accès ! Get out!")
     */
    public function delete(Request $request, DossierSuspension $dossierSuspension): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dossierSuspension->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($dossierSuspension);
            $entityManager->flush();
        }

        return $this->redirectToRoute('liste');
    }
}
