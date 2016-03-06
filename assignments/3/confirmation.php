<?php
    // need this to start session tracking IN EVERY PHP page using session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title> Confirmation </title>
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
    </head>
    <body>
        
        <div class="container">
            <div class="content">
                
                <div class="center">
                    <h1>RECEIPT</h1>
            
                <?php
                    echo "<div class=\"receipt\">";
                        $price = 0;
                        
                        if(empty($_POST['bread']))
                        {
                            $breadErr = "Bread is required!";
                            echo $breadErr;
                        }
                        else
                        {
                           echo $_POST["bread"] . "  \$1.50<br>";
                           $price += 1.50;
                        }
                        
                        if(!empty($_POST['cheese']))
                        {
                           echo $_POST["cheese"] . "  \$2.00<br>";
                           $price += 2;
                        }
                        
                        if(!empty($_POST['meat']))
                        {
                           echo $_POST["meat"] . "  \$2.00<br>";
                           $price += 2;
                        }
                        
                        if(!empty($_POST['veggies']))
                        {
                            foreach($_POST['veggies'] as $value)
                            {
                                echo $value . "  0.50&#162;<br>";
                                $price += 0.50;
                            }
                        }
                        
                        if(!empty($_POST['sauce']))
                        {
                            foreach($_POST['sauce'] as $value)
                            {
                                echo $value . "  0.50&#162;<br>";
                                $price += 0.50;
                            }
                        }
                        
                    echo "</div>";
                    
                    
                    echo "<hr>";
                    echo "<h3>Total: $" . number_format ( $price, 2 ) . "</h3>" ;
                    
                    if ($price < 5)
                    {
                        echo "<img class=\"banner\" src=\"img/sandwich1.png\"></img>";
                    }
                    else if ($price < 9)
                    {
                        echo "<img class=\"banner\" src=\"img/sandwich2.png\"></img>";
                    }
                    else
                    {
                        echo "<img class=\"banner\" src=\"img/sandwich3.png\"></img>";
                    }    
                echo "</div>";
                
            echo "</div>";
            
                ?>
        </div>
        
    </body>
</html>

