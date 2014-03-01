<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use mqlUIT\CandidatureBundle\Entity\DetailSemestre;
use mqlUIT\CandidatureBundle\Form\DetailSemestreType;

/**
 * DetailSemestre controller.
 *
 */
class DetailSemestreController extends Controller
{
    /**
     * Lists all DetailSemestre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mqlUITCandidatureBundle:DetailSemestre')->findAll();

        return $this->render('mqlUITCandidatureBundle:DetailSemestre:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new DetailSemestre entity.
     *
     */
    public function createAction(Request $request)
    {
        $usr= $this->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()->getRepository('mqlUITCandidatureBundle:Candidat'); 
        $Candidat = $repository->findOneBy( array('userfos' =>$usr->getId()) );
        $entity  = new DetailSemestre();
        $form = $this->createForm(new DetailSemestreType($Candidat), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setCandidat($Candidat);
            $em->persist($entity);
            $em->flush();
            $this->Calculediplome($Candidat);

             return $this->redirect($this->generateUrl('candidat_inscription2'));
        }
        

        return $this->render('mqlUITCandidatureBundle:DetailSemestre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new DetailSemestre entity.
     *
     */
    public function newAction()
    {
        $entity = new DetailSemestre();
        $form   = $this->createForm(new DetailSemestreType(), $entity);

        return $this->render('mqlUITCandidatureBundle:DetailSemestre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DetailSemestre entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:DetailSemestre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DetailSemestre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:DetailSemestre:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing DetailSemestre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:DetailSemestre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DetailSemestre entity.');
        }

        $editForm = $this->createForm(new DetailSemestreType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('mqlUITCandidatureBundle:DetailSemestre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing DetailSemestre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mqlUITCandidatureBundle:DetailSemestre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DetailSemestre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DetailSemestreType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('detailsemestre_edit', array('id' => $id)));
        }

        return $this->render('mqlUITCandidatureBundle:DetailSemestre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a DetailSemestre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('mqlUITCandidatureBundle:DetailSemestre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DetailSemestre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('detailsemestre'));
    }

    /**
     * Creates a form to delete a DetailSemestre entity by id.
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
            { 
         
         $em = $this->getDoctrine()->getManager(); 
              $entity = $em->getRepository('mqlUITCandidatureBundle:DetailSemestre')->find($id);
            if (!$entity) 
                { throw $this->createNotFoundException('Unable find Candidature entity.'); }
                $em->remove($entity); $em->flush();
                return $this->redirect($this->generateUrl('candidat_inscription2')); }
              
                
                
    public function Calculediplome($candidat)
    {
       
        //$semestre  = new DetailSemestre();
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('e.note')
               ->from('mqlUITCandidatureBundle:DetailSemestre','e')
               ->leftJoin('e.semestre','s')
               ->where('e.candidat = :id')
               ->andWhere('s.id  IN (1,2,3,4)') 
                 ->setParameter('id', $candidat)
               ;
               $query=$qb->getQuery();
               $result=$query->getResult();
           if (count($result)==4)
           {
               $note1 = $result[0]['note'];
               $note2 = $result[1]['note'];
               $note3 = $result[2]['note'];
               $note4 = $result[3]['note'];
               $noteg = ($note1+$note3+$note2+$note4)/4;
               $mention=$this->Calculemention($noteg);
               $qbdip = $em->createQueryBuilder();
               $qbdip->select('d.id,d.intitule')
               ->from('mqlUITCandidatureBundle:Diplome','d')
               ->leftJoin('d.diplometype','t')
               ->where('d.candidat = :id')
               ->andWhere('t.grade=:grade') 
               ->setParameter('id', $candidat)
               ->setParameter('grade', '2')
               ;
               $querydip=$qbdip->getQuery();
               $resultdip=$querydip->getResult();
               $intitule=  $resultdip[0]['intitule'];
               $iddip=  $resultdip[0]['id'];
               
               $entitydip = $em->getRepository('mqlUITCandidatureBundle:Diplome')->find($iddip);
               $entitydip->setNote($noteg);
               $entitydip->setMention($mention);
               
                $em->persist($entitydip);
                $em->flush();
                
              
          
           }
           
           
      
      $qb2 = $em->createQueryBuilder();
      $qb2->select('e.note')
               ->from('mqlUITCandidatureBundle:DetailSemestre','e')
               ->leftJoin('e.semestre','s')
               ->where('e.candidat = :id')
               ->andWhere('s.id  IN (5,6)') 
                 ->setParameter('id', $candidat)
               ;
               $query2=$qb2->getQuery();
               $result2=$query2->getResult();
           if (count($result2)==2)
           {
              
               $note1 = $result[0]['note'];
               $note2 = $result[1]['note'];
            
               $noteg = ($note1+$note2)/2;
               $mention=$this->Calculemention($noteg);
               $qbdip = $em->createQueryBuilder();
               $qbdip->select('d.id,d.intitule')
               ->from('mqlUITCandidatureBundle:Diplome','d')
               ->leftJoin('d.diplometype','t')
               ->where('d.candidat = :id')
               ->andWhere('t.grade=:grade') 
               ->setParameter('id', $candidat)
               ->setParameter('grade', '3')
               ;
               $querydip=$qbdip->getQuery();
               $resultdip=$querydip->getResult();
               $intitule=  $resultdip[0]['intitule'];
               $iddip=  $resultdip[0]['id'];
               
               $entitydip = $em->getRepository('mqlUITCandidatureBundle:Diplome')->find($iddip);
               $entitydip->setNote($noteg);
               $entitydip->setMention($mention);
               
                $em->persist($entitydip);
                $em->flush();
                
               
                 
          
           }
            return $this->redirect($this->generateUrl('candidat_inscription2'));
              
        }
          public function Calculemention($note)
    {
       $mention='';
            
        if ($note>=10 &&$note<12)
           {
                $mention='Passable';
               
           }
            else if ($note>=12 &&$note<14)
           {
                $mention='Assez bien';
               
           }
            else if ($note>=14 &&$note<16)
           {
                $mention='Bien';
               
           }
            else if ($note>=16 &&$note<18)
           {
                $mention='Trés Bien';
               
           }
           else if ($note>=18 &&$note<20)
           {
                $mention='Excellent';
               
           }
           return $mention;
              
        }
}
