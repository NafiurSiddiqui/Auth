<?php

class Dbh
{

    private function connect()
    {

        try {

            $username = "root";
            $password = ""; //For default Xampp we don't need pass, root is enough
            $dbh = new PDO('mysql:host=localhost;dbname=php-oop-auth', $username, $password);
            return $dbh;

        } catch (PDOException $e) {
            echo "Error! " . $e->getMessage() . "<br>";

            die(); //Kill the connection

        }
    }
}
