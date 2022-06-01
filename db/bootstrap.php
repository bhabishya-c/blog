<?php
require 'db\Querybuilder.php';
require 'db\databaseconnection.php';
return new Querybuilder(databaseconnection::connection());
?>
