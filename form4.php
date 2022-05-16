
    <html>
        <head>
            <link rel="stylesheet" href="style4.css">
        </head>
        
    <body>
    
    <div class="inputDiv">
    <form action="" method="post">
    <input type="number" name="time" class="time"><br><br>
    <input type="radio" class="rButton" name="radio" value="hours-to-mins">
    <label>hours to mins</label><br><br>
    <input type="radio" class="rButton" name="radio" value="hours-to-seconds">
    <label>hours to seconds</label><br><br>

    <?php
        if(isset($_POST['radio'])){
           
        $time = ($_POST["time"]);
        $operation = ($_POST["submit"]);
        $select = ($_POST["radio"]);
        
            if($_POST["radio"] == "hours-to-mins"){
                $res = $time*60;
                echo "<div class = 'calDiv'>";
                echo "$time hours = $res mins<br>";
                echo "</div>";
            }
            elseif($_POST["radio"] == "hours-to-seconds"){
                $res = $time*3600;
                echo "<div class = 'calDiv'>";
                echo "$time hours = $res seconds<br>";
                echo "</div>";
            }
        }
    ?> 
     


    <input type="submit" name = "submit" class = "cal" value = "Convert">
    </div>
    
    

    </form>
    
    </body>
    </html>
