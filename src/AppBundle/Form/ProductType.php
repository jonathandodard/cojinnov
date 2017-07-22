<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 22/07/17
 * Time: 14:32
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    /**
     * {@inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('type', TextType::class)
            ->add('reference', NumberType::class)
            ->add('name', TextType::class)
            ->add('category', TextType::class)
            ->add('conditionProduct', TextType::class)
            ->add('duration', NumberType::class)
            ->add('pcb', NumberType::class)
            ->add('saleUnit', TextType::class)
            ->add('tg', NumberType::class)
            ->add('ts', NumberType::class)
            ->add('tb', NumberType::class)
            ->add('taOne', NumberType::class)
            ->add('taTwo', NumberType::class)
            ->add('ppdia', NumberType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Post'))
        ;

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product'
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