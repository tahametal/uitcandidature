<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use mqlUIT\CandidatureBundle\Entity\FiltreFiliere;
use mqlUIT\CandidatureBundle\Form\FiltreFiliereType;

/**
 * FiltreFiliere controller.
 *
 */
class FiltreFiliereController extends Controller
{
    /**
     * Lists all FiltreFiliere entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mqlUITCandidatureBundle:FiltreFiliere')->findAll();

        return $this->render('mqlUITCandidatureBundle:FiltreFiliere:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new FiltreFiliere entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new FiltreFiliere();
        $form = $this->createForm(new FiltreFiliereType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('filtrefiliere_show', array('id' => $entity->getId())));
        }

        return $this->render('mqlUITCandidatureBundle:FiltreFiliere:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new FiltreFiliere entity.
     *
     */
    public function newAction()
    {
        $entity = new FiltreFiliere();
        $form   = $this->createForm(new FiltreFiliereType(), $entity);

        return $this->render('mqlUITCandidatureBundle:FiltreFiliere:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FiltreFiliere entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:FiltreFiliere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FiltreFiliere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:FiltreFiliere:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing FiltreFiliere entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:FiltreFiliere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FiltreFiliere entity.');
        }

        $editForm = $this->createForm(new FiltreFiliereType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:FiltreFiliere:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing FiltreFiliere entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:FiltreFiliere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FiltreFiliere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FiltreFiliereType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('filtrefiliere_edit', array('id' => $id)));
        }

        return $this->render('mqlUITCandidatureBundle:FiltreFiliere:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a FiltreFiliere entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('mqlUITCandidatureBundle:FiltreFiliere')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FiltreFiliere entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('filtrefiliere'));
    }

    /**
     * Creates a form to delete a FiltreFiliere entity by id.
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
