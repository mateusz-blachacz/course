<?php

namespace Eduweb\TrainingBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{

    public function getName()
    {
        return 'contact_name';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("name", TextType::class, ["label" => "Imię"])
            ->add("email", EmailType::class, ["label" => "email"])
            ->add("message", TextareaType::class, ["label" => "Wiadomość"])
            ->add("save", SubmitType::class, ["label" => "Zapisz"]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => 'Eduweb\TrainingBundle\Entity\Contact']);
    }
}
