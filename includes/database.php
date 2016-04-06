<?php

function getDatabaseConnection($dbname) //$dbname: database to connect;
{
    
    $host = getenv('IP');
    
    $username = getenv('C9_USER');
    $password = "0987654321";

    //creates new connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Setting Errorhandling to Exception
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
    return $dbConn;
}

function getDataBySQL($sql)
{
    // echo "<br>STATEMENT: ".$sql."</br>";
    global $conn;
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $records = $stmt -> fetchALL(PDO::FETCH_ASSOC);
    return $records;
}

?>