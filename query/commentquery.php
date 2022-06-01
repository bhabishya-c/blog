<?php
$comment=require 'db\bootstrap.php';
$commentata=$comment->addcomment('comment',$_POST['postId'],$_POST['name'],$_POST['comment']);
?>
