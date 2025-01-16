<?php

namespace App\Form;

use App\Entity\OrderSpecialist;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;

class OrderSpecialistForm extends AbstractType
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
            ->add('address', TextType::class, [
                'label' => 'Adres wizyty',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Podaj adres wizyty',
                    ]),
                    new Assert\Length([
                        'min' => 1,
                        'minMessage' => 'Twój adres wizyty musi mieć minimum {{ limit }} znak.',
                        'max' => 100,
                        'maxMessage' => 'Twój adres wizyty nie może mieć więcej niż {{ limit }} znaków.'
                    ]),
                ],
            ])
            ->add('productId', IntegerType::class, [
                'label' => 'Numer projektu',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'error_bubbling' => true,
                'attr' => [
                    'readonly' => true,
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Podaj numer projektu',
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
            'orderSpecialistForm' => OrderSpecialist::class,
        ]);
    }
}
