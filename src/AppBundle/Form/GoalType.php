<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 11/11/17
 * Time: 23:54
 */

namespace AppBundle\Form;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GoalType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('goalOneRef' , TextType::class)
            ->add('goalOne' , TextType::class)
            ->add('goalTwo' , TextType::class)
            ->add('goalThree' , TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Valider'))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Goal'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appBundle_goal';
    }
}