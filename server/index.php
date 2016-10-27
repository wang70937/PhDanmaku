<?php
include "config.php";
include "utils/Database.php";
include "module/UserComment.php";

Database::init();
if(!UserComment::login() && !UserComment::isLogin()){
    include "static/login.php";
}else{
    UserComment::processRequest();
    $recent = UserComment::getRecentComment();
    include "static/comment.php";
}
