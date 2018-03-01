<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 28/02/18
 * Time: 15:28
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProviderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('address', TextType::class)
            ->add('zipCode', NumberType::class)
            ->add('siret', NumberType::class)
            ->add('type', TextType::class)
            ->add('franco', TextType::class)
            ->add('paymentCondition', TextType::class)
            ->add('deliveryTime', TextType::class)
            ->add('productDefinition', TextType::class)
            ->add('priceDefinition', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Enregister fournisseur '))
        ;

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Provider'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appBundle_provider';
    }
}