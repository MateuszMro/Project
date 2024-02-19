<?php

namespace App\Form;

use App\Entity\Defects;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints as Assert;

class DefectForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numberPhone', TextType::class, [
                'label' => 'Numer telefonu',
                'error_bubbling' => true,
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Wprowadź numer telefonu',
                    ]),
                    new Assert\Length([
                        'min' => 9,
                        'minMessage' => 'Twój numer telefonu musi mieć minimum {{ limit }} znaków.',
                        // max length allowed by Symfony for security reasons
                        'max' => 16,
                        'maxMessage' => 'Twój numer telefonu nie może mieć więcej niż {{ limit }} znaków'
                    ]),
                ],
            ])

            ->add('description', TextareaType::class, [
                'attr' => ['rows' => 10],
                'label' => 'Opis problemu',
                'label_attr' => ['class' => 'block text-gray-700 font-bold mb-1'],
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Defects::class,
        ]);
    }
}
