<?php
// Luana

//Array with all the cards
$deck = array();

//Creating the deck
for ($i = 1; $i <= 52; $i++ )
{
  $deck[] = $i;
}

//randomize the deck
shuffle($deck);

echo "<hr>";

//print out
print_r($deck);

//pop out one card (get one card of the end of the array)
$card = array_pop($deck);

//print the card
echo "<br>card poped: " .$card;

//to get the suit
$suit = array("clubs", "diamonds", "hearts", "spades");

//cardSuit is going to be value of the floor(card/13)
$cardSuit = $suit[floor($card / 13)];
echo "<br>cardSuit: " .$cardSuit;

//cardValue will be the mod of the card by 13
$cardValue = $card % 13;

//if the cardValue is 0 it means that will be the 13(K)
if ($cardValue == 0) {
    $cardValue = 13;
}
echo "<br>cardValue: " .$cardValue;

echo "<br>";
echo "<img src=assets/$cardSuit/$cardValue.png>";
?>