<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OC\Bundle\BudgeBundle\Entity\Line_Budget;
use OC\Bundle\BudgeBundle\Form\Line_BudgetType;

/**
 * Line_Budget controller.
 *
 */
class Line_BudgetController extends Controller
{

    /**
     * Lists all Line_Budget entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCBudgeBundle:Line_Budget')->findAll();

        return $this->render('OCBudgeBundle:Line_Budget:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Line_Budget entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Line_Budget();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('line_budget_show', array('id' => $entity->getId())));
        }

        return $this->render('OCBudgeBundle:Line_Budget:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Line_Budget entity.
     *
     * @param Line_Budget $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Line_Budget $entity)
    {
        $form = $this->createForm(new Line_BudgetType(), $entity, array(
            'action' => $this->generateUrl('line_budget_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Line_Budget entity.
     *
     */
    public function newAction()
    {
        $entity = new Line_Budget();
        $form   = $this->createCreateForm($entity);

        return $this->render('OCBudgeBundle:Line_Budget:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Line_Budget entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Line_Budget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Line_Budget entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCBudgeBundle:Line_Budget:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Line_Budget entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Line_Budget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Line_Budget entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCBudgeBundle:Line_Budget:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Line_Budget entity.
    *
    * @param Line_Budget $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Line_Budget $entity)
    {
        $form = $this->createForm(new Line_BudgetType(), $entity, array(
            'action' => $this->generateUrl('line_budget_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Line_Budget entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Line_Budget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Line_Budget entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('line_budget_edit', array('id' => $id)));
        }

        return $this->render('OCBudgeBundle:Line_Budget:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Line_Budget entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCBudgeBundle:Line_Budget')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Line_Budget entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('line_budget'));
    }

    /**
     * Creates a form to delete a Line_Budget entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('line_budget_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
