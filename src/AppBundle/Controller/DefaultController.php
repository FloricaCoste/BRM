<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;


use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $argsArray =  [
            'name' => 'Florica Coste'
        ];

        $templateName = 'index';
        return $this->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * @Route("/clear_session", name="clear_session")
     */
    public function clearSessionAction(Request $request)
    {
        $session = new Session();
        $session->clear();

        return $this->redirectToRoute('homepage');    }
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }

}
