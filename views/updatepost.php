<?php
include 'style and responsive\responsive.php';
$display=require 'db\bootstrap.php';
$displaydata=$display->displaycontenttoupdate('posts',$_POST['id']);
?>

<link rel="stylesheet" href="style and responsive/style.css">

<h1>Update post</h1>
    <div class="parent">
            <div class="div1"> </div>
            <div class="div2">
                <form action="updatepostquery" method="post"> 
                    <?php foreach($displaydata as $d){?>
                <input type="hidden" class="textfield form-control" name="id" value=<?php echo $d['id']?>>
            <p>Title</p>
        <input type="text" class="textfield form-control" name="title" placeholder="Blog title" required value=<?php echo $d['Title']?> >
        <p>Content</p>
        <textarea name="content" class="textfield form-control" rows="8" cols="40"  placeholder="Write your blog content here..."  required><?php echo $d['Content']?></textarea><br><br>
        <button name="submit" class="two btn btn-primary">Update post</button>
</form>
<?php }?>
            </div>
</div>
