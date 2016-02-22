<!DOCTYPE html>
<html>
    <head>
        <title> LED </title>
    </head>

    <body>
    <?php

        $color = color2Hex();
        echo "Color = $color<br>";
        printRow(0, 1, 1, 1, 1, 0, 1, $color);
        
        
        function printRow($c1, $c2, $c3, $c4, $c5, $c6, $c7, $color)
        {
            echo "Color = $color<br>";
            echo "<div style ='color:$color'>$c1$c2$c3$c4$c5$c6$c7</div>";
        }
      
        function generateColor()
        {
            $dec = rand(0,255);
            //echo "Dec= $dec<br>";
            
            $hex = dechex ($dec);
            //echo "Hex= $hex<br><br>";
            
            return $hex;
        }
        
        function color2Hex()
        {
            $r = generateColor();
            $g = generateColor();
            $b = generateColor();
            
            $hex = "#";
            $hex .= str_pad($r, 2, "0", STR_PAD_LEFT);
            $hex .= str_pad($g, 2, "0", STR_PAD_LEFT);
            $hex .= str_pad($b, 2, "0", STR_PAD_LEFT);
            
            return $hex;
        }

    ?>
    </body>
</html>