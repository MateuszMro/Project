<?php

namespace App\Form;

use App\Entity\Clients;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\EqualTo;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraints as Assert;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'E-mail',
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Wprowadź adres e-mail.'
                    ]),
                    new Assert\Email([
                        'message'=>'Podany e-mail {{ value }} jest nieprawidłowy.'
                    ]),
                ],
            ])
            ->add('login', TextType::class, [
                'label' => 'Login',
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Wprowadź login.',
                    ]),
                    new Assert\Length([
                        'min' => 6,
                        'minMessage' => 'Twój login musi mieć minimum {{ limit }} znaków.',
                        // max length allowed by Symfony for security reasons
                        'max' => 20,
                        'maxMessage' => 'Twój login nie może mieć więcej niż {{ limit }} znaków'
                    ]),
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => 'Akceptuję regulamin',
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\IsTrue([
                        'message' => 'Musisz zaakceptować regulamin.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'label' => 'Hasło',
                'attr' => ['autocomplete' => 'new-password'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Wprowadź hasło',
                    ]),
                    new Assert\Length([
                        'min' => 6,
                        'minMessage' => 'Twoje hasło musi mieć minimum {{ limit }} znaków.',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('confirmPassword', PasswordType::class, [
                'mapped' => false,
                'label' => 'Powtórz hasło',
                'attr' => ['autocomplete' => 'new-password'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Powtórz hasło',
                    ]),
                    new Assert\Callback(function ($value, ExecutionContextInterface $context) {
                        $plainPassword = $context->getRoot()->get('plainPassword')->getData();
                        if ($plainPassword !== $value) {
                            $context->buildViolation('Podane hasła muszą być takie same.')
                                ->atPath('confirmPassword')
                                ->addViolation();
                        }
                    }),
                ],

            ])
            
        
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Clients::class,
        ]);
    }
}
