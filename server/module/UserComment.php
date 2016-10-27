<?php
class UserComment{

    public static function isLogin(){
        return isset($_COOKIE['user']);
    }

    public static function login(){
        if(isset($_POST['user'])){
            if(trim($_POST['user']) != ''){
                setcookie('user', $_POST['user']);
                $_COOKIE['user'] = $_POST['user'];
                return true;
            }
        }
        if(isset($_POST['anonymous']) && $_POST['anonymous'] == 'on' && Config::ALLOW_ANONYMOUS){
            setcookie('user', 'ANONYMOUS');
            $_COOKIE['user'] = 'ANONYMOUS';
            return true;
        }
        return false;
    }

    public static function processRequest(){
        if(isset($_POST['comment'])){
            $user = isset($_COOKIE['user']) ? $_COOKIE['user'] : "ANONYMOUS";
            $type = isset($_POST['type']) ? $_POST['type'] : 0;
            $color = isset($_POST['color']) ? "#{$_POST['color']}" : "#FFFFFF";
            self::addComment($user, $type, $color, $_POST['comment']);
        }
    }

    public static function getRecentComment(){
        $mysql = Database::getInstance();
        $result = $mysql->query([
             "SELECT * FROM allowed ORDER BY id DESC LIMIT 10"
        ]);
        if(isset($result[0]) && is_array($result[0])){
            $return = "";
            foreach($result[0] as $comment){
                $return .= '<div class="card"><div class="card-main"><div class="card-inner"><p>' . htmlspecialchars($comment['comment']) . '</p></div></div></div>';
            }
            return $return;
        }
        return ;
    }

    private static function addComment($user, $type, $color, $comment){
        $user = $user == "ANONYMOUS" ? '' : $user;
        $mysql = Database::getInstance();
        if($type != 1 && $type != 0){
            $type = 0;
        }
        if(!preg_match('/#([\da-f]{3}){1,2}/i', $color) or strlen($color) !== 7){
            $color = "#FFFFFF";
        }
        if(trim($comment) == null){
            return ;
        }
        $process = Database::process([$user, $type, $color, $comment]);
        $user = $process[0];
        $type = $process[1];
        $color = strip_tags($process[2]);
        $comment = $process[3];
        if(Config::PASSTHROUGH){
            $mysql->query([
                "INSERT INTO allowed (user, type, color, comment) VALUES ('$user', '$type', '$color', '$comment')"
            ]);
        }else{
            $mysql->query([
                "INSERT INTO comment (user, type, color, comment) VALUES ('$user', '$type', '$color', '$comment')"
            ]);
        }
    }

}