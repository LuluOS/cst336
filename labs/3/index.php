<?php
    
    /*//Declare & Inicialize
    //$family = [];
    $family = ["jason", "tina"];
    $kids = array();
    $kids[] = "tanner";
    array_push($kids, "tristan");
    array_push($kids, "alexis");
    array_splice($kids, 2, 0, "aidan"); //(&$input , int $offset [, int $length = 0 [, mixed $replacement = array() ]])
    
    
    //Print out
    //var_dump($kids);
    
    $kidsLeng = count($kids); //Returns the number of elements in the array
    //Use: iterate or loop
    for ($f = 0; $f < $kidsLeng; $f++)
    {
        array_push($family, $kids[$f]);
    }
    
    //Print out
    //var_dump($family);
    
    //Associative array
    $extendedFamily = ["uncle" => "john",
                        "aunt" => "kate",
                        "cousin" => "kinsey"];
    
    //array_splice($extendedFamily,1,1); //kate is gone!!! --Dont use!!!--
    unset($extendedFamily["aunt"]);
    
    //var_dump($extendedFamily["aunt"]); //--Dont do it!!!--
    
    //array_push($extendedFamily, "kate"); //--Doesnt work!!!--
    //Solution: http://stackoverflow.com/questions/8289307/array-push-for-associative-arrays    
    
    $extendedFamily["aunt"] = "kate";
    //var_dump($extendedFamily);
    
    foreach($extendedFamily as $member => $name)
    {
        echo $member . ": " . $name;
        echo "<br>";
    }
    
    
    $recipe = ["salt" => "2 teaspoons",
                "pepper" => "1 tsp",
                "ham" => "2cups"];
    */
    /*foreach($recipe as $key => $value)
    {
        echo $key . ": " . $value;
        echo "<br>";
    }*/
    
    //Delete
    //unset($extendedFamily); //clean way to delete the array
    
    
    //Multi-dimensional
    $family = ["jason", "tina", 8];
    $kids = array();
    $kids[] = "tanner";
    array_push($kids, "tristan");
    array_push($kids, "alexis");
    array_splice($kids, 2, 0, "aidan"); //(&$input , int $offset [, int $length = 0 [, mixed $replacement = array() ]])
    
    $family[] = $kids;
    var_dump($family);
    
    echo "<br>";
    echo ($family[0][1]);
    echo ($family[2]);
?>
