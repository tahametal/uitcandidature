<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use mqlUIT\CandidatureBundle\Entity\Experience;
use mqlUIT\CandidatureBundle\Form\ExperienceType;

/**
 * Experience controller.
 *
 */
class ExperienceController extends Controller
{
    /**
     * Lists all Experience entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mqlUITCandidatureBundle:Experience')->findAll();

        return $this->render('mqlUITCandidatureBundle:Experience:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Experience entity.
     *
     */
    public function createAction(Request $request)
    {
      $usr= $this->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()->getRepository('mqlUITCandidatureBundle:Candidat'); 
        $Candidat = $repository->findOneBy( array('userfos' =>$usr->getId()) );
      
        $entity  = new Experience();
        $form = $this->createForm(new ExperienceType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setCandidat($Candidat);
            $em->persist($entity);
            $em->flush();
             return $this->redirect($this->generateUrl('candidat_inscription2'));
           // $this->redirect($request->headers->get('referer'));

            return $this->redirect($this->generateUrl('experience_show', array('id' => $entity->getId())));
        
            }
        else{
            echo'invalid';
            die();
        }
    }
    /**
     * Displays a form to create a new Experience entity.
     *
     */
    public function newAction()
    {
        $entity = new Experience();
        $form   = $this->createForm(new ExperienceType(), $entity);

        return $this->render('mqlUITCandidatureBundle:Experience:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Experience entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Experience')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Experience entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Experience:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Experience entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Experience')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Experience entity.');
        }

        $editForm = $this->createForm(new ExperienceType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Experience:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Experience entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Experience')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Experience entity.');
        }

        
        $editForm = $this->createForm(new ExperienceType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
        return $this->redirect($this->generateUrl('candidat_inscription2'));
            
        }

        return $this->redirect($this->generateUrl('candidat_inscription2'));
    }

    /**
     * Deletes a Experience entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('mqlUITCandidatureBundle:Experience')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Experience entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('experience'));
    }

    /**
     * Creates a form to delete a Experience entity by id.
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
    public function supprimerAction($id) 
            { $em = $this->getDoctrine()->getManager(); 
              $entity = $em->getRepository('mqlUITCandidatureBundle:Experience')->find($id);
            if (!$entity) 
                { throw $this->createNotFoundException(' un too find Candidature entity.'); }
                $em->remove($entity); $em->flush();
                return $this->redirect($this->generateUrl('candidat_inscription2')); }
}
