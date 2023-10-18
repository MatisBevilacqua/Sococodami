<?php

namespace App\Form;

use App\Entity\Stamp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StampFilterType extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reference_sococodami', ChoiceType::class, [
                'choices' => $this->getReferenceSococodamiChoices(),
                'label' => 'Référence Sococodami',
                'required' => true,
            ])
            ->add('reference_sococodami_bis', ChoiceType::class, [
                'choices' => $this->getReferenceSococodamiBisChoices(),
                'label' => 'Référence Sococodami Bis',
                'required' => true,
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Filtrer',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stamp::class,
        ]);
    }

    private function getReferenceSococodamiChoices()
    {
        $repository = $this->entityManager->getRepository(\App\Entity\Stamp::class);
        $references = $repository->createQueryBuilder('s')
            ->select('s.reference_sococodami')
            ->distinct()
            ->getQuery()
            ->getResult();

        $choices = [];
        foreach ($references as $reference) {
            $choices[$reference['reference_sococodami']] = $reference['reference_sococodami'];
        }

        return $choices;
    }

    private function getReferenceSococodamiBisChoices()
    {
        $repository = $this->entityManager->getRepository(\App\Entity\Stamp::class);
        $references = $repository->createQueryBuilder('s')
            ->select('s.reference_sococodami_bis')
            ->distinct()
            ->getQuery()
            ->getResult();

        $choices = [];
        foreach ($references as $reference) {
            $choices[$reference['reference_sococodami_bis']] = $reference['reference_sococodami_bis'];
        }

        return $choices;
    }
}
