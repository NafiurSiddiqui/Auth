<?php

//This makes sure, we can not manually get to these pages. (e.g - typing in the URL)

class Signup extends Dbh
{

    //check of recreation of data
    private $sql = 'SELECT user_name FROM users WHERE user_name = ? OR user_email = ?;';

    protected function setUser($name, $email, $pass)
    {

        $stmt = $this->connect()->prepare('INSERT INTO users (user_name, user_email, user_pass) VALUES (?, ?, ?)');

        //HASH THE PASS
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($name, $email, $hashedPass))) {
            //if this fails, close the conn

            $stmt = null;
            header("location:../index.php?error=statmentfailed");
            exit(); //exit the entire script
        }

        //Close the conn

        $stmt = null;

    }

    protected function checkUser($name, $email)
    {
        $stmt = $this->connect()->prepare($this->sql);

        //execute is a predefined method that for PDO
        //checks for conenction
        if (!$stmt->execute(array($name, $email))) {
            //if this fails, close the conn

            $stmt = null;
            header("location:../index.php?error=statmentfailed");
            exit(); //exit the entire script
        }

        $result = false;

        if ($stmt->rowCount() > 0) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}
