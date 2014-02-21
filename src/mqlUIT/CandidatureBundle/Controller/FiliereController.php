<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use mqlUIT\CandidatureBundle\Entity\Filiere;
use mqlUIT\CandidatureBundle\Form\FiliereType;

/**
 * Filiere controller.
 *
 */
class FiliereController extends Controller
{
    /**
     * Lists all Filiere entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mqlUITCandidatureBundle:Filiere')->findAll();

        return $this->render('mqlUITCandidatureBundle:Filiere:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Filiere entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Filiere();
        $form = $this->createForm(new FiliereType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('filiere_show', array('id' => $entity->getId())));
        }

        return $this->render('mqlUITCandidatureBundle:Filiere:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Filiere entity.
     *
     */
    public function newAction()
    {
        $entity = new Filiere();
        $form   = $this->createForm(new FiliereType(), $entity);

        return $this->render('mqlUITCandidatureBundle:Filiere:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Filiere entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Filiere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filiere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Filiere:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Filiere entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Filiere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filiere entity.');
        }

        $editForm = $this->createForm(new FiliereType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Filiere:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Filiere entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Filiere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filiere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FiliereType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('filiere_edit', array('id' => $id)));
        }

        return $this->render('mqlUITCandidatureBundle:Filiere:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Filiere entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('mqlUITCandidatureBundle:Filiere')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Filiere entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('filiere'));
    }

    /**
     * Creates a form to delete a Filiere entity by id.
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
}
