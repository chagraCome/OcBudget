<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OC\Bundle\BudgeBundle\Entity\Ministere;
use OC\Bundle\BudgeBundle\Form\MinistereType;

/**
 * Ministere controller.
 *
 */
class MinistereController extends Controller
{

    /**
     * Lists all Ministere entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCBudgeBundle:Ministere')->findAll();

        return $this->render('OCBudgeBundle:Ministere:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Ministere entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Ministere();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ministere_show', array('id' => $entity->getId())));
        }

        return $this->render('OCBudgeBundle:Ministere:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Ministere entity.
     *
     * @param Ministere $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ministere $entity)
    {
        $form = $this->createForm(new MinistereType(), $entity, array(
            'action' => $this->generateUrl('ministere_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ministere entity.
     *
     */
    public function newAction()
    {
        $entity = new Ministere();
        $form   = $this->createCreateForm($entity);

        return $this->render('OCBudgeBundle:Ministere:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ministere entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Ministere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ministere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCBudgeBundle:Ministere:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ministere entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Ministere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ministere entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCBudgeBundle:Ministere:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Ministere entity.
    *
    * @param Ministere $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ministere $entity)
    {
        $form = $this->createForm(new MinistereType(), $entity, array(
            'action' => $this->generateUrl('ministere_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ministere entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Ministere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ministere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ministere_edit', array('id' => $id)));
        }

        return $this->render('OCBudgeBundle:Ministere:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Ministere entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCBudgeBundle:Ministere')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ministere entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ministere'));
    }

    /**
     * Creates a form to delete a Ministere entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ministere_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
