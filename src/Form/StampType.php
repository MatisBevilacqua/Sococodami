<?php

namespace App\Form;

use App\Entity\Stamp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class StampType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reference_sococodami')
            ->add('reference_sococodami_bis')
            ->add('txt_faciale')
            ->add('num_tirage')
            ->add('numero')
            ->add('numero_long_yvert')
            ->add('date_debut_tirage')
            ->add('date_fin_tirage')
            ->add('presse')
            ->add('date_parution')
            ->add('existe_autoadhesifs')
            ->add('memo_cd')
            ->add('tirage')
            ->add('qt_tp_presentation')
            ->add('titre')
            ->add('journe_tirage')
            ->add('num_superieur')
            ->add('num_inferieur')
            ->add('remarque')
            ->add('commentaire_tirage')
            ->add('image', FileType::class, [
                'label' => 'Image (JPEG, PNG)',
                'mapped' => false,
                'required' => false, 
            ])

            ->add('xlsFile', FileType::class, [
                'label' => 'Fichier XLS',
                'mapped' => false,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stamp::class,
        ]);
    }
}
