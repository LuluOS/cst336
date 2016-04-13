<?php
session_start();

include 'head.php'; 

global $connection;

$title = isset($_GET['title']) ? $_GET['title'] : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";
 
if($action=='removed'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$title}</strong> was removed from your cart!";
    echo "</div>";
}

//var_dump($_SESSION['cart_items']);

if(count($_SESSION['cart_items']) > 0){

    // get the product ids
    $songsIDs = "";
    foreach($_SESSION['cart_items'] as $songsID=>$value){
        $songsIDs = $songsIDs . $songsID . ",";
    }
 
    // remove the last comma
    $songsIDs = rtrim($songsIDs, ',');
 
    //start table
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
        // our table heading
        echo "<tr>";
            echo "<th class='textAlignLeft'>Product Name</th>";
            echo "<th>Price (USD)</th>";
            echo "<th>Action</th>";
        echo "</tr>";
 
        $query = "SELECT songsID, title FROM Songs WHERE songsID IN ({$songsIDs}) ORDER BY title";
 
        $stmt = $connection->prepare( $query );
        $stmt->execute();
 
        $total_price=0;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
 
            echo "<tr>";
                echo "<td>{$title}</td>";
                echo "<td>0.99 &#162;</td>";
                echo "<td>";
                    echo "<a href='remove_from_cart.php?songsID={$songsID}&title={$title}' class='btn btn-danger'>";
                        echo "<span class='glyphicon glyphicon-remove'></span> Remove from cart";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
 
            $total_price += 0.99;
        }
 
        echo "<tr>";
                echo "<td><b>Total</b></td>";
                echo "<td>&#36;{$total_price}</td>";
                echo "<td>";
                    echo "<a href='#' class='btn btn-success'>";
                        echo "<span class='glyphicon glyphicon-shopping-cart'></span> Checkout";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
 
    echo "</table>";
}
 
else{
    echo "<div class='alert alert-danger'>";
        echo "<strong>No products found</strong> in your cart!";
    echo "</div>";
}
 
?>
        </div>
    </body>
</html>