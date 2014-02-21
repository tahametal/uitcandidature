<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use mqlUIT\CandidatureBundle\Entity\Experiencetype;
use mqlUIT\CandidatureBundle\Form\ExperiencetypeType;

/**
 * Experiencetype controller.
 *
 */
class ExperiencetypeController extends Controller
{
    /**
     * Lists all Experiencetype entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mqlUITCandidatureBundle:Experiencetype')->findAll();

        return $this->render('mqlUITCandidatureBundle:Experiencetype:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Experiencetype entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Experiencetype();
        $form = $this->createForm(new ExperiencetypeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('experiencetype_show', array('id' => $entity->getId())));
        }

        return $this->render('mqlUITCandidatureBundle:Experiencetype:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Experiencetype entity.
     *
     */
    public function newAction()
    {
        $entity = new Experiencetype();
        $form   = $this->createForm(new ExperiencetypeType(), $entity);

        return $this->render('mqlUITCandidatureBundle:Experiencetype:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Experiencetype entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Experiencetype')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Experiencetype entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Experiencetype:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Experiencetype entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Experiencetype')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Experiencetype entity.');
        }

        $editForm = $this->createForm(new ExperiencetypeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Experiencetype:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Experiencetype entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Experiencetype')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Experiencetype entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ExperiencetypeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('experiencetype_edit', array('id' => $id)));
        }

        return $this->render('mqlUITCandidatureBundle:Experiencetype:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Experiencetype entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('mqlUITCandidatureBundle:Experiencetype')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Experiencetype entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('experiencetype'));
    }

    /**
     * Creates a form to delete a Experiencetype entity by id.
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
