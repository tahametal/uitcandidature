<?php

namespace mqlUIT\CandidatureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RedirectionController extends Controller
{
    public function redirectAction()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
        if($usr->getRoles()=="ROLE_USER")
        {
            return $this->redirect($this->generateUrl('candidat_new'));
            
        }
    }

}
