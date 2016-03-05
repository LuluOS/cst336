<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        The name passed from the first page is <?= $_SESSION["name"] ?> 
    </body>
</html>