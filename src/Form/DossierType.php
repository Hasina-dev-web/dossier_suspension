<?php

namespace App\Form;

use App\Entity\DossierSuspension;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\AvisType;


class DossierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('date_depot',DateType::class,[
            'label'=>" ",
            'widget'=>'single_text',
            'attr'=>[
                'id'=>"date_depot"
            ]
        ])
        ->add('sous_dossier',IntegerType::class,[
            'label'=>" ",
            'attr'=>[
                'id'=>"sous_dossier"]
        ])
        ->add('provision',TextType::class,[
            'label'=>" ",
            'required'=> false,
            'attr'=>[
                'id'=>"provision"]
        ])
        ->add('decision_attaque',TextareaType::class,[
            'label'=>"Décision attaquée :",
        ])
        ->add('ref_dos',TextType::class,[
            'label'=>"Réf.Dos.Cas :"
        ])
        ->add('demandeur',TextareaType::class,[
            'label'=>"Demandeur(s) :"
        ])
        ->add('tel_demandeur',TextType::class,[
            'label'=>"Tél :",
            'required'=> false
        ])
        ->add('email_demandeur',TextType::class,[
            'label'=>"E-mail :",
            'required'=> false
        ])
        ->add('defendeur',TextareaType::class,[
            'label'=>"Défendeur(s) :"
        ])
        ->add('tel_defendeur',TextType::class,[
            'label'=>"Tél :",
            'required'=> false
        ])
        ->add('email_defendeur',EmailType::class,[
            'label'=>"E-mail :",
            'required'=> false
        ])
        ->add('signification',DateType::class,[
            'label'=>" ",
            'widget'=>'single_text',
            'required'=> false,
            'attr'=>[
                'id'=>"signification"
            ]
        ])
        ->add('depot_signification',DateType::class,[
            'label'=>" ",
            'widget'=>'single_text',
            'required'=> false,
            'attr'=>[
                'id'=>"depot_signification"
            ]
        ])
        ->add('depot_memoire',DateType::class,[
            'label'=>" ",
            'widget'=>'single_text',
            'required'=> false,
            'attr'=>[
                'id'=>"depot_memoire"
            ]
        ])
        ->add('notif_memoire',DateType::class,[
            'label'=>" ",
            'widget'=>'single_text',
            'required'=> false,
            'attr'=>[
                'id'=>"notif_memoire"
            ]
        ])
        ->add('ref_ordonnance',TextareaType::class,[
            'label'=>" ",
            'required'=> false
        ])
        ->add('decision_premier_president',TextareaType::class,[
            'label'=>" ",
            'required'=> false
        ])
        ->add('numero_decision',IntegerType::class,[
            'label'=>" ",
            'required'=> false
        ])
        ->add('date_decision',DateType::class,[
            'label'=>" ",
            'widget'=>'single_text',
            'required'=> false
        ])
        ->add('avisPresident', AvisType::class,[
            'label'=>" "
        ])
        ->add('Enregistrer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DossierSuspension::class,
        ]);
    }
}
