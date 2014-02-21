<?php

namespace mqlUIT\CandidatureBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DiplomeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule')
            ->add('dateinscription')
            ->add('dateobtention')
            ->add('note')
            ->add('mention')
            ->add('etablissement')
            ->add('ville')
            ->add('candidat')
            ->add('diplometype')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'mqlUIT\CandidatureBundle\Entity\Diplome'
        ));
    }

    public function getName()
    {
        return 'mqluit_candidaturebundle_diplometype';
    }
}
