<?php

namespace OC\Bundle\BudgeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConsommationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('year')
            ->add('ordonnanceEngagement')
            ->add('ordonnancePayement')
            ->add('dateLecture')
            //->add('line_budget')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\Bundle\BudgeBundle\Entity\Consommation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oc_bundle_budgebundle_consommation';
    }
}
