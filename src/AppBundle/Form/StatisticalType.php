<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 08/09/17
 * Time: 11:54
 */

namespace AppBundle\Form;


use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use AppBundle\Entity\Statistical;

class StatisticalType extends AbstractType
{

    /**
     * {@inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('period', ChoiceType::class, [
                'choices' => [
                    '1 Mois'  => Statistical::PERIOD_1,
                    '3 Mois'  => Statistical::PERIOD_3,
                    '6 Mois'  => Statistical::PERIOD_6,
                    '12 Mois' => Statistical::PERIOD_12,
                    '∞'       => Statistical::PERIOD_INFI,
                ]
            ])
            ->add('entity', ChoiceType::class, [
                'choices' => [
                    'Clients' => Statistical::ENTITY_CUSTOMER,
                    'Commandes' => Statistical::ENTITY_ORDER,
                    'Objectifs' => Statistical::ENTITY_GOAL
                ]
            ])
            ->add('argument', ChoiceType::class, [
                'choices' => [
                    'nouveau client'  => Statistical::NEW_CUSTOMER,
                    'chiffre par client'  => Statistical::FIGURE_CUSTOMER,
                    'chiffre client par client '  => Statistical::FIGURE_CUSTOMER_FIGURE,
                    'nombre commande par client ' => Statistical::NUMBER_ORDERS,
                ],
                'multiple' => true,
                'expanded' => true,
            ])

            ->add('save', SubmitType::class, array('label' => 'Create Post'))
        ;

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Statistical'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_statistical';
    }
}