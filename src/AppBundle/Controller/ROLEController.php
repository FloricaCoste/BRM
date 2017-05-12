<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ROLE;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Role controller.
 *
 * @Route("role")
 */
class ROLEController extends Controller
{
    /**
     * Lists all rOLE entities.
     *
     * @Route("/", name="role_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rOLEs = $em->getRepository('AppBundle:ROLE')->findAll();

        return $this->render('role/index.html.twig', array(
            'rOLEs' => $rOLEs,
        ));
    }

    /**
     * Creates a new rOLE entity.
     *
     * @Route("/new", name="role_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $rOLE = new Role();
        $form = $this->createForm('AppBundle\Form\ROLEType', $rOLE);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rOLE);
            $em->flush($rOLE);

            return $this->redirectToRoute('role_show', array('id' => $rOLE->getId()));
        }

        return $this->render('role/new.html.twig', array(
            'rOLE' => $rOLE,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rOLE entity.
     *
     * @Route("/{id}", name="role_show")
     * @Method("GET")
     */
    public function showAction(ROLE $rOLE)
    {
        $deleteForm = $this->createDeleteForm($rOLE);

        return $this->render('role/show.html.twig', array(
            'rOLE' => $rOLE,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rOLE entity.
     *
     * @Route("/{id}/edit", name="role_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ROLE $rOLE)
    {
        $deleteForm = $this->createDeleteForm($rOLE);
        $editForm = $this->createForm('AppBundle\Form\ROLEType', $rOLE);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('role_edit', array('id' => $rOLE->getId()));
        }

        return $this->render('role/edit.html.twig', array(
            'rOLE' => $rOLE,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rOLE entity.
     *
     * @Route("/{id}", name="role_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ROLE $rOLE)
    {
        $form = $this->createDeleteForm($rOLE);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rOLE);
            $em->flush();
        }

        return $this->redirectToRoute('role_index');
    }

    /**
     * Creates a form to delete a rOLE entity.
     *
     * @param ROLE $rOLE The rOLE entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ROLE $rOLE)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('role_delete', array('id' => $rOLE->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
