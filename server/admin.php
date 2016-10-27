<?php
include "config.php";
include "utils/Database.php";
include "module/AdminPanel.php";
Database::init();
if(isset($_GET['key']) && $_GET['key'] == Config::ADMIN_PASSWORD){
    AdminPanel::deleteComment();
    AdminPanel::allowComment();
    AdminPanel::getCheckList();
    exit();
}
if(isset($_POST['password']) && $_POST['password'] == Config::ADMIN_PASSWORD){
    setcookie('key', $_POST['password']);
    $_COOKIE['key'] = $_POST['password'];
}
if(!isset($_COOKIE['key']) || $_COOKIE['key'] != Config::ADMIN_PASSWORD){
    include "static/adminlogin.php";
}else{
    include "static/adminpanel.php";
}
