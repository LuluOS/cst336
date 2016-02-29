<!DOCTYPE html>
<html>
    <head>
        <title> Assignment2 </title>
        
    </head>
    <body>
        <h1>NUMBERS ODD OR EVEN??</h1>
        <div id="numbers">
        <?php
        
            echo "<link rel='stylesheet' type='text/css' href='css/style.css' />";
            
            $evenPic = "images/even.jpg";
            $oddPic = "images/odd.png";
            /*
            You must use at least 15 CSS rules in an external file (15 pts)
            You must use at least two images (15 pts)
            You must use at least one array (15 pts)
            You must use at least three array functions (15 pts)*/
            
                //Declare & Inicialize
                $numbers = [];
                $odd = [];
                $even = [];
                
                
                //create a random array of numbers
                for ($f = 0; $f < 10; $f++)
                {
                    $n = rand(0,10);
                    array_push($numbers, $n);
                }
                $n = array_pop($numbers);
                
                if ($n % 2 == 0)
                {
                    echo "<div id=\"Evens\">";
                        echo "<img src=\"images/even.png\" alt=\"even\">";
                        echo "<p>EVEN!</p>";
                    echo "</div>";
                }
                else
                {
                    echo "<div id=\"Odds\">";
                        echo "<img src=\"images/odd.png\" alt=\"even\">";
                        echo "<p>ODD!</p>";
                    echo "</div>";
                }
                
                sort($numbers);
                
                //separete it by even and odd
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
                
                //Print out
                echo "<div id=\"Numbers\">Numbers: ";
                print_r($numbers);
                echo "</div>";
                
                echo "<div id=\"Odds\">Odd: ";
                print_r($odd);
                echo "</div>";
                 
                echo "<div id=\"Evens\">Even: ";
                print_r($even);
                echo "</div>";
                
                unset($numbers);
                unset($odd);
                unset($even);
        ?>
        </div>
    </body>
</html>