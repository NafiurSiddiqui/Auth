<?php

class LoginController extends login
{
    private $name;
    private $pass;

    //construct
    public function __construct($name, $pass)
    {
        $this->name = $name;
        $this->pass = $pass;

    }

    //throw error

    public function loginUser()
    {

        //empty input
        if ($this->emptyInput() == false) {

            header("location:../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->name, $this->pass);

    }

    //validate for empty inputs
    private function emptyInput()
    {

        if (
            empty($this->name) ||
            empty($this->pass)

        ) {
            $validation = false;
        } else {
            $validation = true;
        }

        return $validation;
    }

}
