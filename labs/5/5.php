<?php

// Set the Cloud 9 MySQL related information...this is set in stone by C9!
$servername = getenv('IP');
$dbPort = 3306;

// Which database (the name of the database in phpMyAdmin)?
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

// Prepare the SQL...the DBMS uses this to figure out how best to execute the query
$stmt = $dbConn->prepare($sql);

// Execute the query
$stmt->execute ();

// Loop through the results...notice that this is just a good ol' associative array
while ($row = $stmt->fetch())  {
    // Notice how it represents my numbers and dates in the associative array
    // How would I use this? How do I get from the string to a number or a date?
    // var_dump($row);
    
    echo "<tr>";
      echo "<td>";
      echo "#". $row['ItemID'];
      echo "</td>";
      echo "<td>";
      echo $row['ItemName'];
      echo "</td>";
      echo "<td>";
      echo "$" . $row['MaxPrice'];
      echo "</td>";
      echo "<td>";
      echo $row['Healthy Choice'];
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