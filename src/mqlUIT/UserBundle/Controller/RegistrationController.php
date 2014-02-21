<?php

namespace mqlUIT\UserBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;


class RegistrationController extends BaseController
{
     public function registerAction()
    {
        $response = parent::registerAction();

        // do custom stuff

        return $response;
    }
    
      /**
     * Authenticate a user with Symfony Security
     *
     * @param \FOS\UserBundle\Model\UserInterface $user
     */
 
    /*protected function authenticateUser(UserInterface $user)
    {
        try {
            $this->container->get('fos_user.user_checker')->checkPostAuth($user);
        
           
        } catch (AccountStatusException $e) {
            // Don't authenticate locked, disabled or expired users
            return;
        }
 
        $providerKey = $this->container->getParameter('fos_user.firewall_name');
        $token = new UsernamePasswordToken($user, null, $providerKey, $user->getRoles());
 
        $this->container->get('security.context')->setToken($token);
    }*/
      public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
 
        if ($this->security->isGranted('ROLE_SUPER_ADMIN'))
        {
            $response = new RedirectResponse($this->router->generate('category_index'));            
        }
        elseif ($this->security->isGranted('ROLE_ADMIN'))
        {
            $response = new RedirectResponse($this->router->generate('filiere'));
        } 
        elseif ($this->security->isGranted('ROLE_USER'))
        {
            // redirect the user to where they were before the login process begun.
            $referer_url = $request->headers->get('candidat_new');
 
            $response = new RedirectResponse($referer_url);
        }
 
        return $response;
    }
}

?>