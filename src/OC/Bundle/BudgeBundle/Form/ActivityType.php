<?php

namespace OC\Bundle\BudgeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActivityType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text')
            ->add('description','textarea')
            ->add('credit','number')
            ->add('outressource','checkbox', array(
                  'required' => false))
            ->add('prix','number')
            ->add('source','text')
            ->add('nature','choice', array(
                  'choices' => array('motawwsel' => 'متواصل', 'new' => 'جديد'),'expanded'=>true))
            ->add('typerealisation','choice', array(
                  'choices' => array('Dans le cadre de transactions publiques' => 'في إطار الصفقات العموميّة', 'En dehors du cadre des transactions publiques' => 'خارج إطار الصفقات العموميّة'),'expanded'=>true))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\Bundle\BudgeBundle\Entity\Activity'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oc_bundle_budgebundle_activity';
    }
}
