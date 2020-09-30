<?php

namespace Eduweb\TrainingBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

class Register
{
    /**
     * @Assert\NotBlank
     * @Assert\Regex(pattern = "/^[a-zA-Z]+ [a-zA-Z]+$/", message = "Musisz podac imie i nazwisko")
     */
    private $name;

    /**
     * @Assert\NotBlank
     * @Assert\Email
     */
    private $email;
    private $sex;

    /**
     * @Assert\Date
     */
    private $birthdate;

    /**
     * @Assert\NotBlank
     */
    private $country;

    /**
     * @Assert\NotBlank
     */
    private $course;

    /**
     * @Assert\NotBlank
     * @Assert\Count(min = 2)
     */
    private $invest;
    private $comments;
    /**
     * @Assert\File(maxSize = "4M", mimeTypes = {"application/pdf", "appliacation/x-pdf"}, mimeTypesMessage = "Potwierdzenie przelewu musi byc w formacie pdf"))
     */
    private $paymentFile;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Register
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
     * @return Register
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     * @return Register
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param mixed $birthdate
     * @return Register
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     * @return Register
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     * @return Register
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvest()
    {
        return $this->invest;
    }

    /**
     * @param mixed $invest
     * @return Register
     */
    public function setInvest($invest)
    {
        $this->invest = $invest;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     * @return Register
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentFile()
    {
        return $this->paymentFile;
    }

    /**
     * @param mixed $paymentFile
     * @return Register
     */
    public function setPaymentFile($paymentFile)
    {
        $this->paymentFile = $paymentFile;

        return $this;
    }

    public function save($savePath){

        $paramsNames = array('name', 'email', 'birthdate', 'country', 'course', 'invest', 'comments');
        $formData =array();
        foreach($paramsNames as $name){
            $formData[$name] = $this->$name;
        }
        $randVal = rand(1000,9999);
        $dataFileName = sprintf('data_%d.txt',$randVal);

        file_put_contents($savePath.$dataFileName, print_r($formData, TRUE));

        $file = $this->getPaymentFile();

        if(NULL !== $file){
            $newName = sprintf('file_%d.%s',$randVal,$file->guessExtension());
            $file->move($savePath,$newName);
        }
    }
}
