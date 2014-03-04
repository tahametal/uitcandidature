<?php

namespace mqlUIT\CandidatureBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResponsableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
           ->add('userfos', 'entity', array(
        'class' => 'mqlUIT\UserBundle\Entity\UserFOS',
        'query_builder' => function(\Doctrine\ORM\EntityRepository  $er){
         return $er->createQueryBuilder('f')   
                 ->where('f.roles like \'a:1:{i:0;s:10:"ROLE_ADMIN";}\'  ')                
                ->orderBy('f.id', 'DESC')
                ->setMaxResults(1)
           ;
    },
))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'mqlUIT\CandidatureBundle\Entity\Responsable'
        ));
    }

    public function getName()
    {
        return 'mqluit_candidaturebundle_responsabletype';
    }
}
