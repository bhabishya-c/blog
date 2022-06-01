<?php
require 'style and responsive\responsive.php';
$display=require 'db\bootstrap.php';
$fetcheddata=$display->contentdisplay('posts');
?>

<?php foreach($fetcheddata as $data){ ?>
    <div class='container'>
    <h1><?php echo $data['Title'] ?></h1>
    <h2><?php echo $data['Content'] ?></h2>
    <form action="readmore" method='post'>
    <input type="hidden" name="id" value="<?php echo $data['id'];?>">
  <button class="two">Readmore</button>
</form>

    </div></br>
    <?php }?>
