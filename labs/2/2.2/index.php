<!DOCTYPE html>
<html>
    <head>
        <title> LED </title>
        <style>
            body{
                 font-size:10px;
                 background-color: black;
                }
                
            table {
                display:inline-block;
            }
            
            td {
                border-radius: 3px;
                width: 5px;
                height: 10px;
            }
            
            .center {
                margin: 0 auto;
                display: table;
            }
        </style>
        
    </head>

    <body>
    <?php
    
        /* Functions */
        function isLetter($char)
        {
            return ctype_alpha($char);
        }
        
        function drawLetter($char, $style)
        {
            echo "<table>";
            
            $letter = strtoupper($char);
            $color = randomHex();
            $invertColor = invertColor($color);
            
            //Controls rows
            for ($i = 0; $i < 5; $i++)
            {
                echo "<tr>";
        
                //Controls columns
                for ($j = 0; $j < 5; $j++)
                {
                    if($style == "led")
                    {
                        $color = randomHex();
                    }
                    
                    switch($letter)
                    {
                        case 'A':
                            if (($i == 0 && $j != 0 && $j != 4) || ($j == 0 && $i > 0) || ($j == 4 && $i > 0) ||  $i == 3)
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        
                        case 'B':
                            if ($j == 0 || (($i == 0 || $i == 2 || $i == 4) && $j < 4) || ($j == 4 && ($i == 1 || $i == 3)))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'C':
                            if ($i == 0 && ($j != 0) || $i == 4 && ($j != 0) || $j == 0 && ($i != 0 && $i != 4))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'D':
                            if ((($i == 0 || $i==4) && $j != 4) || $j == 1 || ($j == 4 && ($i != 0 && $i != 4)))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'E':
                            if ($i == 0 && ($j != 0) || $i == 4 && ($j != 0) || $j == 0 && ($i != 0 && $i != 4) || ($i == 2 && $j != 4))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'F':
                            if ($i == 0 && ($j != 0) || $j == 0 && ($i != 0) || $j == 0 && ($i != 0 && $i != 4) || ($i == 2 && $j != 4))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'G':
                            if ($i == 0 && ($j != 0) || $i == 4 && ($j != 0) || $j == 0 && ($i != 0 && $i != 4) || ($i == 2 && $j != 1) || ($j == 4 && $i > 2))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'H':
                            if ($j < 1 || $j > 3 || $i == 2)
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'I':
                            if (($i == 0 || $i == 4) && ($j > 0 && $j < 4) || $j == 2)
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'J':
                            if (($i == 0 && ($j > 0 && $j < 4) || ($i == 4 && $j == 1) || ($i == 3 && $j == 0) || $j == 2))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'K':
                            if ($j == 0 || ($i == 4 - $j) || (($i == $j) && $j > 1))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'L':
                            if ($j == 1 || ($i == 4 && $j != 0))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'M':
                            if($j == 0 || $j == 4 || (($i == $j) && $j < 3) || (($i == 4 - $j) && $i < 2))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'N':
                            if($j == 0 || $j == 4 || $i == $j)
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'O':
                            if ((($i == 0 || $i == 4) && ($j != 0 && $j != 4)) || (($j == 0 || $j == 4) && ($i != 0 && $i != 4)))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'P':
                            if ($j == 0 || ($i == 0 && $j != 4) || ($i == 3 && $j != 4) || ($j == 4 && ($i > 0 && $i < 3)))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'Q':
                            if ((($i == 0) && ($j != 0 && $j != 4)) || ($i == 4 && ($j != 0 && $j < 3)) || 
                            (($j == 0) && ($i != 0 && $i != 4)) || (($j == 4) && ($i != 0 && $i != 3)) ||
                            ($i == $j && $i > 2))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'R':
                            if ($j == 0 || ($i == 0 && $j != 4) || ($i == 3 && $j != 4) ||
                            ($j == 4 && ($i > 0 && $i < 3)) || ($i == 4 && $j == 4))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'S':
                            if (($i == 0 && ($j > 0  && $j < 4)) || ($i == 2 && ($j > 0  && $j < 4)) || ($i == 4 && ($j > 0  && $j < 4)) ||
                                ($j == 0 && ($i == 1 || $i == 4)) || ($j == 4 && ($i == 0 || $i == 3)))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'T':
                            if ($i == 0 || $j == 2)
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'U':
                            if (($i == 4 && ($j != 0 && $j != 4)) || (($j == 0 || $j == 4) && $i != 4))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'V':
                            if (($i == 3 && ($j == 1 || $j == 3)) || (($j == 0 || $j == 4) && $i < 3) || ($i == 4 && $j == 2))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'W':
                            if (($i == 3 && ($j == 0 || $j == 2 || $j == 4)) || (($j == 0 || $j == 4) && $i < 4) || ($i == 4 && ($j == 1 || $j == 3)))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'X':
                            if ($i == $j || $i == 4 - $j)
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'Y':
                            if ((($i == $j) && $i < 3) || (($i == 4 - $j) && $i < 3) || ($j == 2 && $i > 2))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case 'Z':
                            if ($i == 0 || $i == 4 || $i == 4 - $j)
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                        case ' ':
                            if (($i >= 0 && $i <= 4) || ($j >= 0 && $j <= 4))
                            {
                                echo "<td style = 'background-color:$color; border: 2px solid $invertColor;' >";
                                echo "&nbsp" . "<br />";
                            }
                            else
                            {
                                echo "<td><br />";
                            }
                            break;
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        
        function isNumber($char)
        {
            return ctype_digit($char);
        }
        
        function drawNumber($char, $color)
        {
            
        }
        
        function addLEDCell($text, $style)
        {
            // Get the lenght of the string
            $textLen = strlen($text);
            
            // Main text processing loop
            for ($p = 0; $p < $textLen; $p++)
            {
                $char = $text[$p];
                
                if (isNumber($char))
                {
                    drawNumber($char, $style);
                }
                else if (isLetter($char))
                {
                    drawLetter($char, $style);
                }
            }
        }
       
       /* Transform a dec to a hex */
        function generateHexColor()
        {
            $dec = rand(0,255);
            //echo "Dec= $dec<br>";
            
            $hex = dechex ($dec);
            //echo "Hex= $hex<br><br>";
            
            return $hex;
        }
        
        /* Create random hex */
        function randomHex()
        {
            $r = generateHexColor();
            $g = generateHexColor();
            $b = generateHexColor();
            
            $hex = "#";
            $hex .= str_pad($r, 2, "0", STR_PAD_LEFT);
            $hex .= str_pad($g, 2, "0", STR_PAD_LEFT);
            $hex .= str_pad($b, 2, "0", STR_PAD_LEFT);
            
            return $hex;
        }
        
        /* Transform rgb to hex*/
        function rgb2Hex($rgb)
        {
            $hex = "#";
            $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
            $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
            $hex .= str_pad(dechex($rgb[3]), 2, "0", STR_PAD_LEFT);
            
            return $hex;
        }
        
        /* Transform hex to rgb */
        function hex2Rgb($hex)
        {
           $hex = str_replace("#", "", $hex);
        
           if(strlen($hex) == 3)
           {
              $r = hexdec(substr($hex,0,1).substr($hex,0,1));
              $g = hexdec(substr($hex,1,1).substr($hex,1,1));
              $b = hexdec(substr($hex,2,1).substr($hex,2,1));
           }
           else
           {
              $r = hexdec(substr($hex,0,2));
              $g = hexdec(substr($hex,2,2));
              $b = hexdec(substr($hex,4,2));
           }
           $rgb = array($r, $g, $b);
           //return implode(",", $rgb); // returns the rgb values separated by commas
           return $rgb; // returns an array with the rgb values
        }
        
        /* Invert the color */
        function invertColor($color)
        {
            $rgb = hex2Rgb($color);
            $new_rgb = array();
            
            for ($i = 0; $i < 3; $i++)
            {
                $new_rgb[$i] = 255 - $rgb[$i];
            }
            
            return rgb2Hex($new_rgb);
        }
        
        /*Main*/
        echo "<div class=\"center\">" ;
        foreach (range('A', 'E') as $char)
        {
            addLEDCell($char, "");
        }
        echo "</div>";
        
        echo "<div class=\"center\">" ;
        foreach (range('F', 'J') as $char)
        {
            addLEDCell($char, "led");
        }
        echo "</div>";
        
        echo "<div class=\"center\">" ;
        foreach (range('K', 'P') as $char)
        {
            addLEDCell($char, "");
        }
        echo "</div>";
        
        echo "<div class=\"center\">" ;
        foreach (range('Q', 'U') as $char)
        {
            addLEDCell($char, "led");
        }
        echo "</div>";
        
        echo "<div class=\"center\">" ;
        foreach (range('V', 'Z') as $char)
        {
            addLEDCell($char, "");
        }
        echo "</div>";
        
    ?>
    </body>
</html>