<?php
include 'head.php';

// Structure the select
if (isset($_GET['artistID'])){
    $sql = "SELECT artistID, firstName, lastName, gender FROM Artist WHERE artistID = " . $_GET['artistID'];
    $records = getConn($sql);
    foreach ($records as $record) {
        echo "First Name: " . $record['firstName'] . "<br>";
        echo "Last Name: " . $record['lastName'] . "<br>";
        echo "Gender: " . $record['gender'] . "<br>";
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
    <body>-->
        <img src="assets/artist.jpg" alt="artist" style="width:650px;height:300px;">

        </div>
    </body>
</html>