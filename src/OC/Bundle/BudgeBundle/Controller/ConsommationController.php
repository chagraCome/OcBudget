<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OC\Bundle\BudgeBundle\Entity\Consommation;
use OC\Bundle\BudgeBundle\Form\ConsommationType;

/**
 * Consommation controller.
 *
 */
class ConsommationController extends Controller
{

    /**
     * Lists all Consommation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCBudgeBundle:Consommation')->findAll();

        return $this->render('OCBudgeBundle:Consommation:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Consommation entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Consommation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('consommation_show', array('id' => $entity->getId())));
        }

        return $this->render('OCBudgeBundle:Consommation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Consommation entity.
     *
     * @param Consommation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Consommation $entity)
    {
        $form = $this->createForm(new ConsommationType(), $entity, array(
            'action' => $this->generateUrl('consommation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Consommation entity.
     *
     */
    public function newAction()
    {
        $entity = new Consommation();
        $form   = $this->createCreateForm($entity);

        return $this->render('OCBudgeBundle:Consommation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Consommation entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Consommation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Consommation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCBudgeBundle:Consommation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Consommation entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Consommation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Consommation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCBudgeBundle:Consommation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Consommation entity.
    *
    * @param Consommation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Consommation $entity)
    {
        $form = $this->createForm(new ConsommationType(), $entity, array(
            'action' => $this->generateUrl('consommation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Consommation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Consommation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Consommation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('consommation_edit', array('id' => $id)));
        }

        return $this->render('OCBudgeBundle:Consommation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Consommation entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCBudgeBundle:Consommation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Consommation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('consommation'));
    }

    /**
     * Creates a form to delete a Consommation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('consommation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
