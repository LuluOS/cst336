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

function getProductType()
{
  global $conn;
  
  $sql = "SELECT * FROM ProductType";
  
  $records = getDataBySQL($sql);
  
  echo "<select name=\"productTypeId\">";
  // echo "<option selected disabled hidden value = \"\"></option>";
  foreach ($records as $record)
  {
    echo "<option value=\"" .$record['productTypeId']. "\">" .$record['productType']. "</option>";
  }
  echo "</select>";
}

if (isset($_GET['updateForm']))
{  //admin submitted the Update Form

    $sql = "UPDATE Product
            SET productTypeId = :productTypeId,
            productName = :productName,
            productDesc = :productDesc,
            price = :price,
            calories = :calories,
            healthyChoice = :healthyChoice
            WHERE productId = :productId";
    
    $namedParameters = array();
    $namedParameters[':productId'] = $_GET['productId'];
    $namedParameters[':productTypeId'] = $_GET['productTypeId'];
    $namedParameters[':productName'] = $_GET['productName'];
    $namedParameters[':productDesc'] = $_GET['productDesc'];
    $namedParameters[':price'] = $_GET['price'];
    $namedParameters[':calories'] = $_GET['calories'];
    $namedParameters[':healthyChoice'] = $_GET['healthyChoice'];
    
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);   
    
    echo "Record has been updated!";
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

  <title>updateProduct</title>
  <link rel="stylesheet" type="text/css" href="../../includes/style.css">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
    <div class="container">
      <div class="content">
        <header>
          <h1>Update Product</h1>
        </header>
        
        <?php
          $product = getProductById();
        ?>

        <form>
            
            Category: <?= getProductType() ?> <br>
            Product Name: <input type="text" name="productName" /> <br />
            Description: <br>
              <textarea rows="4" cols="20" name="productDesc"></textarea><br />
            Price: <input type="text" name="price" /> <br />
            Calories: <input type="text" name="calories" /> <br />
            Healthy Choice:
            <select name="healthyChoice">
              <option selected disabled hidden value = ''></option>
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
            <br>
            <input type="hidden" name="productId" value="<?=$product['productId']?>" />
            
            <input type="submit" value="Update Product" name="updateForm" />
            
        </form>

      </div>

    <footer>
    </footer>
  </div>
</body>
</html>
