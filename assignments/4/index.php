<?php
    include('database.php');
    
    $dbConnection = getDatabaseConnection('ASGMT4');
    
    function getAllColleges()
    {
        echo "<h3>Report 1</h3>";
        echo "<strong>Show all College</strong>";

        echo "<pre> SELECT * <br> FROM `College` co </pre>";
        
        global $dbConnection;
        
        $sql = "SELECT *
                FROM `College` co";
        
        $statement = $dbConnection->prepare($sql);
        //$records = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table border=\"1\">";
     
         echo "<tr>";
        	echo "<th>College Id</th>";
        	echo "<th>College Name</th>";
         echo "</tr>";
         
         $statement->execute();
         while ($row = $statement->fetch())
         {
            echo "<tr>";
                echo "<td>";
                echo "#". $row['collegeId'];
                echo "</td>";
                
                echo "<td>";
                echo $row['collegeName'];
                echo "</td>";
                
            echo "</tr>";
         }
         echo "</table>";

    }
    
    function getAllClients()
    {
        
        echo "<h3>Report 2</h3>";
        echo "<strong>Show all Clients</strong>";

        echo "<pre> SELECT * <br> FROM `Client` c </pre>";
        
        global $dbConnection;
        
        $sql = "SELECT *
                FROM `Client` c";
        
        $statement = $dbConnection->prepare($sql);
        //$records = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table border=\"1\">";
     
         echo "<tr>";
        	echo "<th>Otter Id</th>";
        	echo "<th>First Name</th>";
        	echo "<th>Last Name</th>";
        	echo "<th>Gender</th>";
        	echo "<th>Email</th>";
        	echo "<th>Phone</th>";
        	echo "<th>Building</th>";
        	echo "<th>Office Number</th>";
         echo "</tr>";
         
         $statement->execute();
         while ($row = $statement->fetch())
         {
            echo "<tr>";
                echo "<td>";
                echo "#". $row['otterId'];
                echo "</td>";
                
                echo "<td>";
                echo $row['firstName'];
                echo "</td>";
                
                echo "<td>";
                echo $row['lastName'];
                echo "</td>";
              
                echo "<td>";
                echo $row['gender'];
                echo "</td>";
                
                echo "<td>";
                echo $row['email'];
                echo "</td>";
                
                echo "<td>";
                echo $row['phone'];
                echo "</td>";
                
                echo "<td>";
                echo $row['building'];
                echo "</td>";
                
                echo "<td>";
                echo $row['officeNumber'];
                echo "</td>";
              
            echo "</tr>";
         }
         echo "</table>";
    }
    
    function getAllOrders()
    {
        echo "<h3>Report 3</h3>";
        echo "<strong>Show all Orders</strong>";

        echo "<pre> SELECT * <br> FROM `Order` o </pre>";
        
        global $dbConnection;
        
        $sql = "SELECT *
                FROM `Order` o";
        
        $statement = $dbConnection->prepare($sql);
        //$records = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table border=\"1\">";
     
         echo "<tr>";
        	echo "<th>Order Id</th>";
        	echo "<th>Client Id</th>";
        	echo "<th>Total</th>";
        	echo "<th>Order Date</th>";
        	echo "<th>Building to Deliver</th>";
        	echo "<th>Office to Deliver</th>";
         echo "</tr>";
         
         $statement->execute();
         while ($row = $statement->fetch())
         {
            echo "<tr>";
                echo "<td>";
                echo "#". $row['orderId'];
                echo "</td>";
                
                echo "<td>";
                echo $row['clientId'];
                echo "</td>";
                
                echo "<td>";
                echo "#". $row['total'];
                echo "</td>";
                
                echo "<td>";
                echo $row['orderDate'];
                echo "</td>";
                
                echo "<td>";
                echo $row['buildingToDeliver'];
                echo "</td>";
                
                echo "<td>";
                echo $row['officeToDeliver'];
                echo "</td>";
                
            echo "</tr>";
         }
         echo "</table>";
    }
    
    function getAllProductTypes()
    {
        echo "<h3>Report 1</h3>";
        echo "<strong>Show all Product Types</strong>";

        echo "<pre> SELECT * <br> FROM `ProductType` pt </pre>";
        
        global $dbConnection;
        
        $sql = "SELECT *
                FROM `ProductType` pt";
        
        $statement = $dbConnection->prepare($sql);
        //$records = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table border=\"1\">";
     
         echo "<tr>";
        	echo "<th>Product Type Id</th>";
        	echo "<th>Product Type</th>";
         echo "</tr>";
         
         $statement->execute();
         while ($row = $statement->fetch())
         {
            echo "<tr>";
                echo "<td>";
                echo "#". $row['productTypeId'];
                echo "</td>";
                
                echo "<td>";
                echo $row['productType'];
                echo "</td>";
                
            echo "</tr>";
         }
         echo "</table>";

    }
    
    function getAllProducts()
    {
        
        echo "<h3>Report 5</h3>";
        echo "<strong>Show all Products</strong>";

        echo "<pre> SELECT * <br> FROM `Product` p </pre>";
        
        global $dbConnection;
        
        $sql = "SELECT *
                FROM `Product` p";
        
        $statement = $dbConnection->prepare($sql);
        //$records = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table border=\"1\">";
     
         echo "<tr>";
        	echo "<th>Product Id</th>";
        	echo "<th>Product Type Id</th>";
        	echo "<th>Product Name</th>";
        	echo "<th>Product Description</th>";
        	echo "<th>Price</th>";
        	echo "<th>Calories</th>";
        	echo "<th>Healthy Choice</th>";
         echo "</tr>";
         
         $statement->execute();
         while ($row = $statement->fetch())
         {
            echo "<tr>";
                echo "<td>";
                echo "#". $row['productId'];
                echo "</td>";
                
                echo "<td>";
                echo $row['productTypeId'];
                echo "</td>";
                
                echo "<td>";
                echo $row['productName'];
                echo "</td>";
                
                echo "<td>";
                echo $row['productDesc'];
                echo "</td>";
                
                echo "<td>";
                echo $row['price'];
                echo "</td>";
                
                echo "<td>";
                echo $row['calories'];
                echo "</td>";
                
                echo "<td>";
                echo $row['healthyChoice'];
                echo "</td>";
                
            echo "</tr>";
         }
         echo "</table>";
    }
    
    function getAllOrder_Product()
    {
        echo "<h3>Report 6</h3>";
        echo "<strong>Show all Order_Product</strong>";

        echo "<pre> SELECT * <br> FROM `Order_Product` op </pre>";
        
        global $dbConnection;
        
        $sql = "SELECT *
                FROM `Order_Product` op";
        
        $statement = $dbConnection->prepare($sql);
        //$records = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table border=\"1\">";
     
         echo "<tr>";
        	echo "<th>Order Id</th>";
        	echo "<th>Product Id</th>";
        	echo "<th>Quantity</th>";
        	echo "<th>Size</th>";
         echo "</tr>";
         
         $statement->execute();
         while ($row = $statement->fetch())
         {
            echo "<tr>";
                echo "<td>";
                echo "#". $row['orderId'];
                echo "</td>";
                
                echo "<td>";
                echo "#". $row['productId'];
                echo "</td>";
                
                echo "<td>";
                echo $row['qty'];
                echo "</td>";
                
                echo "<td>";
                echo $row['size'];
                echo "</td>";

            echo "</tr>";
         }
         echo "</table>";   
    }
    
    function getProducts()
    {
        echo "<h3>Report 7</h3>";
        echo "<strong>Show all the Products with the Product Type</strong>";

        echo "<pre> SELECT productId, productName <br> FROM `Product` p INNER JOIN `ProductType` pt ON p.productTypeId = pt.productTypeId </pre>";
        
        
        global $dbConnection;
        
        $sql = "SELECT productId, productName
                FROM `Product` p INNER JOIN `ProductType` pt ON p.productTypeId = pt.productTypeId";
        
        $statement = $dbConnection->prepare($sql);
        //$records = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table border=\"1\">";
     
         echo "<tr>";
        	echo "<th>Product Id</th>";
        	echo "<th>Product Name</th>";
         echo "</tr>";
         
         $statement->execute();
         while ($row = $statement->fetch())
         {
            echo "<tr>";
                echo "<td>";
                echo "#". $row['productId'];
                echo "</td>";
                
                echo "<td>";
                echo $row['productName'];
                echo "</td>";

            echo "</tr>";
         }
         echo "</table>";   
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
    <div class="container">
        
        <h1> ASSIGNMENT 4: REPORTS</h1>

        <?php
        
            getAllColleges();
            getAllClients();
            getAllOrders();
            getAllProductTypes();
            getAllProducts();
            getAllOrder_Product();
            getProducts();
            // 3 more
            
        ?>
        
    </div>
    

    </body>
</html>