<?php
class ClientManager{

    const REGISTER = 'register';

    public static function registerClient(){
        if(isset($_GET['action']) && isset($_GET['cid'])){
            $cid = $_GET['cid'];
            if(!is_numeric($cid)){
                return ;
            }
            $mysql = Database::getInstance();
            $mysql->query([
                "INSERT INTO client (cid, history) VALUES ('$cid', '0')"
            ]);
            echo "success";
            exit(0);
        }
    }

    public static function getDanmaku(){
        if(isset($_GET['cid'])){
            $cid = $_GET['cid'];
            if(!is_numeric($cid)){
                return ;
            }
            $mysql = Database::getInstance();
            $result = $mysql->query([
                "SELECT * FROM client WHERE cid = '$cid'"
            ]);
            if(isset($result[0][0]['cid']) && $result[0][0]['cid'] == $cid){
                $history = $result[0][0]['history'];
                $result = $mysql->query([
                    "SELECT * FROM allowed WHERE id > $history"
                ]);
                $return = [
                    0 => 0,
                ];
                if(isset($result[0])){
                    foreach($result[0] as $comment){
                        $return []= [(int)$comment['type'], $comment['color'], Config::DANMAKU_SIZE, $comment['comment']];
                    }
                    $history = end($result[0])['id'];
                    $mysql->query([
                        "UPDATE client SET history = '$history' WHERE cid = '$cid'"
                    ]);
                    $return[0] = count($return) - 1;
                }
                echo json_encode($return);
            }else{
                echo "error";
            }
        }
    }

}