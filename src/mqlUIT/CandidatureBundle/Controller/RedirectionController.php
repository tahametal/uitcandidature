<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RedirectionController extends Controller
{
    public function redirectAction()
    {
        
        if ( $this->get('security.context')->isGranted('ROLE_USER')){ 
            $url = 'candidat_new';
           
            $usr= $this->get('security.context')->getToken()->getUser();
            $userid = $usr->getId();

           $repository = $this->getDoctrine()->getRepository('mqlUITCandidatureBundle:Candidat');
           $Candidat =  $repository->findOneBy(
                            array('userfos' =>$usr->getId())
                        );   
           if($Candidat == NULL)
           {
              $url = 'candidat_new'; 
           }
            else 
            {
              return $this->redirect($this->generateUrl('candidat_show', array('id' => $Candidat->getId())));  
            }
        }
         if ( $this->get('security.context')->isGranted('ROLE_ADMIN')){ 
            $url = 'filiere_new';
            
        }
        if ( $this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')){ 
            $url = 'responsable_new';
            
        }
        
      
        
        return $this->redirect($this->generateUrl($url));
        
    }

}
