<?php
require 'style and responsive\responsive.php';
$display=require 'db\bootstrap.php';
$readmoredata=$display->readmore('posts',$_POST['id']);
$commentdisplay=$display->listcomments($_POST['id']);
?>

<link rel="stylesheet" href="style and responsive/style.css">
<?php foreach($readmoredata as $r){?>
<div class="container p-5 my-5 bg-dark text-white">
    <h1><?php echo $r['Title'];?></h1>
    </div>
    <h2><?php echo $r['Content'];?></h2><br>
    <form action="updatepost" method='POST'>
    <input type="hidden" name="id" value="<?php  echo $r['id'];?>">
  <button class="btn btn-primary">Update</button>
</form>
<form class="deletebutton"action="delete" method='POST'>
    <input type="hidden" name="id" value="<?php echo $r['id'];?>">
  <button class="btn btn-danger">Delete</button>
</form>
<br>
<h5 style="margin-left:5px;">All comments</h5>
<?php foreach($commentdisplay as $d){?>
  <div class="card">
  <div class="card-body">
    <h6><?php echo $d['Name'];?></h6>
    <h8><?php echo $d['Comment'];?></h8>
</div>
</div>
<?php }?>
    <br><br><br>
    <div class="container p-5 my-5 border">
      <form action="commentquery" method="post">
    <h3> Leave a comment</h3>
    <input type="hidden" name="postId", value="<?php echo $r['id']?>">
    <p>Name:</p>
    <input type="text" class="textfield form-control" name="name" placeholder="Write your name here.." required>
    <p>Comment:</p>
    <textarea name="comment" placeholder="Write your comment here...."  class="textfield form-control" rows="4" cols="50"></textarea><br>
    <button name="submit" class="two btn btn-primary">Post comment</button>
</form>

    </div>
    <?php }?>

  <?php

  ?>

   