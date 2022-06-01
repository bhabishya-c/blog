<?php

// First, let's define our list of routes.
// We could put this in a different file and include it in order to separate
// logic and configuration.
$router->define([
    ''=>'controller/mainpagecontroller.php',
    'addpost'=>'controller/addpostcontroller.php',
    'commentquery'=>'controller/commentcontroller.php',
    'addpostquery'=>'controller/addpostquerycontroller.php',
    'updatepost'=>'controller/updatepostcontroller.php',
    'updatepostquery'=>'controller/updatepostquerycontroller.php',
    'readmore'=>'controller/readmorepostcontroller.php',
    'delete'=>'controller/deletepostcontroller.php',
    'index.php?info=added'=>'controller/mainpagecontroller.php',
    'index.php?info=updated'=>'controller/mainpagecontroller.php',
    'index.php?info=deleted'=>'controller/mainpagecontroller.php',
    'index.php?info=commentadded'=>'controller/mainpagecontroller.php'


]);



/*
// This is our router.
function router($routes)
{
    // Iterate through a given list of routes.
    foreach ($routes as $path => $content) {
        if ($path == $_SERVER['REQUEST_URI']) {
            // If the path matches, redirect to its content page.
           return header("Location:$content");

        }
    }

    echo"Sorry!";
}

// Execute the router with our list of routes.
router($routes);
?>
*/