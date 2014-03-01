<?php

namespace mqlUIT\CandidatureBundle\Form;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DetailSemestreType extends AbstractType
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
            ->add('note')
            ->add('hasrattrapage')
                       ->add('semestre', 'entity', array(
        'class' => 'mqlUITCandidatureBundle:Semestre',
        'query_builder' => function(EntityRepository $er) use ($user) {
         return $er->createQueryBuilder('f')
               // ->Join('mqlUITCandidatureBundle:candidature', 'c', 'WITH', 'f.id = c.filiere')               
                ->where('f.id NOT IN (select ff.id from mqlUITCandidatureBundle:DetailSemestre c join c.semestre ff where c.candidat = :id)')                
                ->orderBy('f.id', 'DESC')
                ->setParameter('id',$user);
    },
))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'mqlUIT\CandidatureBundle\Entity\DetailSemestre'
        ));
    }

    public function getName()
    {
        return 'mqluit_candidaturebundle_detailsemestretype';
    }
}
