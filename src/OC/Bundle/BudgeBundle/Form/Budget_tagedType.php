<?php

namespace OC\Bundle\BudgeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Budget_tagedType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('flagBudget')
            ->add('tag1')
            ->add('tag2')
            ->add('tag3')
            ->add('tag4')
            ->add('tag5')
            ->add('tag6')
            ->add('tag7')
            ->add('tag8')
            ->add('tag9')
            ->add('tag10')
            ->add('dateMin')
            ->add('dateMax')
            ->add('contrat','entity', array(
                 'class' => 'BudgeBundle:Contrat',
                 'choice_label' => 'labelContrat',))
         ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\Bundle\BudgeBundle\Entity\Budget_taged'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oc_bundle_budgebundle_budget_taged';
    }
}
