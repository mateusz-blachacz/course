<?php

namespace Eduweb\TrainingBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{

    public function getName()
    {
        return 'contact_name';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("name", TextType::class, array("label" => "Imię"))
            ->add("email", EmailType::class, array("label" => "email"))
            ->add("message", TextareaType::class, array("label" => "Wiadomość"))
            ->add("save", SubmitType::class, array("label" => "Zapisz"));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'Eduweb\TrainingBundle\Entity\Contact'));
    }
}
