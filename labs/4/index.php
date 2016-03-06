<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contribute to Your Candidate!</title>
        <link rel="stylesheet" type="text/css" href="css/theme.css"> 
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1> Support your Presidential Candidate</h1>
                <div class="banner">
                    <img src="img/candidates.jpg"></img>
                </div>
                
                <div class="entryForm">
                    <form action="confirmation.php" method="POST">
                        <div class="formEntry">
                            <div id="nameField">
                                <p>Enter your name:
                                <input type="text" name="name" required/></p>
                            </div>
                            
                            <div id="ageField">
                                <p>Enter your age:
                                <input type="number" name="age" min="18" max="100" required/>
                                (Must be 18 or older)</p>
                            </div>
                            
                            <div id="candidateField">
                                <p>Select your Candidate:
                                <select name="candidate" required>
                                    <option selected disabled hidden value = ''></option>
                                    <option value="Bernie Sanders">Bernie Sanders</option>
                                    <option value="Donald Chump">Donald Chump</option>
                                    <option value="Hilary Clinton">Hilary Clinton</option>
                                    <option value="Ted Cruz">Ted Cruz</option>
                                </select>
                                </p>
                            </div>
                            
                            <div id="merchandise">
                                <h3>Merchandise</h3>
                                <p><input type="checkbox" name="merchandise[]" value="Mug ($15)">Mug ($15)</p>
                                <p><input type="checkbox" name="merchandise[]" value="Cap ($20)">Cap ($20)</p>
                                <p><input type="checkbox" name="merchandise[]" value="Tote Bag ($10)">Tote Bag ($10)</p>
                                <p><input type="checkbox" name="merchandise[]" value="Pin ($5)">Pin ($5)</p>
                            </div>
                            
                            <div>
                                <h3>Campaign Magazine ($10 per month)</h3>
                                <div class="radios">
                                    <input type="radio" name="month" value="1"> 1 month
                                    <input type="radio" name="month" value="3"> 3 months
                                    <input type="radio" name="month" value="6"> 6 months
                                    <input type="radio" name="month" value="12"> 12 months
                                </div>
                            </div>
    
                        </div>
                        
                        <div class="formSubmission">
                            <input class="submit" type="image" src="img/buynow.png" alt="Submit">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
