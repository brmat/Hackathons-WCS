<?php

namespace LicoboxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LicoboxBundle\Entity\caracter;
use LicoboxBundle\Form\caracterType;

/**
 * caracter controller.
 *
 */
class caracterController extends Controller
{
    /**
     * Lists all caracter entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $caracters = $em->getRepository('LicoboxBundle:caracter')->findAll();

        return $this->render('caracter/index.html.twig', array(
            'caracters' => $caracters,
        ));
    }

    /**
     * Creates a new caracter entity.
     *
     */
    public function newAction(Request $request)
    {
        $caracter = new caracter();
        $form = $this->createForm('LicoboxBundle\Form\caracterType', $caracter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($caracter);
            $em->flush();

            return $this->redirectToRoute('caracter_show', array('id' => $caracter->getId()));
        }

        return $this->render('caracter/new.html.twig', array(
            'caracter' => $caracter,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a caracter entity.
     *
     */
    public function showAction(caracter $caracter)
    {
        $deleteForm = $this->createDeleteForm($caracter);

        return $this->render('caracter/show.html.twig', array(
            'caracter' => $caracter,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing caracter entity.
     *
     */
    public function editAction(Request $request, caracter $caracter)
    {
        $deleteForm = $this->createDeleteForm($caracter);
        $editForm = $this->createForm('LicoboxBundle\Form\caracterType', $caracter);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($caracter);
            $em->flush();

            return $this->redirectToRoute('caracter_edit', array('id' => $caracter->getId()));
        }

        return $this->render('caracter/edit.html.twig', array(
            'caracter' => $caracter,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a caracter entity.
     *
     */
    public function deleteAction(Request $request, caracter $caracter)
    {
        $form = $this->createDeleteForm($caracter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($caracter);
            $em->flush();
        }

        return $this->redirectToRoute('caracter_index');
    }

    /**
     * Creates a form to delete a caracter entity.
     *
     * @param caracter $caracter The caracter entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(caracter $caracter)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('caracter_delete', array('id' => $caracter->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
