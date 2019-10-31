<?php
include"template/header.php";
include"template/footer.php";
include"template/footer.php";


if(isset($_POST) && !empty($_POST))  {
    if(isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["surname"])) {
    $_SESSION["username"]=$_POST["username"];
    } else {
    header ("Location:admin.php");
    exit();
    };
};

if(isset($_POST) && !empty($_POST))  {
    if(isset($_POST["checkbox"]) && !empty($_POST["checkbox"]) && isset($_POST["checkbox"]) && !empty($_POST["checkbox"])) {
    $_SESSION["checkbox"]=$_POST["username"];
    } else {
    header ("Location:index.php");
    exit();
    };
};
