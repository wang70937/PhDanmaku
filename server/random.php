<?php
include "config.php";
include "utils/Database.php";
Database::init();
$mysql = Database::getInstance();
$result = $mysql->query([
    "SELECT count(id) FROM allowed WHERE user != ''"
]);
$id = mt_rand(0, $result[0][0]['count(id)'] - 1);
$result = $mysql->query([
    "SELECT * FROM allowed WHERE user != '' ORDER BY id DESC LIMIT $id, 1"
]);

if(isset($result[0][0])){
    $select = $result[0][0];
    $select = '<div class="card"><div class="card-main"><div class="card-header"><div class="card-header-side pull-left"><h1>></h1></div><div class="card-inner"><h1>'. $select['user'] . '</h1></div></div><div class="card-inner"><h3>'. $select['comment'] . '</h3></div></div></div>';
}else{
    $select = '';
}
include "static/randomboard.php";
