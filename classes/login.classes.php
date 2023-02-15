<?php

//This makes sure, we can not manually get to these pages. (e.g - typing in the URL)

class Login extends Dbh
{

    //check of recreation of data

    private $loginData;

    protected function getUser($name, $pass)
    {

        $stmt = $this->connect()->prepare('SELECT user_pass FROM users WHERE user_name=? OR user_email= ?');

        if (!$stmt->execute(array($name, $pass))) {
            //if this fails, close the conn

            $stmt = null;
            header("location:../index.php?error=statmentfailed");
            exit(); //exit the entire script
        }

        $this->loginData = $stmt->fetchAll(PDO::FETCH_ASSOC); //Param,  we say how we want the data to be returned.

        if (count($this->loginData) == 0) {
            $stmt = null;
            header("location:login.php?error=usernotfound");
            exit();
        }

        $checkPass = password_verify($pass, $this->loginData[0]['user_pass']);

        if ($checkPass == false) {
            $stmt = null;
            header('location:../index.php?error=wrongPassword');
            exit();
        } elseif ($checkPass == true) {

            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE user_name = ? OR user_email = ? AND user_pass = ?;');

            if (!$stmt->execute(array($name, $name, $pass))) {
                //if this fails, close the conn

                $stmt = null;
                header("location:../index.php?error=statmentfailed");
                exit(); //exit the entire script
            }

            //check for empty rows

            if (count($this->loginData) == 0) {

                $stmt = null;
                header('location:../index.php?error=noUsers');
                exit();
            }

            session_start();

            $_SESSION["userid"] = $this->loginData[0]["user_id"];
            $_SESSION["username"] = $this->loginData[0]["user_name"];

            $stmt = null;
        }

        //Close the conn
        $stmt = null;

    }

}
