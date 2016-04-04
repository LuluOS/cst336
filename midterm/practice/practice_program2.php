<?php
    $servername = getenv('IP');
    $dbPort = 3306;
    // Which database (the name of the database in phpMyAdmin)?
    $database = "midterm_practice";
    
    // My user information...I could have prompted for password, as well, or stored in the
    // environment, or, or, or (all in the name of better security)
    $username = getenv('C9_USER');
    $password = "0987654321";
    
    // Establish the connection and then alter how we are tracking errors (look those keywords up)
    $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "SELECT * FROM `mp_town` WHERE `population` BETWEEN 50000 AND 80000";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ( array ( ':id' => '1') );
    while ($row = $stmt -> fetch()) {
       echo $row['town_name'] . " - " . $row['population'];
    }
    echo "<br><br>";
    $sql = "SELECT * FROM `mp_town` t1,`mp_county` c1 WHERE t1.county_id = c1.county_id ORDER BY `population` DESC";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ( array ( ':id' => '1') );
    while ($row = $stmt -> fetch()) {
       echo $row['town_name'] . " " . $row['county_name'] . " " . $row['population'];
       echo "<br>";
    }
    echo "<br>";
    $sql = "SELECT `county_name`, SUM(`population`) As `updated` FROM `mp_town` t1,`mp_county` c1 where t1.county_id = c1.county_id GROUP BY `county_name`";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ( array ( ':id' => '1') );
    while ($row = $stmt -> fetch()) {
       echo $row['county_name'] . " " . $row['updated'];
       echo "<br>";
    }
    echo "<br>";
    $sql = "SELECT `state_name`, SUM(`population`) As `updated` FROM `mp_town` t1,`mp_county` c1, `mp_state` s1 where t1.county_id = c1.county_id AND c1.state_id = s1.state_id GROUP BY `state_name`";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ( array ( ':id' => '1') );
    while ($row = $stmt -> fetch()) {
       echo $row['state_name'] . " " . $row['updated'];
       echo "<br>";
    }
    echo "<br>";
    $sql = "SELECT * FROM `mp_town` t1,`mp_county` c1, `mp_state` s1 where t1.county_id = c1.county_id GROUP BY `population` ASC LIMIT 3";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ( array ( ':id' => '1') );
    while ($row = $stmt -> fetch()) {
       echo $row['town_name'] . " " . $row['population'];
       echo "<br>";
    }
    echo "<br>";
    $sql = "SELECT * FROM `mp_town` t1,`mp_county` c1 where t1.county_id <> c1.county_id GROUP BY `county_name` DESC LIMIT 2";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ( array ( ':id' => '1') );
    while ($row = $stmt -> fetch()) {
       echo $row['county_name'];
       echo "<br>";
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>