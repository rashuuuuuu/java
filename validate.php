<?php
require "login.php";
require "signup.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
if(isset($_POST['email']&&$_POST['pass'])&& !empty($_POST['email']&&$_POST['pass'])){
    if($_POST['email']==$email && $_POST['pass']==$pass){
        header('location:front.php');
    }
    else{
        header('location:signup.php');
    }
}}