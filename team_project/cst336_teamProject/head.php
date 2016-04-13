<?php
include 'dbConn.php'; 

$connection = dbConnect();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Music Store</title>
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
        <link rel="stylesheet" type="css" href="css/main.css">
    </head>
    <body>
        <div class="container">
            <div class="header clearfix">
                <nav>
                  <ul class="nav nav-pills pull-right">
                    <li role="presentation" class="active"><a href="index.php">Home</a></li>
                    <li role="presentation">
                        <a href="cart.php">
                            <?php
                            // count products in cart
                            $cart_count=count($_SESSION['cart_items']);
                            ?>
                            Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                        </a>
                    </li>
                  </ul>
                </nav>
                <h3 class="text-muted">Music Store</h3>
            </div>