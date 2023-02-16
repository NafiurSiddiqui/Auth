<?php

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
        
       if ($this->inputsAreEmpty()) {
        $this->emptyInputs = " ⚠️ Please provide your name and pass";
    } else {
        // check for empty name
        if ($this->nameIsEmpty()) {
            $this->emptyName = "⚠️ Name is required. ";
        }
        // check for empty pass
        if ($this->loginPassIsEmpty()) {
            $this->emptyPass = "⚠️ Password is required ";
        }
    }

    if(!empty($this->name) || !empty($this->pass) || !empty($this->emptyInputs)){
        header('location:../index.php?error=emptyInputs'. urlencode($this->emptyInputs) . "&emptyName=". urlencode($this->emptyName ). "&emptyPass=". urlencode($this->emptyPass) );
        exit();
    }


        

        $this->getUser($this->name, $this->pass);

    }

    //validate for empty inputs
    protected function inputsAreEmpty()
    {

        if (
            empty($this->name) &&
            empty($this->pass)

        ) {
            $emptyInputs = true;
        } else {
            $emptyInputs = false;
        }

        return $emptyInputs;
    }

    protected function nameIsEmpty(){

     return $nameIsEmpty = empty($this->name) ? true: false ;

   
    }

    protected function loginPassIsEmpty(){
     
        return $loginPassEmpty = empty($this->pass) ? true: false;
   
    }


}
