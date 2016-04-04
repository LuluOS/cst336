<?php

// Set the Cloud 9 MySQL related information...this is set in stone by C9!
$servername = getenv('IP');
$dbPort = 3306;

// Which database (the name of the database in phpMyAdmin)?
$database = "review";

// My user information...I could have prompted for password, as well, or stored in the
// environment, or, or, or (all in the name of better security)
$username = getenv('C9_USER');
$password = "0987654321";

// Establish the connection and then alter how we are tracking errors (look those keywords up)
$dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

// Structure the select
$sql = "SELECT * FROM Employee";

// Prepare the SQL...the DBMS uses this to figure out how best to execute the query
$stmt = $dbConn->prepare($sql);

// Execute the query
$stmt->execute ();

echo "<br /><br />ALL ROWS<br /><br />";

// Loop through the results...notice that this is just a good ol' associative array
while ($row = $stmt->fetch())  {
    // Notice how it represents my numbers and dates in the associative array
    // How would I use this? How do I get from the string to a number or a date?
    // var_dump($row); 
    echo "<br /><br />";
    
    echo $row['EmployeeID'] . ", " 
        . $row['FName'] . ", " 
        . $row['LName'] . ", " 
        . $row['createDate'];
    echo "<br /><br />";
}

// This is an example of a "select where in"
$whereInSql = "SELECT * FROM Employee WHERE DepartmentID IN (:departments)";
$whereInStmt = $dbConn->prepare($whereInSql);
$whereInStmt->execute( array( ":departments" => array(1, 3) ));

echo "<br /><br />FILTERED ROWS<br /><br />";

while ($whereInRow = $whereInStmt->fetch())  {
    // var_dump($whereInRow); 
    echo "<br /><br />";
    
    echo $whereInRow['EmployeeID'] . ", " 
        . $whereInRow['FirstName'] . ", " 
        . $whereInRow['LastName'] . ", " 
        . $whereInRow['CreateDate'];
    echo "<br /><br />";
}
?>