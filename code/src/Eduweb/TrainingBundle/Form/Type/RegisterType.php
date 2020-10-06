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
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisterType extends AbstractType
{
    public function getName()
    {
        return 'register_name';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Imię i Nazwisko'))
            ->add('email', EmailType::class, array('label' => 'E-mail'))
            ->add('sex', ChoiceType::class, array('label' => 'Płeć', 'choices' => array('m' => 'Mężczyzna', 'f' => 'Kobieta'), "expanded" => true))
            ->add('birthdate', BirthdayType::class, array('label' => 'Data Urodzenia', 'empty_value' => ' --', 'empty_data' => null))
            ->add('country', CountryType::class, array('label' => 'Kraj pochodzenia', 'empty_value' => ' --', 'empty_data' => null))
            ->add('course', ChoiceType::class, array('label' => 'Poziom Kursu', 'choices' => array('basic' => 'Kurs podstawowy', 'at' => 'Analiza techniczna', 'af' => 'Analiza fundamentalna', 'master' => 'Kurs zaawansowany'), 'empty_value' => ' --', 'empty_data' => null))
            ->add('invest', ChoiceType::class, array('label' => 'Inwestycje', 'choices' => array('a' => 'Akcje', 'o' => 'Obligacje', 'f' => 'Forex', 'etf' => 'ETF'), "expanded" => true, 'multiple' => true))
            ->add('comments', TextareaType::class, array('label' => 'Kometarze'))
            ->add('paymentFile', FileType::class, array('label' => 'Potwierdzenie przelewu'))
            ->add('rules', CheckboxType::class, array('label' => 'Regulamin', 'constraints' => array(new Assert\NotBlank()), 'mapped' => false))
            ->add('save', SubmitType::class, array('label' => 'Zapisz'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'Eduweb\TrainingBundle\Entity\Register'));
    }
}
