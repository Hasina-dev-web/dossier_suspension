<?php

namespace App\Form;

use App\Entity\DossierSuspension;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;





class DossierSuspensionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date_depot',DateType::class,[
                'widget'=>'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => [
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day'
                ]
            ])
            ->add('sous_dossier',IntegerType::class,[
                'label'=>" ",
                'attr'=>[
                    'id'=>"sous_dossier"]
            ])
            ->add('provision' ,TextType::class,[
                'label'=>" ",
                'required'=> false,
                'attr'=>[
                    'id'=>"provision"]
            ])
            ->add('decision_attaque' ,TextareaType::class,[
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
            ->add('email_demandeur',EmailType::class,[
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
            ->add('signification' ,DateType::class,[
                'widget'=>'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => [
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day'
                ]
            ])
            ->add('depot_signification' ,DateType::class,[
                'widget'=>'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => [
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day'
                ]
            ])
            ->add('depot_memoire',DateType::class,[
                'widget'=>'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => [
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day'
                ]
            ])
            ->add('notif_memoire' ,DateType::class,[
                'widget'=>'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => [
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day'
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
                'widget'=>'single_text',
                'format' => 'yyyy-MM-dd',
                'placeholder' => [
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DossierSuspension::class,
        ]);
    }
}
