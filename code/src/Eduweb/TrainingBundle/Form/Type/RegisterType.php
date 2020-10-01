<?php

namespace Eduweb\TrainingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
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
            ->add('name', 'text', array('label' => 'Imię i Nazwisko'))
            ->add('email', 'email', array('label' => 'E-mail'))
            ->add('sex', 'choice', array('label' => 'Płeć', 'choices' => array('m' => 'Mężczyzna', 'f' => 'Kobieta'), "expanded" => true))
            ->add('birthdate', 'birthday', array('label' => 'Data Urodzenia', 'empty_value' => ' --', 'empty_data' => null))
            ->add('country', 'country', array('label' => 'Kraj pochodzenia', 'empty_value' => ' --', 'empty_data' => null))
            ->add('course', 'choice', array('label' => 'Poziom Kursu', 'choices' => array('basic' => 'Kurs podstawowy', 'at' => 'Analiza techniczna', 'af' => 'Analiza fundamentalna', 'master' => 'Kurs zaawansowany'), 'empty_value' => ' --', 'empty_data' => null))
            ->add('invest', 'choice', array('label' => 'Inwestycje', 'choices' => array('a' => 'Akcje', 'o' => 'Obligacje', 'f' => 'Forex', 'etf' => 'ETF'), "expanded" => true, 'multiple' => true))
            ->add('comments', 'textarea', array('label' => 'Kometarze'))
            ->add('paymentFile', 'file', array('label' => 'Potwierdzenie przelewu'))
            ->add('rules', 'checkbox', array('label' => 'Regulamin', 'constraints' => array(new Assert\NotBlank()), 'mapped' => false))
            ->add('save', 'submit', array('label' => 'Zapisz'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'Eduweb\TrainingBundle\Entity\Register'));
    }
}
