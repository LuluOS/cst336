<?php 
//session_start(); //start or resume an existing session 

include 'head.php';

// to prevent undefined index notice
$action = isset($_GET['action']) ? $_GET['action'] : "";
$title = isset($_GET['title']) ? $_GET['title'] : "";
 
if($action=='added'){
    echo "<div class='alert alert-success'>";
        echo "<strong>{$title}</strong> was added to your cart!";
    echo "</div>";
}
 
if($action=='exists'){
    echo "<div class='alert alert-danger'>";
        echo "<strong>{$title}</strong> already exists in your cart!";
    echo "</div>";
}
             
    
function displayAllSongs(){
    global $connection;
    $sql = "SELECT songsID, title, time, albumID FROM Songs ORDER BY title"; 
    
    
    if (isset($_GET['sort'])){
        if ($_GET['sort'] == "desc")
        $sql .= " DESC";
        else 
        $sql .= " ASC";
    }
    
    $records = getConn($sql);
    echo "<h2>Songs</h2>";
    echo "<table align = 'center' border=\"1\">";
    echo "<th>Title</th>";
    echo "<th>Time</th>";
    echo "<th>Detail</th>";
    echo "<th>Action</th>";
    foreach($records as $record) {
        echo "<tr>";
            echo "<td>" . $record['title'] . "</td>";
            echo "<td>" . $record['time'] . "</td>";
            
            echo "<td> <form action=albumInfo.php>";
            echo "<input type='hidden' name='albumID' value='".$record['albumID'] . "'/>";
            echo "<input type='submit' class='btn btn-info' value='Album'/>";
            echo "</form> </td>";
            
            echo "<td>";
                echo "<a href='add_to_cart.php?songsID={$record['songsID']}&title={$record['title']}' class='btn btn-primary'>";
                    echo "<span class='glyphicon glyphicon-shopping-cart'></span> Add to cart";
                echo "</a>";
            echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    return $records;
}

function displayAllAlbum(){
    global $connection;
    $sql = "SELECT albumID, albumName, artistID, genre, year FROM Album ORDER BY albumName";
    
    if (isset($_GET['sort'])){
        if ($_GET['sort'] == "desc")
        $sql .= " DESC";
        else 
        $sql .= " ASC";
    }
    
    $records = getConn($sql);
    echo "<h2>Album</h2>";
    echo "<table align = 'center' border=\"1\">";
    echo "<th>Album Name</th>";
    echo "<th>Genre</th>";
    echo "<th>Year</th>";
    foreach($records as $record) {
        echo "<tr>";
        echo "<td>" . $record['albumName'] . "</td>";
        echo "<td>" . $record['genre'] . "</td>";
        echo "<td>" . $record['year'] . "</td>";
        
        echo "<td> <form action=artistInfo.php>";
        echo "<input type='hidden' name='artistID' value='".$record['artistID'] . "'/>";
        echo "<input type='submit' class='btn btn-info' value='Artist'/></form> </td>";
        
        echo "</tr>";
    }
    echo "</table>";
    return $records;

}

function displayAllArtist(){
    global $connection;
    $sql = "SELECT artistID, firstName, lastName, gender FROM Artist ORDER BY firstName";
    
    if (isset($_GET['sort'])){
        if ($_GET['sort'] == "desc")
        $sql .= " DESC";
        else 
        $sql .= " ASC";
    }
    
    $records = getConn($sql);  
    echo "<h2>Artists</h2>";
    echo "<table align = 'center' border=\"1\">";
    echo "<th>firstName</th>";
    echo "<th>lastName</th>";
    echo "<th>gender</th>";
    foreach($records as $record) {
        echo "<tr>";
        echo "<td>" . $record['firstName'] . "</td>";
        echo "<td>" . $record['lastName'] . "</td>";
        echo "<td>" . $record['gender'] . "</td>";
        
        echo "</tr>";
    }
    echo "</table>";
    return $records;
    
}

function filter(){
    global $connection;
    if (isset($_GET['searchForm'])) {
    
        $table = $_GET['table'];

        if ($table == 1){
            displayAllAlbum();
        }
        else if ($table == 2){
            displayAllArtist();
        }
        else if ($table == 3){
            displayAllSongs();
        }
        
    }
}
?>


<!DOCTYPE html>
<html>
            <div class="jumbotron">
                <center>
                    <img class="banner" src="assets/headphonesPhone.jpg" alt="headphonesPhone">
                </center>
            </div>
            
            <div class="row marketing">
                <center>
                    <form method = "get">
                        
                        Sort By:  
                        <select name = "table">
                            <option value = "3" selected="selected">Songs</option>
                            <option value = "1">Album</option>
                            <option value = "2">Artist</option>
                        </select>
                        
                        ASC/DESC:
        					<select name="sort">
        						<option value="asc">Ascending</option>
        						<option value="desc">Descending</option>
        					</select>
        					
                    <input type="submit" class="btn btn-success" name="searchForm" value="Submit"> <br>   
                    </form>
                    
                    <?php
            
            
            if (!isset($_GET['searchForm'])) {
						$records = displayAllSongs();
					} else {
						$records = filter();
					}
            
            
//             echo "<table border='1'>";
// 					foreach ($records as $record) {
// 						echo "<tr> <td>";
// 						echo "<a target='getProductIframe' href='albumInfo.php?albumID=" . $record['albumID'] . "'>";
// 						echo $record['albumName'];
// 						echo "</a> </td><td>";
// 						echo "$" . $record['genre'] . "</td></tr>";
// 						echo "</a> </td><td>";
// 						echo "$" . $record['year'] . "</td></tr>";

// 					}
// 			echo "</table>";

//             echo "<table border='1'>";
// 					foreach ($records as $record) {
// 						echo "<tr> <td>";
// 						echo "<a target='getProductIframe' href='artistInfo.php?artistID=" . $record['artistID'] . "'>";
// 						echo $record['firstName'];
// 						echo "</a> </td><td>";
// 						echo $record['lastName'];
// 						echo "</a> </td><td>";
// 						echo "$" . $record['gender'] . "</td></tr>";


// 					}
// 			echo "</table>";
//             ?>
                    
                </center>
            </div>
        </div>
        
			<!--<div id="frame">-->

			<!--	<iframe src="albumInfo.php" name="getProductIframe" width="250" height="300"></iframe>-->

			<!--</div>-->
        

    </body>
</html>