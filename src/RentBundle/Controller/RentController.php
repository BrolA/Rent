<?php

namespace RentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use RentBundle\Entity\Rent;
use RentBundle\Form\RentType;

/**
 * Rent controller.
 *
 * @Route("/rent")
 */
class RentController extends Controller
{
    /**
     * Lists all Rent entities.
     *
     * @Route("/", name="rent_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rents = $em->getRepository('RentBundle:Rent')->findAll();

        return $this->render('RentBundle:Default:index.html.twig', array(
            'rents' => $rents,
        ));
    }

    /**
     * Creates a new Rent entity.
     *
     * @Route("/new", name="rent_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $rent = new Rent();
        $form = $this->createForm(new RentType(), $rent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rent);
            $em->flush();

            return $this->redirectToRoute('rent_show', array('id' => $rent->getId()));
        }

        return $this->render('rent/new.html.twig', array(
            'rent' => $rent,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rent entity.
     *
     * @Route("/{id}", name="rent_show")
     * @Method("GET")
     */
    public function showAction(Rent $rent)
    {
        $deleteForm = $this->createDeleteForm($rent);

        return $this->render('rent/show.html.twig', array(
            'rent' => $rent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Rent entity.
     *
     * @Route("/{id}/edit", name="rent_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Rent $rent)
    {
        $deleteForm = $this->createDeleteForm($rent);
        $editForm = $this->createForm(new RentType(), $rent);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rent);
            $em->flush();

            return $this->redirectToRoute('rent_edit', array('id' => $rent->getId()));
        }

        return $this->render('rent/edit.html.twig', array(
            'rent' => $rent,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Rent entity.
     *
     * @Route("/{id}", name="rent_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Rent $rent)
    {
        $form = $this->createDeleteForm($rent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rent);
            $em->flush();
        }

        return $this->redirectToRoute('rent_index');
    }

    /**
     * Creates a form to delete a Rent entity.
     *
     * @param Rent $rent The Rent entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rent $rent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rent_delete', array('id' => $rent->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
