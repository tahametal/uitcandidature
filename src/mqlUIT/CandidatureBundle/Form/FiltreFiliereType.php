<?php

namespace mqlUIT\CandidatureBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FiltreFiliereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('coefficcient')
            ->add('filiere')
            ->add('filtre')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'mqlUIT\CandidatureBundle\Entity\FiltreFiliere'
        ));
    }

    public function getName()
    {
        return 'mqluit_candidaturebundle_filtrefilieretype';
    }
}
