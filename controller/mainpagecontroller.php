
<!DOCTYPE html>
    <html>
<head>
<link rel="stylesheet" href="style and responsive\style.css">
</head>
<body>
    <?php if (isset($_GET['info'])){?>
       <?php if($_GET['info']=="added"){
           echo"<script>alert('Post has been added sucessfully')</script>";
       }
       elseif($_GET['info']=="deleted"){
        echo"<script>alert('Post has been deleted sucessfully')</script>";
    }
    elseif($_GET['info']=="updated"){
        echo"<script>alert('Post has been updated sucessfully')</script>";
    }  
     elseif($_GET['info']=="commentadded"){
        echo"<script>alert('Comment has been added sucessfully')</script>";
    }
    else{
        echo "Failed";
    }
    ?>
<?php }?>
    <h1>Welcome to blogging site main page</h1>
    <a href="/addpost"><button class="one two btn btn-primary" >Create post</button></a>
    <br></br>
</body>
</html>
<?php
require 'style and responsive\responsive.php';
require 'query/Contentdisplayquery.php';

?>