<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OC\Bundle\BudgeBundle\Entity\Programe;
use OC\Bundle\BudgeBundle\Form\ProgrameType;

/**
 * Programe controller.
 *
 */
class ProgrameController extends Controller
{

    /**
     * Lists all Programe entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCBudgeBundle:Programe')->findAll();

        return $this->render('OCBudgeBundle:Programe:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Programe entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Programe();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('yes_show', array('id' => $entity->getId())));
        }

        return $this->render('OCBudgeBundle:Programe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Programe entity.
     *
     * @param Programe $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Programe $entity)
    {
        $form = $this->createForm(new ProgrameType(), $entity, array(
            'action' => $this->generateUrl('yes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Programe entity.
     *
     */
    public function newAction()
    {
        $entity = new Programe();
        $form   = $this->createCreateForm($entity);

        return $this->render('OCBudgeBundle:Programe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Programe entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Programe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCBudgeBundle:Programe:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Programe entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Programe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programe entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCBudgeBundle:Programe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Programe entity.
    *
    * @param Programe $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Programe $entity)
    {
        $form = $this->createForm(new ProgrameType(), $entity, array(
            'action' => $this->generateUrl('yes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Programe entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Programe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('yes_edit', array('id' => $id)));
        }

        return $this->render('OCBudgeBundle:Programe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Programe entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCBudgeBundle:Programe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Programe entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('yes'));
    }

    /**
     * Creates a form to delete a Programe entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('yes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
