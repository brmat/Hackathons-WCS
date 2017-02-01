<?php

namespace FindMeBundle\Controller;

use FindMeBundle\Entity\ImageSend;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Imagesend controller.
 *
 */
class ImageSendController extends Controller
{
    /**
     * Lists all imageSend entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imageSends = $em->getRepository('FindMeBundle:ImageSend')->findAll();

        return $this->render('imagesend/index.html.twig', array(
            'imageSends' => $imageSends,
        ));
    }

    /**
     * Creates a new imageSend entity.
     *
     */
    public function newAction(Request $request)
    {
        $imageSend = new Imagesend();
        $form = $this->createForm('FindMeBundle\Form\ImageSendType', $imageSend);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageSend);
            $em->flush($imageSend);

            return $this->redirectToRoute('imagesend_show', array('id' => $imageSend->getId()));
        }

        return $this->render('imagesend/new.html.twig', array(
            'imageSend' => $imageSend,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a imageSend entity.
     *
     */
    public function showAction(ImageSend $imageSend)
    {
        $deleteForm = $this->createDeleteForm($imageSend);

        return $this->render('imagesend/show.html.twig', array(
            'imageSend' => $imageSend,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing imageSend entity.
     *
     */
    public function editAction(Request $request, ImageSend $imageSend)
    {
        $deleteForm = $this->createDeleteForm($imageSend);
        $editForm = $this->createForm('FindMeBundle\Form\ImageSendType', $imageSend);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('imagesend_edit', array('id' => $imageSend->getId()));
        }

        return $this->render('imagesend/edit.html.twig', array(
            'imageSend' => $imageSend,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a imageSend entity.
     *
     */
    public function deleteAction(Request $request, ImageSend $imageSend)
    {
        $form = $this->createDeleteForm($imageSend);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($imageSend);
            $em->flush($imageSend);
        }

        return $this->redirectToRoute('imagesend_index');
    }

    /**
     * Creates a form to delete a imageSend entity.
     *
     * @param ImageSend $imageSend The imageSend entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImageSend $imageSend)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imagesend_delete', array('id' => $imageSend->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
