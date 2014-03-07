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
            ->add('nom','text')
            ->add('prenom')
            ->add('datenaissance','birthday')
            ->add('adresse')
            ->add('cin')
            ->add('cne')
            ->add('email')
            ->add('telephone')
            ->add('nationalite')
            ->add('ville', 'choice', array(
                    'choices'   => array('Rabat' => 'Rabat', 'Casablanca' => 'Casablanca', 'Fes' => 'Fes', 'Meknes' => 'Meknes', 'Agadir' => 'Agadir', 'Marrakech' => 'Marrakech'),
                    'required'  => TRUE,
                )) 
                
            ->add('pays')
            ->add('sexe', 'choice', array(
                    'choices'   => array('Masculin' => 'Masculin', 'Féminin' => 'Féminin'),
                    'required'  => TRUE,
                )) 
            //->add('userfos')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'mqlUIT\CandidatureBundle\Entity\Candidat',
        ));
    }

    public function getName()
    {
        return 'mqluit_candidaturebundle_candidattype';
    }
}
