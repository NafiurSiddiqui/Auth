<?php

require './classes/login.classes.php';

class LoginController extends login
{
    private $name;
    private $pass;
    public $emptyInputs = "";
    public $emptyName = "";
    public $emptyPass = "";

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
        if (!$this->emptyInput()) {

            header("location:../index.php?error=emptyinputs");
            
            $this->emptyInputs= " ⚠️ Please provide your name and pass ⚠️";
            exit();

        }

         //empty name
        if (!$this->nameIsEmpty()) {

            header("location:../index.php?error=emptyNames");
            
            $this->emptyName = "⚠️ Please provide your name. ⚠️";
            exit();

        }
        //empty pass
        if (!$this->nameIsEmpty()) {

            header("location:../index.php?error=emptyNames");
            
            $this->emptyName = "⚠️ Please provide your pass. ⚠️";
            exit();

        }

        

        $this->getUser($this->name, $this->pass);

    }

    //validate for empty inputs
    protected function emptyInput()
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

    protected function nameIsEmpty(){

     return $nameIsEmpty = empty($this->name) ? true: false ;

   
    }

    protected function loginPassIsEmpty(){
     
        return $loginPassEmpty = empty($this->pass) ? true: false;
   
    }


}
