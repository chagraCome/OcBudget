<?php

namespace OC\Bundle\BudgeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Line_BudgetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('article')
            ->add('parag')
            ->add('sParag')
            ->add('region')
            ->add('labelLine')
            ->add('ministere')
            ->add('budget_taged')
            ->add('classes','entity', array(
    'class' => 'OCBudgeBundle:Classe',
    'choice_label' => 'labelClass',
)
                )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\Bundle\BudgeBundle\Entity\Line_Budget'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oc_bundle_budgebundle_line_budget';
    }
}
