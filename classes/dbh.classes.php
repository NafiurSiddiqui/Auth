<?php

class Dbh
{

    protected function connect()
    {

        try {

            $username = "root";
            $password = ""; //For default Xampp we don't need pass, root is enough
            $dbh = new PDO('mysql:host=localhost;dbname=php_dev', $username, $password);
            return $dbh;

        } catch (PDOException $e) {
            echo "Error! " . $e->getMessage() . "<br>";

            die(); //Kill the connection

        }
    }
}
