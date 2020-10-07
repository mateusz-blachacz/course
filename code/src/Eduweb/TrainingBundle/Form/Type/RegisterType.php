<?php

namespace Eduweb\TrainingBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function getName()
    {
        return 'register_name';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Imię i Nazwisko'])
            ->add('email', EmailType::class, ['label' => 'E-mail'])
            ->add('sex', ChoiceType::class, ['label' => 'Płeć', 'choices' => ['Mężczyzna' => 'm', 'Kobieta' => 'f'], "expanded" => true])
            ->add('birthdate', BirthdayType::class, ['label' => 'Data Urodzenia', 'empty_data' => null])
            ->add('country', CountryType::class, ['label' => 'Kraj pochodzenia', 'empty_data' => null])
            ->add('course', ChoiceType::class, ['label' => 'Poziom Kursu', 'choices' => ['Kurs podstawowy' => 'basic', 'Analiza techniczna' => 'at', 'Analiza fundamentalna' => 'af', 'Kurs zaawansowany' => 'master'], 'empty_data' => null])
            ->add('invest', ChoiceType::class, ['label' => 'Inwestycje', 'choices' => ['a' => 'Akcje', 'o' => 'Obligacje', 'f' => 'Forex', 'etf' => 'ETF'], "expanded" => true, 'multiple' => true])
            ->add('comments', TextareaType::class, ['label' => 'Kometarze'])
            ->add('paymentFile', FileType::class, ['label' => 'Potwierdzenie przelewu'])
            ->add('rules', CheckboxType::class, ['label' => 'Regulamin', 'constraints' => [new Assert\NotBlank()], 'mapped' => false])
            ->add('save', SubmitType::class, ['label' => 'Zapisz']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => 'Eduweb\TrainingBundle\Entity\Register']);
    }

}
