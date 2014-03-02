<?php

namespace mqlUIT\CandidatureBundle\Form;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DiplomeType extends AbstractType
{ 
    protected $user;

    public function __construct ($profile)
    {
        $this->user = $profile;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $this->user;
        $builder
            ->add('intitule')
            ->add('dateinscription', 'date', array(
                                                'widget' => 'single_text',
                                                'input' => 'datetime',
                                                'format' => 'yyyy-MM-dd',
                                                'attr' => array('class' => 'date'),
                                                ))
            ->add('dateobtention', 'date', array(
                                                'widget' => 'single_text',
                                                'input' => 'datetime',
                                                'format' => 'yyyy-MM-dd',
                                                'attr' => array('class' => 'date'),
                                                ))
            ->add('etablissement')
            ->add('ville')
            ->add('diplometype', 'entity', array(
        'class' => 'mqlUITCandidatureBundle:diplometype',
        'query_builder' => function(EntityRepository $er) use ($user) {
         return $er->createQueryBuilder('f')
               // ->Join('mqlUITCandidatureBundle:candidature', 'c', 'WITH', 'f.id = c.filiere')               
                ->where('f.grade NOT IN (select ff.grade from mqlUITCandidatureBundle:Diplome c join c.diplometype ff where c.candidat = :id)')                
                ->orderBy('f.id', 'ASC')
                ->setParameter('id',$user);
    },
))
       
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
