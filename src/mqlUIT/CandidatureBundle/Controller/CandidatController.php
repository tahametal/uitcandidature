<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use mqlUIT\CandidatureBundle\Entity\Candidat;
use mqlUIT\CandidatureBundle\Form\CandidatType;
use mqlUIT\CandidatureBundle\Form\ExperienceType;
use mqlUIT\CandidatureBundle\Entity\Experience;
use mqlUIT\UserBundle\Entity\Userfos;
/**
 * Candidat controller.
 *
 */
class CandidatController extends Controller
{
    /**
     * Lists all Candidat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mqlUITCandidatureBundle:Candidat')->findAll();

        return $this->render('mqlUITCandidatureBundle:Candidat:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Candidat entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Candidat();
         $form = $this->createForm(new CandidatType(), $entity);
         //$form = $this->get('form.factory')->create(new CandidatType());
         //$entity = $request->request->get('Candidat');
        $form->bind($request);
        //$form->bindRequest($request);
      // $entity = $form->getData();
     
            $em = $this->getDoctrine()->getManager();
            $usr= $this->get('security.context')->getToken()->getUser();
            $userid = $usr->getId();
           //$user = $em->getRepository('mqlUITCandidatureBundle:Candidat')->find($userid);
            //$fos = new Userfos();
            //$fos->setUsername($usr->getUsername());
           // echo $userid;
           // die();
            
            $entity->setUserfos($usr);
            ///////test
           // $form->setData($modelData);
            
            $em->persist($entity);
            
            $em->flush();
            

            return $this->redirect($this->generateUrl('candidat_show', array('id' => $entity->getId())));
        

      /* 
       }
         return $this->render('mqlUITCandidatureBundle:Candidat:prob.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));*/
    }

    /**
     * Displays a form to create a new Candidat entity.
     *
     */
    public function newAction()
    {
        $entity = new Candidat();
        $form   = $this->createForm(new CandidatType(), $entity);

        return $this->render('mqlUITCandidatureBundle:Candidat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Candidat entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Candidat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Candidat:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Candidat entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Candidat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidat entity.');
        }

        $editForm = $this->createForm(new CandidatType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:Candidat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Candidat entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:Candidat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CandidatType(), $entity);
        $editForm->bind($request);

       
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('candidat_edit', array('id' => $id)));
      /*  }

        return $this->render('mqlUITCandidatureBundle:Candidat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));*/
    }

    /**
     * Deletes a Candidat entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('mqlUITCandidatureBundle:Candidat')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Candidat entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('candidat'));
    }

    /**
     * Creates a form to delete a Candidat entity by id.
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
    public function inscription2Action()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()->getRepository('mqlUITCandidatureBundle:Candidat'); 
        $Candidat = $repository->findOneBy( array('userfos' =>$usr->getId()) );
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qbdip = $em->createQueryBuilder();
        $qbnote = $em->createQueryBuilder();
        $qb->select('e')
               ->from('mqlUITCandidatureBundle:Experience','e')
               ->where('e.candidat = :id')
                 ->setParameter('id', $Candidat)
               ;
               $query=$qb->getQuery();
               $experiences = $query->getResult();
        $qbdip->select('d')
               ->from('mqlUITCandidatureBundle:Diplome','d')
               ->where('d.candidat = :id')
                 ->setParameter('id', $Candidat)
               ;
               $querydip=$qbdip->getQuery();
               $diplomes = $querydip->getResult();
         $qbnote->select('d')
               ->from('mqlUITCandidatureBundle:DetailSemestre','d')
               ->where('d.candidat = :id')
                 ->setParameter('id', $Candidat)
               ;
               $querynote=$qbnote->getQuery();
               $notes = $querynote->getResult();
        $experience = new Experience();
        $note = new \mqlUIT\CandidatureBundle\Entity\DetailSemestre();
        $diplome = new \mqlUIT\CandidatureBundle\Entity\Diplome();
        $formexp   = $this->createForm(new ExperienceType(), $experience);
        $formdip   = $this->createForm(new \mqlUIT\CandidatureBundle\Form\DiplomeType(), $diplome);
        $formnote   = $this->createForm(new \mqlUIT\CandidatureBundle\Form\DetailSemestreType(), $note);
        
        return $this->render('mqlUITCandidatureBundle:Candidat:inscription2.html.twig', array(
           
            'formdip'   => $formdip->createView(),
            'formexp'   => $formexp->createView(),
            'formnote'   => $formnote->createView(),
            'experiences' => $experiences,
            'diplomes' => $diplomes,
            'notes' => $notes,
        ));
    }
}
