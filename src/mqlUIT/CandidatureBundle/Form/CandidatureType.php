<?php

namespace mqlUIT\CandidatureBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatureType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        $builder
           // ->add('isvalid')
            // ->add('candidat')
            ->add('filiere');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'mqlUIT\CandidatureBundle\Entity\Candidature'
        ));
    }

    public function getName()
    {
        return 'mqluit_candidaturebundle_candidaturetype';
    }
}
