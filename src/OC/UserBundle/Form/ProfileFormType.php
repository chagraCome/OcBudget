<?php

namespace OC\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseProfileFormType;

class ProfileFormType extends BaseProfileFormType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('username', null, array('label' => 'form.username',
                    'translation_domain' => 'FOSUserBundle',
                    'disabled' => true))
                ->add('name', null, array('label' => 'Nom'))
                ->add('prenom', null, array('label' => 'Prenom'))
                ->add('website', null, array('label' => 'Website'))
                ->add('aboutYou', 'textarea', array('label' => 'About you'))
                ->add('file');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'OC\UserBundle\Entity\User',
        ));
    }

    public function getName() {
        return 'custom_user_edit_profile';
    }

}
