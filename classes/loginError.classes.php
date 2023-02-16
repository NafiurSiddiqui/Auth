<?php

  require "./classes/login_controller.classes.php";

 class LoginError extends LoginController{

    public function warnEmptyInputs(){

       echo  $this->emptyInput() == true? "Please provide your name and password": null;
    }
 }