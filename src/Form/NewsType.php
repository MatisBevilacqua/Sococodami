<?php

namespace App\Form;
use App\Entity\News;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('link')
            ->add('image', FileType::class, [
                'label' => 'Image',
                'required' => false, // Set to true if the image is required
            ])
            ->add('date')
            ->add('visibility', ChoiceType::class, [
                'choices' => [
                    'Visible pour tous' => true,
                    'Visible pour les utilisateurs connectés uniquement' => false,
                ],
                'expanded' => true,
                'multiple' => false,
                'label' => 'Visibilité de l\'actualité',
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => News::class,
        ]);
    }
}
