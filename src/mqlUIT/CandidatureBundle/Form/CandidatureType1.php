<?php

namespace mqlUIT\CandidatureBundle\Form;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatureType1 extends AbstractType
{
    protected $user;
    protected $type;

public function __construct ($utilisateur,$typ)
{
    $this->user = $utilisateur;
    $this->type = $typ;
}
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        
      $user = $this->user;
      if ($this->type === 1) {
$builder
->add('filiere', 'entity', array(
'class' => 'mqlUITCandidatureBundle:filiere',
'query_builder' => function(EntityRepository $er) use ($user) {
return $er->createQueryBuilder('f')             
->where('f.id NOT IN (select ff.id from mqlUITCandidatureBundle:candidature c join c.filiere ff where c.candidat = :id)')                
->andWhere('f.grade = 1')
->orderBy('f.intitule', 'DESC')
->setParameter('id',$user);
},
));  


      }else {
          
          
$builder
->add('filiere', 'entity', array(
'class' => 'mqlUITCandidatureBundle:filiere',
'query_builder' => function(EntityRepository $er) use ($user) {
return $er->createQueryBuilder('f')        
->where('f.id NOT IN (select ff.id from mqlUITCandidatureBundle:candidature c join c.filiere ff where c.candidat = :id)')                
->andWhere('f.grade = 2')
->orderBy('f.intitule', 'DESC')
->setParameter('id',$user);
},
));

      }
      

    
    
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
