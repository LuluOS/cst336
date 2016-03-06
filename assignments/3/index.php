<!--You could do a little menu that builds a sandwich-->
<!--Have radio buttons so that you can only pick one kind of meat,
with checkboxes for vegetables, cheese, or sauces, and a text box for the type of bread-->

<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title> Sandwich </title>
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="banner">
                    <img src="img/sandwiches.png"></img>
                </div>
                <h1>Welcome to the makingUrBurger</h1>
                
                <form action="confirmation.php" method="POST">
                    
                    <p>Choose your type of bread:
                        <select name="bread" required>
                            <option selected disabled hidden value = ''></option>
                            <option value="Wheat">Grain Wheat</option>
                            <option value="Multigrain">Multigrain</option>
                            <option value="White">White</option>
                            <option value="Italian">Italian</option>
                        </select>
                    </p>
                    
                    <p>Choose your type of cheese:</p>
                    <div class="radios">
                        <input type="radio" name="cheese" value="American"> American<br>
                        <input type="radio" name="cheese" value="Pepper Jack"> Pepper Jack<br>
                        <input type="radio" name="cheese" value="Provolone"> Provolone<br>
                        <input type="radio" name="cheese" value="Cheddar"> Cheddar<br>
                        <input type="radio" name="cheese" value="Swiss"> Swiss<br>
                    </div>
                    
                    <p>Choose your type of meat:</p>
                    <div class="radios">
                        <input type="radio" name="meat" value="Chicken"> Chicken<br>
                        <input type="radio" name="meat" value="Atum"> Atum<br>
                        <input type="radio" name="meat" value="Roast Beef"> Roast beef<br>
                        <input type="radio" name="meat" value="Carne Assada"> Carne assada<br>
                    </div>
                    
                    <p>Choose your type of vegetables:</p>
                    <div class="radios">
                        <input type="checkbox" name="veggies[]" value="Lettuce">Lettuce<br>
                        <input type="checkbox" name="veggies[]" value="Tomatos">Tomatos<br>
                        <input type="checkbox" name="veggies[]" value="Olives">Olives<br>
                        <input type="checkbox" name="veggies[]" value="Peppers">Peppers<br>
                        <input type="checkbox" name="veggies[]" value="Pickles">Pickles<br>
                        <input type="checkbox" name="veggies[]" value="Avocado">Avocado<br>
                    </div>
                    
                    <p>Choose your type of souce:</p>
                    <div class="radios">
                        <input type="checkbox" name="sauce[]" value="Ketchup">Ketchup<br>
                        <input type="checkbox" name="sauce[]" value="Maionese">Maionese<br>
                        <input type="checkbox" name="sauce[]" value="Barbecue">Barbecue<br>
                        <input type="checkbox" name="sauce[]" value="Mostard">Mostard<br>
                        <input type="checkbox" name="sauce[]" value="Ranch">Ranch<br>
                    </div>
                    
                    <div class="formSubmission">
                        <input class="submit" type="image" src="img/hamburger.png" alt="Submit">
                    </div>
                </form>    
                
            </div>
        </div>
        
    </body>
</html>