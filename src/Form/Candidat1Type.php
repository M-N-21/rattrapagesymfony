<?php

namespace App\Form;

use App\Entity\Candidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class Candidat1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('note', NumberType::class, [
                'constraints' => [
                    new Range([
                        'min' => 1,
                        'max' => 100,
                        'minMessage' => 'La note doit être au moins 1%.',
                        'maxMessage' => 'La note ne peut pas dépasser 100%.',
                    ]),
                ],
            ])
            ->add('resultat')
            ->add('npromo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidat::class,
        ]);
    }
}