<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RedirectionController extends Controller
{
    public function redirectAction()
    {
        
        if ( $this->get('security.context')->isGranted('ROLE_USER')){ 
            $url = 'candidat_new';
            
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
