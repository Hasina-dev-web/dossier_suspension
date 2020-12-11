<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Form\DossierType;
use App\Entity\DossierSuspension;
use App\Form\AvisType;
use App\Entity\AvisPresident;
use App\Entity\User;

class HomeController extends Controller
{
    /**
     * @Route("/new", name="home")
     */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $dossierSuspension= new DossierSuspension();
        $avisPresident= new AvisPresident();

        $form = $this->createForm(DossierType::class, $dossierSuspension);
        $form1 = $this->createForm(AvisType::class, $avisPresident);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $dossierSuspension->setCreatedAt(new \Datetime);

            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($dossierSuspension);
            $entityManager->flush();

            return $this->redirectToRoute('dossier_suspension_show',[
                'id'=>$dossierSuspension->getId()
            ]);
        }
        $form1->handleRequest($request);
        if($form1->isSubmitted() && $form1->isValid())
        {
            $avisPresident->setCreatedAt(new \Datetime);

            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($avisPresident);
            $entityManager->flush();
            
            return $this->redirectToRoute('dossier_suspension_show',[
                'id'=>$dossierSuspension->getId()
            ]);
        }
        
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'form'=>$form->createView(),
            'form1'=>$form1->createView(),
            'avisPresident'=>$avisPresident,
            'dossierSuspension'=>$dossierSuspension
        ]);
        
        return $this->render('home/liste.html.twig');
    }
    /**
     * @Route("/", name="liste")
     */
    public function liste()
    {
        $repo=$this->getDoctrine()->getRepository(DossierSuspension::class);
        $dossierSuspensions=$repo->findAll();
        return $this->render('home/liste.html.twig',[
            'dossierSuspensions'=>$dossierSuspensions
        ]);
    }
    /**
     * @Route("/logout" , name="logout")
     */
    public function logout()
    {

    }
    /**
     * @Route("/profile" , name="profile_show")
     */
    public function profile()
    {
        $repo=$this->getDoctrine()->getRepository(User::class);
        $user=$repo->findAll();
       return $this->render('@FOSUser/Profile/show.html.twig',[
           'user'=>$user
       ]);
    }
    
}
