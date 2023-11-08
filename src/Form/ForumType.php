<?php

namespace App\Form;

use App\Entity\Comments;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class ForumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'attr' => [
                    'placeholder' => 'Titre'
                ]
            ])

            ->add('content', TextareaType::class, [
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Entrez votre messagge'
                ]
            ])

            ->add('image', FileType::class, [
                'label' => 'Image (JPEG, PNG)',
                'mapped' => false,
                'required' => false, 
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comments::class,
        ]);
    }
}
