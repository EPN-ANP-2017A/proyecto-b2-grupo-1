<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Aplicacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Aplicacion controller.
 *
 * @Route("aplicacion")
 */
class AplicacionController extends Controller
{
    /**
     * Lists all aplicacion entities.
     *
     * @Route("/", name="aplicacion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $aplicacions = $em->getRepository('AppBundle:Aplicacion')->findAll();

        return $this->render('aplicacion/index.html.twig', array(
            'aplicacions' => $aplicacions,
        ));
    }

    /**
     * Creates a new aplicacion entity.
     *
     * @Route("/new", name="aplicacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $aplicacion = new Aplicacion();
        $form = $this->createForm('AppBundle\Form\AplicacionType', $aplicacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aplicacion);
            $em->flush();

            return $this->redirectToRoute('aplicacion_show', array('id' => $aplicacion->getId()));
        }

        return $this->render('aplicacion/new.html.twig', array(
            'aplicacion' => $aplicacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a aplicacion entity.
     *
     * @Route("/{id}", name="aplicacion_show")
     * @Method("GET")
     */
    public function showAction(Aplicacion $aplicacion)
    {
        $deleteForm = $this->createDeleteForm($aplicacion);

        return $this->render('aplicacion/show.html.twig', array(
            'aplicacion' => $aplicacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing aplicacion entity.
     *
     * @Route("/{id}/edit", name="aplicacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Aplicacion $aplicacion)
    {
        $deleteForm = $this->createDeleteForm($aplicacion);
        $editForm = $this->createForm('AppBundle\Form\AplicacionType', $aplicacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('aplicacion_edit', array('id' => $aplicacion->getId()));
        }

        return $this->render('aplicacion/edit.html.twig', array(
            'aplicacion' => $aplicacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a aplicacion entity.
     *
     * @Route("/{id}", name="aplicacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Aplicacion $aplicacion)
    {
        $form = $this->createDeleteForm($aplicacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($aplicacion);
            $em->flush();
        }

        return $this->redirectToRoute('aplicacion_index');
    }

    /**
     * Creates a form to delete a aplicacion entity.
     *
     * @param Aplicacion $aplicacion The aplicacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Aplicacion $aplicacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('aplicacion_delete', array('id' => $aplicacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
