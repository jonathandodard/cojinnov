<?php

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numberAccount', TextType::class)
            ->add('entitled', TextType::class)
            ->add('ranking', TextType::class)
            ->add('nameRepresentative', TextType::class)
            ->add('name', TextType::class)
            ->add('email', EmailType::class)
            ->add('address', TextType::class)
            ->add('additionalAddress', TextType::class)
            ->add('zipCode', NumberType::class)
            ->add('city', TextType::class)
            ->add('phoneNumber', NumberType::class)
            ->add('price', NumberType::class)
            ->add('save', SubmitType::class, array('label' => 'Enregister client '))
        ;

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Customer'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_customer';
    }


}
