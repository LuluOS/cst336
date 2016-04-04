<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     
        <link rel="stylesheet" type="text/css" href="css/theme.css"> 
        <title> Find the Letter! </title>
    </head>
    
    <body>
        <div class="container">
            <div class="content">
                <h1> Find the Letter!</h1>
                
                <div class="entryForm">
                    <form action="submit.php" method="POST">
                        <div class="formEntry">
                            <div id="tableField">
                                <p>Table size:
                                    <select name="table" required>
                                        <option selected disabled hidden value = ''></option>
                                        <option value="6">6x6</option>
                                        <option value="7">7x7</option>
                                        <option value="8">8x8</option>
                                        <option value="9">9x9</option>
                                        <option value="10">10x10</option>
                                    </select>
                                </p>
                            </div>
                            
                             <div id="findLetter">
                                <p>Letter to find:
                                    <select name="letter" required>
                                        <option selected disabled hidden value = ''></option>
                                        <?php
                                            foreach (range('A', 'Z') as $char)
                                            {
                                                echo "<option>" . $char . "</option>\n";
                                            }
                                        ?>
                                    </select>
                                </p>
                              </div>
                              
                              <div id="omitLetter">
                                <p>Letter to omit:
                                    <select name="omit" required>
                                        <option selected disabled hidden value = ''></option>
                                        <?php
                                            foreach (range('A', 'Z') as $char)
                                            {
                                                echo "<option>" . $char . "</option>\n";
                                            }
                                        ?>
                                    </select>
                                </p>
                              </div>
                           
                        </div>
                        
                        <div class="formSubmission">
                            <input type="submit" value="Create table">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>