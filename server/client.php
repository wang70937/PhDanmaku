<?php
include "config.php";
include "utils/Database.php";
include "module/ClientManager.php";

Database::init();
ClientManager::registerClient();
ClientManager::getDanmaku();
//boluoshala nuan tie 50 pian xiao hao fang pen fen
