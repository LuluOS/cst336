<?php
    
    function getDatabaseConnection($dbname)
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

?>