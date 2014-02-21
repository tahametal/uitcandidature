<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use mqlUIT\CandidatureBundle\Entity\Semestre;
use mqlUIT\CandidatureBundle\Form\SemestreType;

/**
 * Semestre controller.
 *
 */
class SemestreController extends Controller
{
    /**
     * Lists all Semestre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mqlUITCandidatureBundle:Semestre')->findAll();

        return $this->render('mqlUITCandidatureBundle:Semestre:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Semestre entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Semestre();
        $form = $this->createForm(new SemestreType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('semestre_show', array('id' => $entity->getId())));
        }

        return $this->render('mqlUITCandidatureBundle:Semestre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Semestre entity.
     *
     */
    public function newAction()
    {
        $entity = new Semestre();
        $form   = $this->createForm(new SemestreType(), $entity);

        return $this->render('mqlUITCandidatureBundle:Semestre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Semestre entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Semestre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Semestre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Semestre:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Semestre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Semestre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Semestre entity.');
        }

        $editForm = $this->createForm(new SemestreType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Semestre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Semestre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Semestre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Semestre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SemestreType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('semestre_edit', array('id' => $id)));
        }

        return $this->render('mqlUITCandidatureBundle:Semestre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Semestre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('mqlUITCandidatureBundle:Semestre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Semestre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('semestre'));
    }

    /**
     * Creates a form to delete a Semestre entity by id.
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
