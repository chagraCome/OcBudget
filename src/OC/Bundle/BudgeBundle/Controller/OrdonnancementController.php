<?php

namespace OC\Bundle\BudgeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OC\Bundle\BudgeBundle\Entity\Ordonnancement;
use OC\Bundle\BudgeBundle\Form\OrdonnancementType;

/**
 * Ordonnancement controller.
 *
 */
class OrdonnancementController extends Controller
{

    /**
     * Lists all Ordonnancement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCBudgeBundle:Ordonnancement')->findAll();

        return $this->render('OCBudgeBundle:Ordonnancement:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Ordonnancement entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Ordonnancement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ordonnancement_show', array('id' => $entity->getId())));
        }

        return $this->render('OCBudgeBundle:Ordonnancement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Ordonnancement entity.
     *
     * @param Ordonnancement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ordonnancement $entity)
    {
        $form = $this->createForm(new OrdonnancementType(), $entity, array(
            'action' => $this->generateUrl('ordonnancement_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ordonnancement entity.
     *
     */
    public function newAction()
    {
        $entity = new Ordonnancement();
        $form   = $this->createCreateForm($entity);

        return $this->render('OCBudgeBundle:Ordonnancement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ordonnancement entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Ordonnancement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ordonnancement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCBudgeBundle:Ordonnancement:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ordonnancement entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Ordonnancement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ordonnancement entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCBudgeBundle:Ordonnancement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Ordonnancement entity.
    *
    * @param Ordonnancement $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ordonnancement $entity)
    {
        $form = $this->createForm(new OrdonnancementType(), $entity, array(
            'action' => $this->generateUrl('ordonnancement_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ordonnancement entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCBudgeBundle:Ordonnancement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ordonnancement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ordonnancement_edit', array('id' => $id)));
        }

        return $this->render('OCBudgeBundle:Ordonnancement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Ordonnancement entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCBudgeBundle:Ordonnancement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ordonnancement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ordonnancement'));
    }

    /**
     * Creates a form to delete a Ordonnancement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ordonnancement_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
