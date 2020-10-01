<?php

namespace Eduweb\TrainingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
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
            ->add("name", "text", array("label" => "Imię"))
            ->add("email", "email", array("label" => "email"))
            ->add("message", "textarea", array("label" => "Wiadomość"))
            ->add("save", "submit", array("label" => "Zapisz"));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'Eduweb\TrainingBundle\Entity\Contact'));
    }
}
