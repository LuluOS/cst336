<?php
session_start();

include 'head.php'; 
 
// get the product id
$songsID = isset($_GET['songsID']) ? $_GET['songsID'] : "";
$title = isset($_GET['title']) ? $_GET['title'] : "";
 
// remove the item from the array
unset($_SESSION['cart_items'][$songsID]);
 
// redirect to product list and tell the user it was added to cart
header('Location: cart.php?action=removed&songsID=' . $songsID . '&title=' . $title);
?>