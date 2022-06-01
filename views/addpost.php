<?php
require 'style and responsive\responsive.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Add post</title>
    <link rel="stylesheet" href="style and responsive/style.css">
</head>
<body>
    <h1> Welcome to Add post page</h1>
    <div class="parent">
            <div class="div1"> </div>
            <div class="div2">
                <form action="addpostquery" method="post"> 
            <p>Title</p>
        <input type="text" class="textfield form-control" name="title" placeholder="Blog title" required>
        <p>Content</p>
        <textarea name="content" class="textfield form-control" rows="8" cols="40"  placeholder="Write your blog content here..."  required></textarea><br><br>
        <button name="submit" class="two btn btn-primary">Add post</button>
</form>
</div>
</div>
</body>
</html>