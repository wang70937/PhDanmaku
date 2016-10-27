<?php
include "config.php";
include "utils/Database.php";
Database::init();
$mysql = Database::getInstance();
$result = $mysql->query([
    "SELECT * FROM allowed ORDER BY id DESC LIMIT 20"
]);

$recent = '';
if(isset($result[0]) and is_array($result[0])){
    foreach($result[0] as $comment){
        $recent .= '<div class="card"><aside class="card-side pull-left"><span class="card-heading">></i></span></aside><div class="card-main"><div class="card-inner"><p class="card-heading">'. htmlspecialchars($comment['comment']).'</p></div></div></div>';
    }
}

include "static/coboard.php";
