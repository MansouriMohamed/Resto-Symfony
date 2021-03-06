<?php

namespace restaurantTunisie\PidevSiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use restaurantTunisie\PidevSiteBundle\Entity\Plat;
use restaurantTunisie\PidevSiteBundle\Form\PlatType;

/**
 * Plat controller.
 *
 */
class PlatController extends Controller
{

    /**
     * Lists all Plat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevSiteBundle:Plat')->findAll();

        return $this->render('PidevSiteBundle:Plat:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Plat entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Plat();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('plat_show', array('id' => $entity->getId())));
        }

        return $this->render('PidevSiteBundle:Plat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Plat entity.
    *
    * @param Plat $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Plat $entity)
    {
        $form = $this->createForm(new PlatType(), $entity, array(
            'action' => $this->generateUrl('plat_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Plat entity.
     *
     */
    public function newAction()
    {
        $entity = new Plat();
        $form   = $this->createCreateForm($entity);

        return $this->render('PidevSiteBundle:Plat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Plat entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevSiteBundle:Plat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevSiteBundle:Plat:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Plat entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevSiteBundle:Plat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plat entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevSiteBundle:Plat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Plat entity.
    *
    * @param Plat $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Plat $entity)
    {
        $form = $this->createForm(new PlatType(), $entity, array(
            'action' => $this->generateUrl('plat_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Plat entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevSiteBundle:Plat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('plat_edit', array('id' => $id)));
        }

        return $this->render('PidevSiteBundle:Plat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Plat entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevSiteBundle:Plat')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Plat entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('plat'));
    }

    /**
     * Creates a form to delete a Plat entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plat_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
