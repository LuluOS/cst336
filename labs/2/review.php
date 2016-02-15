< !DOCTYPE html >
    <html>

<head>
    <?phph
    $pageName = "Home: ";
    include 'includes/header.php' ?>
</head>

<body>
    <h1><?= "TMNT Store" ?></h1>
    <?php
    // echo "TMNT Store"; 
        
        for ($i=0; $i <10; $i++)
        {
            jackUpPricing(rand(20,30), rand(70,80));
            echo "<br><br>";
        }
        
        function jackUpPricing($vatLevel2, $vatLevel3)
        {
            //variables:
            $product = "Raphael Costume";
            //$price = 99.99;
            $price = rand(1,99) + rand(0,99) / 100;
            $taxRate = 0.0825;
            $taxRate2 = 0.9000;
            $taxRate2 = 2.0000;
            //$taxAmount = round($price * $taxRate,2);    //number_format($price * $taxRate,2);
            
            
            
             echo "<div> $product </div>";   //print the variable product
            //echo "<div> \"$product\" </div>"; //print the variable product with quotes
           
            echo "<div><p>Price: $$price </p></div>";    //print the variable price with $ before
            
            if ($price < $vatLevel2)
            {
                $taxRate = $taxRate;
                
            }
            else
            {
                if ($price < $vatLevel3)
                {
                    $taxRate = $taxRate2;
                }
                else
                {
                    $taxRate = $taxRate3;
                }
            }
            
            
            echo "<div><p>Tax rate: $taxRate% </p></div>";    //print the variable taxRate with % after
           
            $taxAmount = round($price * $taxRate,2);
            //echo "<div> " . $price * $taxRate . " </div>";    //print the value of price variable times taxRate variable
            echo "<div><p>Tax amount: $$taxAmount </p></div>";
            
            $total = round($price + $taxAmount,2);//number_format($price + $taxAmount,2);
            echo "<div><p>Total price: $$total </p></div>";
        }
        
        
        
    ?>
</body>

</html>