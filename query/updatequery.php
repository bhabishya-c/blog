<?php
require 'style and responsive\responsive.php';
$display=require 'db\bootstrap.php';
$display->updatedata('posts',$_POST['id'],$_POST['title'],$_POST['content']);
?>