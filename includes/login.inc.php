<?php

if (isset($_POST["submit"])) {

	//get the data
	$name = $_POST["name"];
	$pass = $_POST["pass"];

	//instantiat signup controller

	include '../classes/dbh.classes.php';
	include '../classes/login.classes.php';
	include '../classes/login_controller.classes.php';

	$login = new loginController($name, $pass);

	//Error handler
	$login->loginUser();

	//send to home

	header('location:../index.php?message=loginSuccessful');
}
