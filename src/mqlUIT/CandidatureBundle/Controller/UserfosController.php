<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use mqlUIT\CandidatureBundle\Entity\Userfos;
use mqlUIT\CandidatureBundle\Form\UserfosType;

/**
 * Userfos controller.
 *
 */
class UserfosController extends Controller
{
    /**
     * Lists all Userfos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mqlUITCandidatureBundle:Userfos')->findAll();

        return $this->render('mqlUITCandidatureBundle:Userfos:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Userfos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Userfos();
        $form = $this->createForm(new UserfosType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('userfos_show', array('id' => $entity->getId())));
        }

        return $this->render('mqlUITCandidatureBundle:Userfos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Userfos entity.
     *
     */
    public function newAction()
    {
        $entity = new Userfos();
        $form   = $this->createForm(new UserfosType(), $entity);

        return $this->render('mqlUITCandidatureBundle:Userfos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Userfos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Userfos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Userfos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Userfos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Userfos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Userfos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Userfos entity.');
        }

        $editForm = $this->createForm(new UserfosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Userfos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Userfos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Userfos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Userfos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UserfosType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('userfos_edit', array('id' => $id)));
        }

        return $this->render('mqlUITCandidatureBundle:Userfos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Userfos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('mqlUITCandidatureBundle:Userfos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Userfos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('userfos'));
    }

    /**
     * Creates a form to delete a Userfos entity by id.
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
