<?php

namespace AppBundle\Controller;

use AppBundle\Entity\userProfile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Userprofile controller.
 *
 * @Route("userprofile")
 */
class userProfileController extends Controller
{
    /**
     * Lists all userProfile entities.
     *
     * @Route("/", name="userprofile_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userProfiles = $em->getRepository('AppBundle:userProfile')->findAll();

        return $this->render('userprofile/index.html.twig', array(
            'userProfiles' => $userProfiles,
        ));
    }

    /**
     * Creates a new userProfile entity.
     *
     * @Route("/new", name="userprofile_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $userProfile = new Userprofile();
        $form = $this->createForm('AppBundle\Form\userProfileType', $userProfile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userProfile);
            $em->flush($userProfile);

            return $this->redirectToRoute('userprofile_show', array('id' => $userProfile->getId()));
        }

        return $this->render('userprofile/new.html.twig', array(
            'userProfile' => $userProfile,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a userProfile entity.
     *
     * @Route("/{id}", name="userprofile_show")
     * @Method("GET")
     */
    public function showAction(userProfile $userProfile)
    {
        $deleteForm = $this->createDeleteForm($userProfile);

        return $this->render('userprofile/show.html.twig', array(
            'userProfile' => $userProfile,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing userProfile entity.
     *
     * @Route("/{id}/edit", name="userprofile_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, userProfile $userProfile)
    {
        $deleteForm = $this->createDeleteForm($userProfile);
        $editForm = $this->createForm('AppBundle\Form\userProfileType', $userProfile);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('userprofile_edit', array('id' => $userProfile->getId()));
        }

        return $this->render('userprofile/edit.html.twig', array(
            'userProfile' => $userProfile,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a userProfile entity.
     *
     * @Route("/{id}", name="userprofile_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, userProfile $userProfile)
    {
        $form = $this->createDeleteForm($userProfile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userProfile);
            $em->flush();
        }

        return $this->redirectToRoute('userprofile_index');
    }

    /**
     * Creates a form to delete a userProfile entity.
     *
     * @param userProfile $userProfile The userProfile entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(userProfile $userProfile)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('userprofile_delete', array('id' => $userProfile->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
