<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Vacante;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Vacante controller.
 *
 * @Route("vacante")
 */
class VacanteController extends Controller
{
    /**
     * Lists all vacante entities.
     *
     * @Route("/", name="vacante_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $vacantes = $em->getRepository('AppBundle:Vacante')->findAll();

        return $this->render('vacante/index.html.twig', array(
            'vacantes' => $vacantes,
        ));
    }

    /**
     * Creates a new vacante entity.
     *
     * @Route("/new", name="vacante_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $vacante = new Vacante();
        $form = $this->createForm('AppBundle\Form\VacanteType', $vacante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vacante);
            $em->flush();

            return $this->redirectToRoute('vacante_show', array('id' => $vacante->getId()));
        }

        return $this->render('vacante/new.html.twig', array(
            'vacante' => $vacante,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a vacante entity.
     *
     * @Route("/{id}", name="vacante_show")
     * @Method("GET")
     */
    public function showAction(Vacante $vacante)
    {
        $deleteForm = $this->createDeleteForm($vacante);

        return $this->render('vacante/show.html.twig', array(
            'vacante' => $vacante,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing vacante entity.
     *
     * @Route("/{id}/edit", name="vacante_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Vacante $vacante)
    {
        $deleteForm = $this->createDeleteForm($vacante);
        $editForm = $this->createForm('AppBundle\Form\VacanteType', $vacante);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vacante_edit', array('id' => $vacante->getId()));
        }

        return $this->render('vacante/edit.html.twig', array(
            'vacante' => $vacante,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a vacante entity.
     *
     * @Route("/{id}", name="vacante_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Vacante $vacante)
    {
        $form = $this->createDeleteForm($vacante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vacante);
            $em->flush();
        }

        return $this->redirectToRoute('vacante_index');
    }

    /**
     * Creates a form to delete a vacante entity.
     *
     * @param Vacante $vacante The vacante entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Vacante $vacante)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vacante_delete', array('id' => $vacante->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
