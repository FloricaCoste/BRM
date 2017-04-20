<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class SecurityController extends Controller
{
    /**
     * login form
     *
     * @Route("/login", name="login")
     * @Method({"GET", "POST"})
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils'); // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError(); // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
// Twig stuff
        $templateName = 'security/login';
        $argsArray = [
            'last_username' => $lastUsername,
            'error' => $error,];
        return $this->render($templateName . '.html.twig', $argsArray);
    }

    private function createrLoginForm(User $user)
    {
        return $this->createForm('AppBundle\Form\UserType', $user);
    }


    /**
     * Creates a new user entity.
     *
     * @Route("/logout", name="logout")
     */

    public function logoutAction()
    {
        $session = new Session();

        if($session->has('user')){
            $session->remove('user');
        }

        // redirect to  home page
        return $this->redirectToRoute('homepage');
    }

    /**
     * @param User $user
     *
     * @return bool
     *
     * return whether or not contents of $user is a valid username/password combination
     */
    public function canAuthenticate(User $user)
    {
        $username = $user->getUsername();
        $password = $user->getPassword();

        return ('admin' == $username) && ('admin' == $password);
    }
}