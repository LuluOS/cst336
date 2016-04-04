<?php
    // need this to start session tracking IN EVERY PHP page using session
    //session_start();
    
function createArray($omit)
{
    $array = [];
    $i = 0;
    foreach (range('A', 'Z') as $char)
    {
        $array[$i] = $char;
        $i++;
    }
    
    // var_dump($array);
    
    $pos = array_search($omit, $array);
    unset($array[$pos]);
    
    // var_dump($array);
    
    return $array;
}

function randomLetter(&$array)
{
    shuffle($array);
    
    $pos = rand(0, count($array));
    
    $cell = $array[$pos];
    
    return $cell;
}
    
function createTable($letter, $omit, $n)
{
    $array = createArray($omit);
    
    for ($i = 0; $i < $n; $i++)
    {
        echo "<tr>";
        
        for ($j = 0; $j < $n; $j++)
        {
            echo "<td>";
            
            
            $cell = randomLetter($array);
            
            if ($cell == null)
                $cell = randomLetter($array);
                
            if (in_array($cell, range('A', 'G')))
            {
                echo "<p style=\"color:red;\">" . $cell . "</p>";
            }
            else
            {
                if (in_array($cell, range('H', 'O')))
                {
                    echo "<p style=\"color:blue;\">" . $cell . "</p>";
                }
                else
                {
                     echo "<p style=\"color:green;\">" . $cell . "</p>";
                }
            }
            
            if ($cell == $letter)
            {
                $pos = array_search($letter, $array);
                unset($array[$pos]);
                $array = array_values($array);
            }
            
            echo "</td>";
        }
        
        echo "</tr>";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     
        <link rel="stylesheet" type="text/css" href="css/theme.css"> 
        <title> Table </title>
        
        <style type="text/css">
            td
            {
              text-align: center;
            } 
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                
                <?php
                    $letter = strval($_POST["letter"]);
                    echo "<h1>Find the letter $letter</h1>";
                
                    $omit = strval($_POST["omit"]);
                    echo "<h3>Letter to omit: $omit</h3>";
            
                    $n = intval($_POST["table"]);
                
                
                echo "<div class=\"center\">";
                
                    echo "<table border=\"1\">";
                        
                    createTable($letter, $omit, $n);
                    
                    echo "</table>";
                echo "</div>";
                
                ?>
        
            </div>
        </div>
    </body>
</html>