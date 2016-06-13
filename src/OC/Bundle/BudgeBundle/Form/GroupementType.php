<?php

namespace OC\Bundle\BudgeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('labelGroupement')
            ->add('Line_Budgets')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\Bundle\BudgeBundle\Entity\Groupement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oc_bundle_budgebundle_groupement';
    }
}
