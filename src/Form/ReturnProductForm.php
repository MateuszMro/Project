<?php

namespace App\Form;

use App\Entity\ReturnProduct;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;

class ReturnProductForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
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
            ->add('orderNumber', IntegerType::class, [
                'label' => 'Numer zamówienia',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Podaj numer zamówienia',
                    ]),
                    new Assert\Positive([
                        'message' => 'Numer zamówienia musi być liczbą dodatnią.',
                    ]),
                    new Assert\Length([
                        'min' => 12,
                        'max' => 12,
                        'exactMessage' => 'Numer zamówienia składa się z {{ limit }} cyfr.',
                    ]),
                ],
            ])
            ->add('numberBankAccount', TextType::class, [
                'label' => 'Numer rachunku bankowego',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Podaj numer rachunku bankowego',
                    ]),
                    new Assert\Positive([
                        'message' => 'Numer rachunku bankowego musi być liczbą dodatnią.',
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
            ->add('reasonReturn', TextareaType::class, [
                'label' => 'Przyczyna zwrotu',
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'returnProductForm' => ReturnProduct::class,
        ]);
    }
}
