<?php
    function insertSubject($title,$content,$tags){
        global $connect;
        $sql = "INSERT INTO sujets(title,content,tags) VALUES ('$title','$content','$tags')";
        $prepare = $connect->prepare($sql);
        $result = $prepare->execute();

        if($result){
            return true;
        }else {
            return false;
        }
    }

    function getAllSubjects(){
        global $connect;
        $sql = "SELECT * FROM sujets";
        $prepare = $connect->prepare($sql);
        $prepare->execute();
        $result = $prepare->fetchAll();

        if($result){
            return $result;
        }else {
            return false;
        }
    }