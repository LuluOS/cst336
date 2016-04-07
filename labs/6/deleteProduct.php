<?php

include '../../includes/database.php';

$conn = getDatabaseConnection('ASGMT4');

function getProductById()
{
  global $conn;
  $sql = "SELECT * FROM Product WHERE productId = :productId";
  $namedParameters = array();
  $namedParameters[':productId'] = $_GET['productId'];
  $statement = $conn->prepare($sql);    
  $statement->execute($namedParameters);
  $record = $statement->fetch();
  return $record;
}

if (isset($_GET['deleteForm']))
{  //admin submitted form to add product
    
    $sql = "DELETE FROM Product WHERE productId = :productId";

    $namedParameters = array();
    $namedParameters[':productId'] = $_GET['productId'];
     
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);   
    
    echo "<br>";
    echo "Record has been Deleted!<br>";
    echo "<input type=button onClick=\"location.href='products.php'\" value='Home'>";
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
           Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <title>deleteProduct</title>
        <link rel="stylesheet" type="text/css" href="../../includes/style.css">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        
        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        
        <script>
            function confirmDelete(productName)
            {
                return confirm("Do you really want to delete " + productName + "?");
            }
        </script>
    </head>
    <body>
    <div class="container">
      <div class="content">    
        <header>
            <h1>Delete Product</h1>
        </header>
            <?php $product = getProductById() ?>
            <?php echo $product['productName'] ?>
            <?php echo $product['productId'] ?>
            <br>
            <br>
            
            <div>
                <form action="deleteProduct.php" onsubmit="return confirmDelete('<?= $product['productName'] ?>')">
                    <input type="hidden" name="productId" value="<?= $product['productId'] ?>"/>
                    <input type="submit" value="Delete" name="deleteForm" />
                </form>
            </div>
        </div>
    </div>
    </body>
</html>