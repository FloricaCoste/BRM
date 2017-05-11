<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\bibliography;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Bibliography controller.
 *
 * @Route("/basket")
 */
class BibliographyBasketController extends Controller
{
    /**
     * @Route("/", name="bibliography_basket_index")
     */
    public function indexAction()
    {
        $templateName = 'basket/index';
        return $this->render($templateName . '.html.twig');
    }


    /**
     * @Route("/add/{id}", name="bibliography_basket_add")
     */
    public function addToBibliographyCart(Bibliography $bibliography)
    {
        // default - new empty array
        $bibliographies = [];

        // if no 'bibliographies' array in the session, add an empty array
        $session = new Session();
        if($session->has('basket')){
            $bibliographies = $session->get('basket');
        }

        // get ID of elective
        $id = $bibliography->getId();

        // only try to add to array if not already in the array
        if(!array_key_exists($id, $bibliographies)){
            // append $elective to our list
            $bibliographies[$id] = $bibliography;

            // store updated array back into the session
            $session->set('basket', $bibliographies);
        }

        return $this->redirectToRoute('bibliography_basket_index');
    }
    /**
     * @Route("/clear", name="bibliography_basket_clear")
     */
    public function clearAction()
    {
        $session = new Session();
//        $session->clear();
        $session->remove('basket');

        return $this->redirectToRoute('bibliography_basket_index');
    }


    /**
     * @Route("/delete/{id}", name="bibliography_basket_delete")
     */
    public function deleteAction($id)
    {
        // default - new empty array
        $bibliography = [];

        // if no 'Bibliography' array in the session, add an empty array
        $session = new Session();
        if($session->has('basket')){
            $bibliography = $session->get('basket');
        }

        // only try to remove if it's in the array
        if(array_key_exists($id, $bibliography)){
            // remove entry with $id
            unset($bibliography[$id]);

            if(sizeof($bibliography) < 1){
                return $this->redirectToRoute('bibliography_basket_clear');
            }

            // store updated array back into the session
            $session->set('basket', $bibliography);
        }

        return $this->redirectToRoute('bibliography_basket_index');
    }

    /**
     * @Route("/pdf", name="bibliography_basket_pdf")
     */
    public function pdfAction()
    {
        $html = $this->renderView('/Demo/pdf.html.twig');

        $filename = sprintf('test-%s.pdf', date('Y-m-d'));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );
    }
}