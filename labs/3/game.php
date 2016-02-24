<?php
    // $card = ["value" => "",
    //         "suit" => "",
    //         "rank" => ""];
    
    // $clubSuit = ["directory" => "assets/cards/hearts",
    //              "name" => "Hearts"];
    // $diamondSuit = ["directory" => "assets/cards/hearts",
    //              "name" => "Hearts"];
    // $heartSuit = ["directory" => "assets/cards/hearts",
    //              "name" => "Hearts"];
    // $spadeSuit = ["directory" => "assets/cards/hearts",
    //              "name" => "Hearts"];
    
    // Indexed array        
    // $deck = [];
    // $deck[] = ["value" => "",
    //         "suit" => "",
    //         "rank" => ""]
    
    
    $player1 = ["imageName" => "",
              "name" => $_POST["p1"]];
              
    $player2 = ["imageName" => "",
              "name" => $_POST["p2"]];
    
    $player3 = ["imageName" => "",
              "name" => $_POST["p3"]];
              
    $player4 = ["imageName" => "",
              "name" => $_POST["p4"]];

    $table = [$player1, $player2, $player3, $player4];
    
    
    
    // $table = ["position1" => $player1,
    //         "position2" => $player3,];
    
    // $hand = ["player" => null,
    //         "cards" => [],
    //         "score" => ""];
    
    // $game = ["location" => $table,
    //         "hands" => []];
    

?>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
            var_dump($table);
        ?>
        <!--<a href="game.php">Play again!</a>-->
        <form action="game.php" method="POST">
            <input type="hidden" name="p1" value="<?= $_POST["p1"] ?>"/>
            <input type="hidden" name="p2" value="<?= $_POST["p2"] ?>"/>
            <input type="hidden" name="p3" value="<?= $_POST["p3"] ?>"/>
            <input type="hidden" name="p4" value="<?= $_POST["p4"] ?>"/>
            <input type="submit" value="Play Again!"/>
        </form>
    </body>
</html>
