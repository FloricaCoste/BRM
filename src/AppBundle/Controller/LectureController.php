<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Class LectureController
 * @package AppBundle\Controller
 *
 * @Route("/lecture")
 */
class LectureController extends Controller
{
    /**
     * @Route("/", name="lecture_index")
     */
    public function indexAction(Request $request)
    {
        $session = new Session();

        if ($session->has('user')){
            $templateName = '/lecture/index';
            return $this->render($templateName . '.html.twig', []);
        }

        // if get here, not logged in, empty flash bag and create flash login first message then redirect
        $session->getFlashBag()->clear(); // avoids seeing message twice ...
        $this->addFlash(
            'ERROR',
            'Please login before accessing Lecture page.'
        );

        return $this->redirectToRoute('login');
    }
}