<?php
class Querybuilder{
    function __construct(protected $connect){
    }
    function contentdisplay($table){
        $displaypreparedquery=$this->connect->prepare("SELECT * FROM {$table}");
        $displaypreparedquery->execute();
        return $displaypreparedquery->fetchAll(PDO::FETCH_ASSOC);
    }
    function delete($table,$id){
        $deletepreparedquery=$this->connect->prepare("DELETE FROM {$table} WHERE id={$id}");
        $deletepreparedquery->execute();
        header("location:index.php?info=deleted");

    }
    function readmore($table,$id){
        $readmorepreparedquery=$this->connect->prepare("SELECT * FROM {$table} WHERE id={$id}");
        $readmorepreparedquery->execute();
        return $readmorepreparedquery->fetchAll(PDO::FETCH_ASSOC);
    }
    function displaycontenttoupdate($table,$id){
        $displaycontenttoupdatepreparedquery=$this->connect->prepare("SELECT * FROM {$table} WHERE id={$id}");
        $displaycontenttoupdatepreparedquery->execute();
        return $displaycontenttoupdatepreparedquery->fetchAll(PDO::FETCH_ASSOC);
    }
    function updatedata($table,$id,$title,$content){
        $updatedatapreparedquery=$this->connect->prepare("UPDATE {$table} SET Title='$title', Content='$content'WHERE id={$id}");
        $updatedatapreparedquery->execute();
        header("location:index.php?info=updated");

    }
    function addpost($table,$title,$content){
        $addpostpreparedquery=$this->connect->prepare("INSERT INTO {$table} (Title, Content) VALUES ('$title','$content')");
        $addpostpreparedquery->execute();
        header("location:index.php?info=added");
    }
    function addcomment($table,$postId,$name,$comment){
        $commentpreparedquery=$this->connect->prepare("INSERT INTO {$table} (post_id,Name, Comment) VALUES ('$postId','$name','$comment')");
        $commentpreparedquery->execute();
        return header("location:index.php?info=commentadded");


    }   
        function listcomments(int $id){
        $queries=$this->connect->prepare("SELECT * FROM comment WHERE post_id=$id");
        $queries->execute();
        return $queries->fetchAll(PDO::FETCH_ASSOC);

            }
}
?>