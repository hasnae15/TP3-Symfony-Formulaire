<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Range;

class CartItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantity', NumberType::class, [
                'label' => 'Quantity',
                'attr' => [
                    'class' => 'form-control',
                    'min' => 1,
                    'max' => 10,
                    'style' => 'max-width: 100px'
                ],
                'constraints' => [
                    new Range([
                        'min' => 1,
                        'max' => 10,
                        'minMessage' => 'You must order at least 1 item.',
                        'maxMessage' => 'You cannot order more than 10 items.'
                    ])
                ],
                'data' => 1
            ])
            ->add('color', ChoiceType::class, [
                'label' => 'Select Color',
                'choices' => [
                    'Matte Black' => 'black',
                    'Pearl White' => 'white',
                    'Silver' => 'silver'
                ],
                'attr' => [
                    'class' => 'form-select',
                    'style' => 'max-width: 200px'
                ],
                'data' => 'black'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Add to Cart',
                'attr' => [
                    'class' => 'btn btn-primary btn-lg'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Pas d'entity liée, c'est un formulaire indépendant
            'method' => 'POST',
            'action' => '/cart'
        ]);
    }
}
