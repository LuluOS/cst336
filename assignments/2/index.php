<?php
echo '<link href="css/style.css" rel="stylesheet">';

/*Create a PHP program that uses at least two loops (15 pts)
It must include at least two conditions (15 pts)
You must use at least 15 CSS rules in an external file (15 pts)
You must use the rand() function (10 pts)
You must use at least two images (15 pts)
You must use at least one array (15 pts)
You must use at least three array functions (15 pts)*/

    //Declare & Inicialize
    $numbers = [];
    $odd = [];
    $even = [];
    
    
    //Use: iterate or loop
    for ($f = 0; $f < 10; $f++)
    {
        $n = rand(0,10);
        array_push($numbers, $n);
    }
    sort($numbers);
    
    
    foreach($numbers as $k => $v)
    {
        if ($v % 2 == 0)
        {
            $even[] = $v;
        }
        else
        {
            $odd[] = $v;
        }
    }
    
    
    $dir = 'images/';
    $file = 'numbers.jpg';
    echo '<img src="'. $dir. '/'. $file . '" alt="'. $file .'" />';
    
    //Print out
    echo "<div id=\"Numbers\">Numbers: ";
    var_dump($numbers);
    echo "</div>";
    
    echo "<div id=\"Odds\">Odd: ";
    var_dump($odd);
    echo "</div>";
     
    echo "<div id=\"Evens\">Even: ";
    var_dump($even);
    echo "</div>";
    
    unset($numbers);
    unset($odd);
    unset($even);
?>