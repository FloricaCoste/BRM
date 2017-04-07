<?php

namespace AppBundle\Controller;

use AppBundle\Entity\bibliography;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Bibliography controller.
 *
 * @Route("bibliography")
 */
class bibliographyController extends Controller
{
    /**
     * Lists all bibliography entities.
     *
     * @Route("/", name="bibliography_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bibliographies = $em->getRepository('AppBundle:bibliography')->findAll();

        return $this->render('bibliography/index.html.twig', array(
            'bibliographies' => $bibliographies,
        ));
    }

    /**
     * Creates a new bibliography entity.
     *
     * @Route("/new", name="bibliography_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $bibliography = new Bibliography();
        $form = $this->createForm('AppBundle\Form\bibliographyType', $bibliography);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bibliography);
            $em->flush($bibliography);

            return $this->redirectToRoute('bibliography_show', array('id' => $bibliography->getId()));
        }

        return $this->render('bibliography/new.html.twig', array(
            'bibliography' => $bibliography,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a bibliography entity.
     *
     * @Route("/{id}", name="bibliography_show")
     * @Method("GET")
     */
    public function showAction(bibliography $bibliography)
    {
        $deleteForm = $this->createDeleteForm($bibliography);

        return $this->render('bibliography/show.html.twig', array(
            'bibliography' => $bibliography,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing bibliography entity.
     *
     * @Route("/{id}/edit", name="bibliography_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, bibliography $bibliography)
    {
        $deleteForm = $this->createDeleteForm($bibliography);
        $editForm = $this->createForm('AppBundle\Form\bibliographyType', $bibliography);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bibliography_edit', array('id' => $bibliography->getId()));
        }

        return $this->render('bibliography/edit.html.twig', array(
            'bibliography' => $bibliography,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a bibliography entity.
     *
     * @Route("/{id}", name="bibliography_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, bibliography $bibliography)
    {
        $form = $this->createDeleteForm($bibliography);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bibliography);
            $em->flush();
        }

        return $this->redirectToRoute('bibliography_index');
    }

    /**
     * Creates a form to delete a bibliography entity.
     *
     * @param bibliography $bibliography The bibliography entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(bibliography $bibliography)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bibliography_delete', array('id' => $bibliography->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
