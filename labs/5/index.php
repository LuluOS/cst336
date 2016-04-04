<?php

function getTable()
{
    // need this to start session tracking IN EVERY PHP page using session
    session_start();
    
    // Set the Cloud 9 MySQL related information...this is set in stone by C9!
    $servername = getenv('IP');
    $dbPort = 3306;
    
    // Which database (the name of the database in phpMyAdmin)
    $database = "OtterExpress";
    
    // My user information...I could have prompted for password, as well, or stored in the
    // environment, or, or, or (all in the name of better security)
    $username = getenv('C9_USER');
    $password = "0987654321";
    
    // Establish the connection and then alter how we are tracking errors (look those keywords up)
    $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
    // Structure the select
    $sql = "SELECT * FROM Item i INNER JOIN Category c ON i.CategoryID = c.CategoryID ORDER BY MaxPrice;";
    
    if (!empty($_POST))
    {
        $sql = "SELECT * FROM Item i INNER JOIN Category c ON i.CategoryID = c.CategoryID";
        if (!empty($_POST['Price']))
        {
            $sql .= " AND i.MaxPrice <= " . $_POST['Price'] . " ORDER BY MaxPrice;";
        }
        
        if(!empty($_POST['CategoryID']))
        {
            $sql .= " ORDER BY i.CategoryID;";
        }
        
        if(!empty($_POST['Healthy']))
        {
            $sql .= " AND i.HealthyChoice = 1;";
        }
        
        if(!empty($_POST['SortedBy']))
        {
            if ($_POST['SortedBy']="Item Name")
                $sql .= " ORDER BY ItemName;";
            
            if ($_POST['SortedBy']="MaxPrice")
                $sql .= " ORDER BY MaxPrice;";
        }    
    }
    
    // Prepare the SQL...the DBMS uses this to figure out how best to execute the query
    $stmt = $dbConn->prepare($sql);
    
    return $stmt;
}

?>

<!DOCTYPE html>
<html>
    <html lang="en">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <title> Otter Express </title>
        
        
    </head>
    <body>
        <div class="container">
            
            
            <div class="table-responsive">         
                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                      <tr>
                        <th>ItemID</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Healthy Choice</th>
                        <th>Category ID</th>
                        <th>Category Name</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $stmt = getTable();
                            $stmt->execute();
                            while ($row = $stmt->fetch())  {
                            // Notice how it represents my numbers and dates in the associative array
                            // How would I use this? How do I get from the string to a number or a date?
                            // var_dump($row);
                            
                            echo "<tr>";
                              echo "<td>";
                              echo "#". $row['ItemID'];
                              echo "</td>";
                             
                              echo "<td>";
                                $id = $row['ItemID'];
                                // Idk why but its not working
                                echo "<a href=\"#" . $id . "\" data-toggle=\"collapse\" data-target=\"" . $id . "\">" . $row['ItemName'] . "</a>"; 
                                echo "<div id=\"" . $id . "\" class=\"collapse " . $id . "\">";
                                echo $row['Description'];
                                echo "</div>";
                              echo "</td>";
                              
                              echo "<td>";
                              echo "$" . $row['MaxPrice'];
                              echo "</td>";
                              
                              echo "<td>";
                              echo $row['HealthyChoice'];
                              echo "</td>";
                              
                              echo "<td>";
                              echo $row['CategoryID'];
                              echo "</td>";
                              
                              echo "<td>";
                              echo $row['CategoryName'];
                              echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <br><br><br>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <div class="Category">
                        <input type="submit" class="btn btn-primary" name="CategoryID" value="Search Products">
                    </div>
                    <br><br>
                    <div class="Price">
                        <label>Price: </label>
                        <input type="text" class="form-control" name="Price">  
                    </div>
                    <br><br>
                    <div class="HealthyChoice">
                      <label><input type="checkbox" name="Healthy" value="Healthy">Healthy Choice</label>
                    </div>
                    <br><br>
                    <div class="SortedBy">
                        <select class="form-control" name="SortedBy">
                            <option selected disabled hidden value = ''></option>
                            <option value="Item Name">Product Name</option>
                            <option value="MaxPrice">Price</option>
                        </select>
                    </div>
                    <br><br>
                    <div class="Submition">
                        <input type="submit" class="btn btn-danger" value="Submit">
                    </div>
                    
                </div>
            </form>
            
            
        </div>
        
        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>