<?php
$add=require 'db\bootstrap.php';
$adddata=$add->addpost('posts',$_POST['title'],$_POST['content']);
?>
