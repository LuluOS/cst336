<?php
    // need this to start session tracking IN EVERY PHP page using session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Confirmation </title>
        <link rel="stylesheet" type="text/css" href="css/theme.css"> 
    </head>
    <body>
        <div class="container">
            <div class="content">
                
                <p>Dear <strong><?= $_POST["name"] ?></strong>,</p>
                <p>Thank you for supporting your candidate <strong><?= $_POST["candidate"] ?></strong></p>
                <br>                
                <p>You ordered these products:</p>
            
                <?php
                    echo "<div class=\"center\">";
                        $price = 0;
                        
                        if(!empty($_POST['merchandise']))
                        {
                            foreach($_POST['merchandise'] as $value)
                            {
                                echo $value . "<br>";
                                switch ($value)
                                {
                                    case "Mug (\$15)":
                                        $price += 15;
                                        break;
                                    case "Cap (\$20)":
                                        $price += 20;
                                        break;
                                    case "Tote Bag (\$10)":
                                        $price += 10;
                                        break;
                                    case "Pin (\$5)":
                                        $price += 5;
                                        break;
                                }
                            }
                        }
                        else
                        {
                            echo "Nothing<br>";
                        }
                    
                        $month = $_POST["month"];
                        if (empty($month))
                        {
                            echo "0-month Campaign Magazine Subscription";
                        }
                        else
                        {
                            echo $month . "-month Campaign Magazine Subscription";    
                        }
                        
                        $price += $_POST["month"] * 10;
                    echo "</div>";        
                    echo "<p>Total: $" . $price . "</p>";
                ?>
        
            </div>
        </div>
    </body>
</html>