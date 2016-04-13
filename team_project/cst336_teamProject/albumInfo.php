<?php
include 'head.php';

// Structure the select

if (isset($_GET['albumID'])){
    $sql = "SELECT albumName, genre, year FROM Album WHERE albumID = " . $_GET['albumID'];
    $records = getConn($sql);
    foreach ($records as $record) {
        echo "Album Name: " . $record['albumName'] . "<br>";
        echo "Genre: " . $record['genre'] . "<br>";
        echo "Year: " . $record['year'] . "<br>";
    }
} else {
    echo "Click item to see description";
}



?>

<!-- <html>
    <head>
        

        <button onclick="goBack()">Go Back</button>
        
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </head>
        <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
        <link rel="stylesheet" type="css" href="css/main.css">
    <body> -->
        <img src="assets/albumcovers.jpg" alt="albumcovers" style="width:650px;height:300px;">
    
        </div>
    </body>
</html>