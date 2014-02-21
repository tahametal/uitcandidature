<?php

namespace mqlUIT\CandidatureBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('datenaissance')
            ->add('adresse')
            ->add('cin')
            ->add('cne')
            ->add('email')
            ->add('telephone')
            ->add('nationalite')
            ->add('ville')
            ->add('pays')
            ->add('sexe')
            //->add('userfos')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'mqlUIT\CandidatureBundle\Entity\Candidat'
        ));
    }

    public function getName()
    {
        return 'mqluit_candidaturebundle_candidattype';
    }
}
