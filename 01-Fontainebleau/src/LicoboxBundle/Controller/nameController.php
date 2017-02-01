<?php

namespace LicoboxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LicoboxBundle\Entity\name;
use LicoboxBundle\Form\nameType;

/**
 * name controller.
 *
 */
class nameController extends Controller
{
    /**
     * Lists all name entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $names = $em->getRepository('LicoboxBundle:name')->findAll();

        return $this->render('name/index.html.twig', array(
            'names' => $names,
        ));
    }

    /**
     * Creates a new name entity.
     *
     */
    public function newAction(Request $request)
    {
        $name = new name();
        $form = $this->createForm('LicoboxBundle\Form\nameType', $name);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($name);
            $em->flush();

            return $this->redirectToRoute('name_show', array('id' => $name->getId()));
        }

        return $this->render('name/new.html.twig', array(
            'name' => $name,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a name entity.
     *
     */
    public function showAction(name $name)
    {
        $deleteForm = $this->createDeleteForm($name);

        return $this->render('name/show.html.twig', array(
            'name' => $name,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing name entity.
     *
     */
    public function editAction(Request $request, name $name)
    {
        $deleteForm = $this->createDeleteForm($name);
        $editForm = $this->createForm('LicoboxBundle\Form\nameType', $name);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($name);
            $em->flush();

            return $this->redirectToRoute('name_edit', array('id' => $name->getId()));
        }

        return $this->render('name/edit.html.twig', array(
            'name' => $name,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a name entity.
     *
     */
    public function deleteAction(Request $request, name $name)
    {
        $form = $this->createDeleteForm($name);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($name);
            $em->flush();
        }

        return $this->redirectToRoute('name_index');
    }

    /**
     * Creates a form to delete a name entity.
     *
     * @param name $name The name entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(name $name)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('name_delete', array('id' => $name->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
