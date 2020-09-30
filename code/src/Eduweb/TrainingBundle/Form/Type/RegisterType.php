<?php


namespace Eduweb\TrainingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class RegisterType extends AbstractType
{
    public function getName()
    {
        return 'register name ';
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        parent::buildForm($builder, $options);
        $builder
            ->add('name', 'text', array('label' => 'Imię i Nazwisko', 'constraints' => array(new Assert\NotBlank(), new Assert\Regex( array( 'pattern' => '/^[a-zA-Z]+ [a-zA-Z]+$/', 'message' => 'Musisz podac imie i nazwisko' )))))
            ->add('email', 'email', array('label' => 'E-mail', 'constraints' => array(new Assert\NotBlank(), new Assert\Email())))
            ->add('sex', 'choice', array('label' => 'Płeć', 'choices' => array('m' => 'Mężczyzna', 'f' => 'Kobieta'), "expanded" => true))
            ->add('birthdate', 'birthday', array('label' => 'Data Urodzenia', 'empty_value' =>' --' , 'empty_data' => NULL, 'constraints' => array(new Assert\Date())))
            ->add('country','country', array('label' => 'Kraj pochodzenia', 'empty_value' =>' --' , 'empty_data' => NULL, 'constraints' => array(new Assert\NotBlank())))
            ->add('course', 'choice', array('label' => 'Poziom Kursu', 'choices' => array('basic' => 'Kurs podstawowy', 'at' => 'Analiza techniczna', 'af' => 'Analiza fundamentalna', 'master'=>'Kurs zaawansowany' ), 'empty_value' =>' --' , 'empty_data' => NULL, 'constraints' => array(new Assert\NotBlank())))
            ->add('invest', 'choice', array('label' => 'Inwestycje', 'choices' => array('a' => 'Akcje', 'o' => 'Obligacje', 'f' => 'Forex', 'etf' => 'ETF'), "expanded" => true, 'multiple' => true, 'constraints' => array(new Assert\NotBlank(),new Assert\Count(array('min' => 2)))))
            ->add('comments', 'textarea', array('label' => 'Kometarze'))
            ->add('payment_file', 'file', array('label' => 'Potwierdzenie przelewu', 'constraints' => array(new Assert\NotBlank(), new Assert\File(array('maxSize'=> '4M','mimeTypes'=>array('application/pdf','applia
                cation/x-pdf'), 'mimeTypesMessage' => 'Potwierdzenie przelewu musi byc w formacie pdf')))))
            ->add('rules','checkbox', array('label' => 'Regulamin', 'constraints' => array(new Assert\NotBlank())))
            ->add('save', 'submit', array('label' => 'Zapisz'));
    }

}
