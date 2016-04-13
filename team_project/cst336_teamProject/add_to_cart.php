<?php
session_start();

include 'head.php'; 
 
// get the product id
$songsID = isset($_GET['songsID']) ? $_GET['songsID'] : "";
$title = isset($_GET['title']) ? $_GET['title'] : "";
 
/*
 * check if the 'cart' session array was created
 * if it is NOT, create the 'cart' session array
 */
if(!isset($_SESSION['cart_items'])){
    $_SESSION['cart_items'] = array();
}
 
// check if the item is in the array, if it is, do not add
if(array_key_exists($songsID, $_SESSION['cart_items'])){
    // redirect to product list and tell the user it was added to cart
    header('Location: index.php?action=exists&songsID' . $songsID . '&title=' . $title);
}
 
// else, add the item to the array
else{
    $_SESSION['cart_items'][$songsID]=$title;
 
    // redirect to product list and tell the user it was added to cart
    header('Location: index.php?action=added&songsID'. $songsID . '&title=' . $title);
}
?>