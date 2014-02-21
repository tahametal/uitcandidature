<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use mqlUIT\CandidatureBundle\Entity\Filtre;
use mqlUIT\CandidatureBundle\Form\FiltreType;

/**
 * Filtre controller.
 *
 */
class FiltreController extends Controller
{
    /**
     * Lists all Filtre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mqlUITCandidatureBundle:Filtre')->findAll();

        return $this->render('mqlUITCandidatureBundle:Filtre:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Filtre entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Filtre();
        $form = $this->createForm(new FiltreType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('filtre_show', array('id' => $entity->getId())));
        }

        return $this->render('mqlUITCandidatureBundle:Filtre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Filtre entity.
     *
     */
    public function newAction()
    {
        $entity = new Filtre();
        $form   = $this->createForm(new FiltreType(), $entity);

        return $this->render('mqlUITCandidatureBundle:Filtre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Filtre entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Filtre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filtre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Filtre:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Filtre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Filtre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filtre entity.');
        }

        $editForm = $this->createForm(new FiltreType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Filtre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Filtre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Filtre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filtre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FiltreType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('filtre_edit', array('id' => $id)));
        }

        return $this->render('mqlUITCandidatureBundle:Filtre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Filtre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('mqlUITCandidatureBundle:Filtre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Filtre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('filtre'));
    }

    /**
     * Creates a form to delete a Filtre entity by id.
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
