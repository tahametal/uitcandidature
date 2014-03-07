<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use mqlUIT\CandidatureBundle\Entity\Responsable;
use mqlUIT\CandidatureBundle\Form\ResponsableType;

/**
 * Responsable controller.
 *
 */
class ResponsableController extends Controller
{
    /**
     * Lists all Responsable entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mqlUITCandidatureBundle:Responsable')->findAll();
        
        $filiere = $em->getRepository('mqlUITCandidatureBundle:Filiere')->findAll();
        
      
 /*       $qb = $em->createQueryBuilder();
     
$res = $qb->select('res.id')
             ->from('mqlUITCandidatureBundle:Responsable', 'res')
             ->getQuery()
             ->getResult();     

$fil = $qb->select('fil.responsable')
             ->from('mqlUITCandidatureBundle:Filiere', 'fil')
             ->where($qb->expr()->In('fil.responsable', $res))
             ->getQuery()
             ->getResult();
        
    */    
        

        return $this->render('mqlUITCandidatureBundle:Responsable:index.html.twig', array(
            'entities' => $entities,
            'filiere' => $filiere,
        ));
    }

    /**
     * Creates a new Responsable entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Responsable();
        $form = $this->createForm(new ResponsableType(), $entity);
        $form->bind($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
          /*  $usrid = $this->container->get('request')->getSession()->get('userid');
            $usr = $em->getRepository('mqlUITCandidatureBundle:UserFOS')->find($usrid);
            $test = new \mqlUIT\UserBundle\Entity\UserFOS();
            $test = $usr;
            $entity->setUserfos($test);
           */
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('responsable_show', array('id' => $entity->getId())));
        }

        return $this->render('mqlUITCandidatureBundle:Responsable:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Responsable entity.
     *
     */
    public function newAction()
    {
        $entity = new Responsable();
        $form   = $this->createForm(new ResponsableType(), $entity);

        return $this->render('mqlUITCandidatureBundle:Responsable:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Responsable entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Responsable')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Responsable entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
$editForm = $this->createForm(new ResponsableType(), $entity);
        return $this->render('mqlUITCandidatureBundle:Responsable:show.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Responsable entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Responsable')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Responsable entity.');
        }

        $editForm = $this->createForm(new ResponsableType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Responsable:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Responsable entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Responsable')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Responsable entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ResponsableType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('responsable_edit', array('id' => $id)));
        }

        return $this->render('mqlUITCandidatureBundle:Responsable:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Responsable entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('mqlUITCandidatureBundle:Responsable')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Responsable entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('responsable'));
    }

    /**
     * Creates a form to delete a Responsable entity by id.
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
     public function listeCandidatAction()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()->getRepository('mqlUITCandidatureBundle:Responsable'); 
        $responsable = $repository->findOneBy( array('userfos' =>$usr->getId()) );
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('c.nom,c.prenom,c.cin,c.cne','cd')
               ->from('mqlUITCandidatureBundle:Candidature','cd')
                ->leftJoin('cd.filiere','f')
                ->leftJoin('cd.candidat','c')
                
               ->where('f.responsable = :id')
                 ->setParameter('id', $responsable)
               ;
               $query=$qb->getQuery();
               $candidats = $query->getResult();
             
      
        
        return $this->render('mqlUITCandidatureBundle:Responsable:indexCandidat.html.twig', array(
           
           
            'candidats' => $candidats
        ));
    }

}
