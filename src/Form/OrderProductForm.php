<?php

namespace App\Form;

use App\Entity\OrderProduct;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;

class OrderProductForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Imię',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Podaj swoje imię',
                    ]),
                    new Assert\Length([
                        'min' => 1,
                        'minMessage' => 'Twoje imię musi mieć minimum {{ limit }} znak.',
                        // max length allowed by Symfony for security reasons
                        'max' => 20,
                        'maxMessage' => 'Twoje imię nie może mieć więcej niż {{ limit }} znaków.'
                    ]),
                ],
            ])
            ->add('surname', TextType::class, [
                'label' => 'Nazwisko',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Podaj swoje nazwisko',
                    ]),
                    new Assert\Length([
                        'min' => 1,
                        'minMessage' => 'Twoje nazwisko musi mieć minimum {{ limit }} znak.',
                        // max length allowed by Symfony for security reasons
                        'max' => 20,
                        'maxMessage' => 'Twoje nazwisko nie może mieć więcej niż {{ limit }} znaków.'
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Podaj swój adres e-mail',
                    ]),
                    new Assert\Length([
                        'min' => 1,
                        'minMessage' => 'Twój adres e-mail musi mieć minimum {{ limit }} znak.',
                        // max length allowed by Symfony for security reasons
                        'max' => 25,
                        'maxMessage' => 'Twój adres e-mail nie może mieć więcej niż {{ limit }} znaków.'
                    ]),
                ],
            ])
            ->add('address', TextType::class, [
                'label' => 'Adres dostawy',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Podaj swój adres zamieszkania',
                    ]),
                    new Assert\Length([
                        'min' => 1,
                        'minMessage' => 'Twój adres zamieszkania musi mieć minimum {{ limit }} znak.',
                        // max length allowed by Symfony for security reasons
                        'max' => 100,
                        'maxMessage' => 'Twój adres zamieszkania nie może mieć więcej niż {{ limit }} znaków.'
                    ]),
                ],
            ])
            ->add('productID', IntegerType::class, [
                'label' => 'Numer produktu',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'attr' => [
                    'readonly' => true,
                ],
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Ilość sztuk w zamówieniu',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Podaj ilość sztuk produktu do jednego zamówienia',
                    ]),
                    new Assert\Positive([
                        'message' => 'Ilość produktów musi być liczbą dodatnią.',
                    ]),
                    new Assert\Range([
                        'min' => 1,
                        'max' => 10,
                        'notInRangeMessage' => 'Minimalna ilość zamówienia wynosi {{ min }} sztukę, a maksymalna {{ max }} sztuk.',
                    ]),
                ],
            ])
            ->add('width', IntegerType::class, [
                'label' => 'Szerokość wyrażana w milimetrach(mm)',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Podaj szerokość',
                    ]),
                    new Assert\Positive([
                        'message' => 'Szerokość musi być liczbą dodatnią.',
                    ]),
                    new Assert\Range([
                        'min' => 1,
                        'max' => 10000,
                        'notInRangeMessage' => 'Szerokość musi być między {{ min }} a {{ max }} milimetrów.',
                    ]),
                ],
            ])
            ->add('height', IntegerType::class, [
                'label' => 'Wysokość wyrażana w milimetrach(mm)',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Podaj wysokość',
                    ]),
                    new Assert\Positive([
                        'message' => 'Wysokość musi być liczbą dodatnią.',
                    ]),
                    new Assert\Range([
                        'min' => 1,
                        'max' => 10000,
                        'notInRangeMessage' => 'Wysokość musi być między {{ min }} a {{ max }} milimetrów.',
                    ]),
                ],
            ])
            ->add('numberPhone', IntegerType::class, [
                'label' => 'Numer telefonu',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Podaj numer telefonu',
                    ]),
                    new Assert\Positive([
                        'message' => 'Numer telefonu musi być liczbą dodatnią.',
                    ]),
                    new Assert\Length([
                        'min' => 9,
                        'minMessage' => 'Twój numer telefonu musi mieć minimum {{ limit }} znaków.',
                        // max length allowed by Symfony for security reasons
                        'max' => 14,
                        'maxMessage' => 'Twój numer telefonu nie może mieć więcej niż {{ limit }} znaków.'
                    ]),
                ],
            ])
            ->add('commentsOrder', TextareaType::class, [
                'label' => 'Dodatkowe informacje',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'required' => false,
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\Length([
                        // max length allowed by Symfony for security reasons
                        'max' => 1000,
                        'maxMessage' => 'Twój komentarz nie może mieć więcej niż {{ limit }} znaków.'
                    ]),
                ],
            ])
            ->add('acceptTerms', CheckboxType::class, [
                'mapped' => false,
                'label_attr' => ['class' => 'font-bold text-gray-700'],
                'constraints' => new NotBlank(['message' => 'Musisz zaakceptować regulamin']),
                'label' => 'Akceptuję regulamin',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'orderProductForm' => OrderProduct::class,
        ]);
    }
}
