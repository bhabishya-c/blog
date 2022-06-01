
<?php
require 'style and responsive\responsive.php';
$display=require 'db\bootstrap.php';
$deletedata=$display->delete('posts',$_POST['id']);
?>