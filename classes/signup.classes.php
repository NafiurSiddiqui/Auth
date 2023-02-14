<?php

//This makes sure, we can not manually get to these pages. (e.g - typing in the URL)

class Signup extends Dbh
{

    //check of recreation of data
    private $sql = 'SELECT user_name FROM users WHERE user_name = ? OR user_email = ?;';

    protected function checkUser($name, $email)
    {
        $statement = $this->connect()->prepare($this->sql);

        //execute is a predefined method that for PDO
        //checks for conenction
        if (!$statement->execute(array($name, $email))) {
            //if this fails, close the conn

            $statement = null;

            header("location:../index.php?error=statmentfailed");
            exit(); //exit the entire script
        }
    }

}
