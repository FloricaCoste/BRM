<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/", name="admin_home")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction(Request $request)
    {
        $session = new Session();

        if ($session->has('user')){
            $templateName = '/admin/index';
            return $this->render($templateName . '.html.twig', []);
        }

        // if get here, not logged in, empty flash bag and create flash login first message then redirect
        $session->getFlashBag()->clear();
        $this->addFlash(
            'ERROR',
            'Please login before accessing admin page.'
        );
        return $this->redirectToRoute('login');
    }

    /**
     * @Route("/codes", name="admin_codes")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function codesAction(Request $request)
    {
        $template = 'admin/codes';
        return $this->render($template . '.html.twig', []);
    }

}