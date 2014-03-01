<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use mqlUIT\CandidatureBundle\Entity\Candidature;
use mqlUIT\CandidatureBundle\Form\CandidatureType;

/**
 * Candidature controller.
 *
 */
class CandidatureController extends Controller
{
    /**
     * Lists all Candidature entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mqlUITCandidatureBundle:Candidature')->findAll();

        return $this->render('mqlUITCandidatureBundle:Candidature:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    
    /**
     * Creates a new Candidature entity.
     *
     */
    
    public function createAction(Request $request)
    {
        $entity  = new Candidature();
        $form = $this->createForm(new CandidatureType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $usr= $this->get('security.context')->getToken()->getUser();
            $repository = $this->getDoctrine()->getRepository('mqlUITCandidatureBundle:Candidat');
            $Candidat =  $repository->findOneBy(
                            array('userfos' =>$usr->getId())
                        ); 
            
           $entity->setCandidat($Candidat);
           
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('candidature_ins3'));
        }

        return $this->render('mqlUITCandidatureBundle:Candidature:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Candidature entity.
     *
     */
    public function newAction()
    {
        $entity = new Candidature();
        $form   = $this->createForm(new CandidatureType(), $entity);

        return $this->render('mqlUITCandidatureBundle:Candidature:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Candidature entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Candidature')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidature entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Candidature:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Candidature entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Candidature')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidature entity.');
        }

        $editForm = $this->createForm(new CandidatureType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Candidature:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Candidature entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Candidature')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidature entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CandidatureType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('candidature_edit', array('id' => $id)));
        }

        return $this->render('mqlUITCandidatureBundle:Candidature:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Candidature entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('mqlUITCandidatureBundle:Candidature')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Candidature entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('candidature'));
    }

    /**
     * Creates a form to delete a Candidature entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
     public function inscription3Action()
    {
         
        $usr= $this->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()->getRepository('mqlUITCandidatureBundle:Candidat'); 
        $Candidat = $repository->findOneBy( array('userfos' =>$usr->getId()) );
        
   
      
$repository2 = $this->getDoctrine()
->getManager()
->getRepository('mqlUITCandidatureBundle:DetailSemestre');

$listesemestres = $repository2->findByCandidat($Candidat);
$nb=count($listesemestres);


 $em = $this->getDoctrine()->getEntityManager();
            $qb = $em->createQueryBuilder();

            $qb->select('c')
            ->from('mqlUITCandidatureBundle:Candidature','c')
            ->where('c.candidat = :id')
            ->setParameter('id', $Candidat) ;

            $query=$qb->getQuery();
            $candidatures = $query->getResult();
            $candidature = new Candidature();
            $t1=1;
            $t2=2;
if ($nb < 4) {
    return $this->redirect($this->generateUrl('candidature_ins2'));
}
else if ($nb >= 4 && $nb < 6)
{
         $formcand   = $this->createForm(new \mqlUIT\CandidatureBundle\Form\CandidatureType1($Candidat,$t1), $candidature);
    
       return $this->render('mqlUITCandidatureBundle:Candidature:ins3.html.twig', array(           
            'formcand'   => $formcand->createView(),
            'candidatures' => $candidatures,           
        )); 
}else {
          $formcand   = $this->createForm(new \mqlUIT\CandidatureBundle\Form\CandidatureType1($Candidat,$t2), $candidature);
    
       return $this->render('mqlUITCandidatureBundle:Candidature:ins3.html.twig', array(           
            'formcand'   => $formcand->createView(),
            'candidatures' => $candidatures,           
        ));
    
}
           
      
      

    }
    
    
        public function deletefAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Candidature')->find($id);
         if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidature entity.');
        }
        $em->remove($entity);
        $em->flush();
        
      

         return $this->redirect($this->generateUrl('candidature_ins3'));
       

        
    }
    
}
