<?php

namespace AppBundle\Controller;

use AppBundle\Entity\pasante;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Pasante controller.
 *
 * @Route("pasante")
 */
class pasanteController extends Controller
{
    /**
     * Lists all pasante entities.
     *
     * @Route("/", name="pasante_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pasantes = $em->getRepository('AppBundle:pasante')->findAll();

        return $this->render('pasante/index.html.twig', array(
            'pasantes' => $pasantes,
        ));
    }

    /**
     * Creates a new pasante entity.
     *
     * @Route("/new", name="pasante_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pasante = new Pasante();
        $form = $this->createForm('AppBundle\Form\pasanteType', $pasante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pasante);
            $em->flush();

            return $this->redirectToRoute('pasante_show', array('id' => $pasante->getId()));
        }

        return $this->render('pasante/new.html.twig', array(
            'pasante' => $pasante,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pasante entity.
     *
     * @Route("/{id}", name="pasante_show")
     * @Method("GET")
     */
    public function showAction(pasante $pasante)
    {
        $deleteForm = $this->createDeleteForm($pasante);

        return $this->render('pasante/show.html.twig', array(
            'pasante' => $pasante,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pasante entity.
     *
     * @Route("/{id}/edit", name="pasante_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, pasante $pasante)
    {
        $deleteForm = $this->createDeleteForm($pasante);
        $editForm = $this->createForm('AppBundle\Form\pasanteType', $pasante);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pasante_edit', array('id' => $pasante->getId()));
        }

        return $this->render('pasante/edit.html.twig', array(
            'pasante' => $pasante,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pasante entity.
     *
     * @Route("/{id}", name="pasante_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, pasante $pasante)
    {
        $form = $this->createDeleteForm($pasante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pasante);
            $em->flush();
        }

        return $this->redirectToRoute('pasante_index');
    }

    /**
     * Creates a form to delete a pasante entity.
     *
     * @param pasante $pasante The pasante entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(pasante $pasante)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pasante_delete', array('id' => $pasante->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
