<?php
class AdminPanel{

    public static function getCheckList(){
        $mysql = Database::getInstance();
        $result = $mysql->query([
             "SELECT * FROM comment LIMIT 8",
             "SELECT count(id) FROM comment"
        ]);
        $return = [$result[1][0]['count(id)'], []];
        if(isset($result[0])){
            for($i = 0; $i < count($result[0]); $i++){
                $comment = $result[0][$i];
                $return[1][$i] = [$comment['id'], htmlspecialchars($comment['comment'])];
            }
        }
        echo json_encode($return);
    }

    public static function allowComment(){
        if(isset($_GET['allow'])){
            $allow = $_GET['allow'];
            if(!is_numeric($allow)){
                return ;
            }
            $mysql = Database::getInstance();
            $comment = $mysql->query([
                "SELECT * FROM comment WHERE id = $allow",
                "DELETE FROM comment WHERE id = $allow"
            ]);
            if(!isset($comment[0][0]['comment'])){
                return ;
            }
            $user = $comment[0][0]['user'];
            $type = $comment[0][0]['type'];
            $color = $comment[0][0]['color'];
            $comment = $comment[0][0]['comment'];
            $process = Database::process([$user, $type, $color, $comment]);
            $user = $process[0];
            $type = $process[1];
            $color = $process[2];
            $comment = $process[3];
            $mysql->query([
                "INSERT INTO allowed (user, type, color, comment) VALUES ('$user', '$type', '$color', '$comment')"
            ]);
            exit(0);
        }
    }

    public static function deleteComment(){
        if(isset($_GET['delete'])){
            $delete = $_GET['delete'];
            if(!is_numeric($delete)){
                return ;
            }
            $mysql = Database::getInstance();
            $mysql->query([
                "DELETE FROM comment WHERE id = $delete"
            ]);
            exit(0);
        }
    }

}