<?php

namespace AppBundle\Controller;

use AppBundle\Entity\referent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Referent controller.
 *
 * @Route("referent")
 */
class referentController extends Controller
{
    /**
     * Lists all referent entities.
     *
     * @Route("/", name="referent_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $referents = $em->getRepository('AppBundle:referent')->findAll();

        return $this->render('referent/index.html.twig', array(
            'referents' => $referents,
        ));
    }

    /**
     * Creates a new referent entity.
     *
     * @Route("/new", name="referent_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $referent = new Referent();
        $form = $this->createForm('AppBundle\Form\referentType', $referent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($referent);
            $em->flush($referent);

            return $this->redirectToRoute('referent_show', array('id' => $referent->getId()));
        }

        return $this->render('referent/new.html.twig', array(
            'referent' => $referent,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a referent entity.
     *
     * @Route("/{id}", name="referent_show")
     * @Method("GET")
     */
    public function showAction(referent $referent)
    {
        $deleteForm = $this->createDeleteForm($referent);

        return $this->render('referent/show.html.twig', array(
            'referent' => $referent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing referent entity.
     *
     * @Route("/{id}/edit", name="referent_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, referent $referent)
    {
        $deleteForm = $this->createDeleteForm($referent);
        $editForm = $this->createForm('AppBundle\Form\referentType', $referent);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('referent_edit', array('id' => $referent->getId()));
        }

        return $this->render('referent/edit.html.twig', array(
            'referent' => $referent,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a referent entity.
     *
     * @Route("/{id}", name="referent_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, referent $referent)
    {
        $form = $this->createDeleteForm($referent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($referent);
            $em->flush();
        }

        return $this->redirectToRoute('referent_index');
    }

    /**
     * Creates a form to delete a referent entity.
     *
     * @param referent $referent The referent entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(referent $referent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('referent_delete', array('id' => $referent->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
