<?php

namespace App\Form;

use App\Entity\Reply;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class ReplyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('response_content', TextareaType::class, [
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Entrez votre réponse'
                ]
            ])

            ->add('image', FileType::class, [
                'label' => 'Image (JPEG, PNG)',
                'mapped' => false,
                'required' => false, 
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reply::class,
        ]);
    }
}
