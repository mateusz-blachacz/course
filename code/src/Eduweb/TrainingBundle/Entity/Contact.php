<?php

namespace Eduweb\TrainingBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
    /**
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @Assert\NotBlank
     * @Assert\Email
     */
    private $email;

    private $message;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return Contact
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    public function save($savePath)
    {
        $paramsNames = array('name', 'email', 'message');
        $formData = array();
        foreach ($paramsNames as $name) {
            $formData[$name] = $this->$name;
        }
        $randVal = rand(1000, 9999);
        $dataFileName = sprintf('data_%d.txt', $randVal);

        file_put_contents($savePath.$dataFileName, print_r($formData, TRUE));
    }
}
