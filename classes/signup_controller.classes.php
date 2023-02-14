<?php

class SignupController
{

    private $name;
    private $email;
    private $pass;
    private $repass;

    //construct
    public function __construct($name, $email, $pass, $repass)
    {
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
        $this->repass = $repass;
    }

    //validate for empty inputs

    private function validate()
    {

        if (
            empty($this->name) ||
            empty($this->email) ||
            empty($this->pass) ||
            empty($this->repass)
        ) {
            $validation = false;
        } else {
            $validation = true;
        }

        return $validation;
    }

    private function nameValidation()
    {
        //some regExp
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->name)) {

            $nameIsValid = false;
        } else {
            $this->name = filter_input($_POST["name"], FILTER_SANITIZE_SPECIAL_CHARS);
            $nameIsValid = true;
        }

        return $nameIsValid;

    }

    private function emailValidation()
    {

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {

            $emailIsValid = false;

        } else {
            $this->email = filter_input($_POST["email"], FILTER_SANITIZE_EMAIL);
            $emailIsValid = true;
        }

        return $emailIsValid;

    }

    private function repassValidation()
    {

        if ($this->pass !== $this->repass) {
            $repassMatched = false;
        } else {
            $repassMatched = true;
        }

    }

}
