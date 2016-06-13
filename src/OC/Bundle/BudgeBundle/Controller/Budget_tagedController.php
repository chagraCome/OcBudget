<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OC\Bundle\BudgeBundle\Entity\Budget_taged;
use OC\Bundle\BudgeBundle\Form\Budget_tagedType;

/**
 * Budget_taged controller.
 *
 */
class Budget_tagedController extends Controller
{

    /**
     * Lists all Budget_taged entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCBudgeBundle:Budget_taged')->findAll();

        return $this->render('OCBudgeBundle:Budget_taged:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Budget_taged entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Budget_taged();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('budget_taged_show', array('id' => $entity->getId())));
        }

        return $this->render('OCBudgeBundle:Budget_taged:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Budget_taged entity.
     *
     * @param Budget_taged $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Budget_taged $entity)
    {
        $form = $this->createForm(new Budget_tagedType(), $entity, array(
            'action' => $this->generateUrl('budget_taged_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Budget_taged entity.
     *
     */
    public function newAction()
    {
        $entity = new Budget_taged();
        $form   = $this->createCreateForm($entity);

        return $this->render('OCBudgeBundle:Budget_taged:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Budget_taged entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Budget_taged')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Budget_taged entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCBudgeBundle:Budget_taged:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Budget_taged entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Budget_taged')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Budget_taged entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCBudgeBundle:Budget_taged:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Budget_taged entity.
    *
    * @param Budget_taged $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Budget_taged $entity)
    {
        $form = $this->createForm(new Budget_tagedType(), $entity, array(
            'action' => $this->generateUrl('budget_taged_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Budget_taged entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Budget_taged')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Budget_taged entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('budget_taged_edit', array('id' => $id)));
        }

        return $this->render('OCBudgeBundle:Budget_taged:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Budget_taged entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCBudgeBundle:Budget_taged')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Budget_taged entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('budget_taged'));
    }

    /**
     * Creates a form to delete a Budget_taged entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('budget_taged_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
