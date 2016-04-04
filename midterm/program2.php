<?php
    $servername = getenv('IP');
    $dbPort = 3306;
    // Which database (the name of the database in phpMyAdmin)?
    $database = "midterm";
    
    // My user information...I could have prompted for password, as well, or stored in the
    // environment, or, or, or (all in the name of better security)
    $username = getenv('C9_USER');
    $password = "0987654321";
    
    // Establish the connection and then alter how we are tracking errors (look those keywords up)
    $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "SELECT firstName, lastName FROM `m_students` WHERE gender = 'F' ORDER BY `lastName` ASC";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ( array ( ':id' => '1') );
    while ($row = $stmt -> fetch())
    {
       echo $row['firstName'] . " " . $row['lastName'];
       echo "<br>";
    }
    
    echo "<br><br>";
    
    $sql = "SELECT firstName, lastName, grade FROM `m_students` s INNER JOIN `m_gradebook` g ON s.studentId = g.studentId AND g.grade < 50 ORDER BY g.grade ASC;";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ( array ( ':id' => '1') );
    while ($row = $stmt -> fetch()) {
       echo $row['firstName'] . " " . $row['lastName'] . " " . $row['grade'];
       echo "<br>";
    }
    
    echo "<br><br>";
    
    $sql = "SELECT title, dueDate FROM `m_assignments` a INNER JOIN `m_gradebook` g ON a.assignmentId != g.assignmentId ORDER BY a.dueDate ASC;";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ( array ( ':id' => '1') );
    while ($row = $stmt -> fetch()) {
       echo $row['firstName'] . " " . $row['lastName'] . " " . $row['grade'];
       echo "<br>";
    }
    
    echo "<br><br>";
    
    $sql = "SELECT firstName, lastName, grade FROM `m_students` s INNER JOIN `m_gradebook` g ON s.studentId = g.studentId AND g.grade < 50 ORDER BY g.grade ASC;";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute ( array ( ':id' => '1') );
    while ($row = $stmt -> fetch()) {
       echo $row['firstName'] . " " . $row['lastName'] . " " . $row['grade'];
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