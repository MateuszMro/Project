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

class ChangePasswordForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'label' => 'Obecne hasło',
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
                'label' => 'Podaj nowe hasło',
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
            ->add('confirmNewPassword', PasswordType::class, [
                'mapped' => false,
                'label' => 'Powtórz nowe hasło',
                'attr' => ['autocomplete' => 'new-password'],
                'error_bubbling' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Powtórz hasło',
                    ]),
                    new Assert\Callback(function ($value, ExecutionContextInterface $context) {
                        $plainPassword = $context->getRoot()->get('confirmPassword')->getData();
                        if ($plainPassword !== $value) {
                            $context->buildViolation('Podane hasła nie są identyczne.')
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
