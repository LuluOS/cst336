<?php

/*******************************************************************************/
function creatDeck()
{
  //Array with all the cards
  $deck = array();
  
  //Creating the deck
  for ($i = 1; $i <= 52; $i++ )
  {
    $deck[] = $i;
  }
  
  //randomize the deck
  shuffle($deck);
  
  return $deck;
}

/*******************************************************************************/
function drawCard(&$deck,&$player,&$cards)
{
    $j = count($cards);
   
    //pop out one card (get one card of the end of the array)
    $card = array_pop($deck);
    
    //print the card
    //echo "<br>card poped: " .$card. "<br>";
    
    //to get the suit
    $suit = array("clubs", "diamonds", "hearts", "spades");
    
    //cardSuit is going to be value of the floor((card-1)/13)
    $cardSuit = $suit[floor(($card-1) / 14)];
    
    //cardValue will be the mod of the card by 13
    $cardValue = $card % 13;
    
    //if the cardValue is 0 it means that will be the 13(K)
    if ($cardValue == 0)
    {
        $cardValue = 13;
    }

    $cards[$j]["value"] = $cardValue;
    $cards[$j]["suit"] = $cardSuit;
    //echo "<br>cardSuit: " .$cardSuit. " cardValue: " .$cardValue. "<br>";

    $player = $player + $cardValue;
}

/*******************************************************************************/
function getClosest($search, $arr, &$winner) //return array of the winners
{
   $closest = null;
   foreach ($arr as $index => $item)
   {
    // echo "<br>search - closest" .$search. " - " .$closest;
    // echo "<br>item - search" .$item. " - " .$search;
     if ($item <= 42)
     {
        if ($closest === null || abs($search - $closest) > abs($item - $search))
        {
          $closest = $item;
          //echo "<br>Closest: " .$closest;
        }
     }
   }
   
   foreach ($arr as $index => $value)
   {
      if ($value == $closest)
      {
        array_push($winner, $index);
      }
   }
   
   return $winner;
}

/*******************************************************************************/
function whoWin(&$players,&$names,&$winner) //returns a array with the winner / winners
{
  getClosest(42, $players, $winner);
  
  if (count($winner) == 1)
  {
    echo "<h3>Player " . $names[($winner[0])] ." WON!</h3>";
  }
  else
  {
    echo "<h3>";
    for ($i = 0; $i < count($winner); $i++)
    {
      echo "Player " . $names[($winner[$i])] . " ";
    } 
    echo "WON!</h3>";
  }
}

/*******************************************************************************/
function printCard(&$cards)
{
  $size = count($cards);
  
  for ($i = 0; $i < $size; $i++)
  {
    $cardValue = $cards[$i]["value"];
    $cardSuit = $cards[$i]["suit"];
    echo "<td>";
    echo "<img class=\"cards\" src='assets/$cardSuit/$cardValue.png'/>";
    echo "</td>";
  }
}

/*******************************************************************************/
function game()
{
  //create and shuffle deck
  $deck = creatDeck();
  //print_r($deck);
  
  $players = array(0,0,0,0); //each index is going to be the score of each player
  $names = ["Milhouse", "Lisa", "Maggie", "Bart"];
  $winner = [];
  $cards[] = array();
  
  for($t = 0; $t < 4; $t++) //at least 4 cards
  {
    for ($i = 0; $i < 4; $i++) //each card for each player
    {
      drawCard($deck,$players[$i],$cards[$i]);
    }
  }
  
  //Check if the player needs more cards
  for($t = 0; $t < 2; $t++)
  {
    // echo "<tr>";
    for ($i = 0; $i < 4; $i++) //each card for each player
    {
      if ($players[$i] < 42)
      {
        drawCard($deck,$players[$i],$cards[$i]);
      }
    }
  }
  
  echo "<div id=\"field\">";
    echo "<table>";
    for ($i = 0; $i < 4; $i++)
    {
      $j = $i+1;
      echo "<tr>";
        echo "<td>";
         echo "<img class=\"players\" src='assets/players/$j.png'/>";
         echo "<hr>";
        echo "</td>";
        printCard($cards[$i]);
        echo "<td>";
         echo "<h3>$players[$i]</h3>";
        echo "</td>";
      echo "</tr>";
      
    }
    echo "</table>";
  echo "</div>";
    
  echo "<div id=\"winner\">";
    whoWin($players,$names,$winner);
  echo "</div>";

  unset($deck);
  unset($players);
  unset($path);
  unset($winner);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" />
        <title> Silver Jack </title>
    </head>
    <body>
      <div class="clearfix">
  
        <div id="header">
          <h1>Silver Jack</h1>
        </div>
        
        <?php
          game();
        ?>
        
        <div id="form">
          <form action ="silverJack.php" method="post">
            <input class="continue" type="submit" name="choice" value="Play Again"></input><br>
          </form>
        </div>
        
        <div id="footer">
          <hr>
            <strong>Disclaimer:</strong> This information included in page is not real.
    		It's only for purposes of the CST336 class.
    		<br> &copy; Jose Aguirre and Luana Okino Sawada, 2016 <br />
          </hr>
        </div>


      </div>
    </body>
</html>