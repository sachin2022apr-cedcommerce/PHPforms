
    <html>
        <head>
            <link rel="stylesheet" href="style3.css">
        </head>
    <body>
    <div class="inputDiv">
    <form action="" method="post">
    Length of Rectangle <input type="number" name="length" class="num1"> mtr<br>
   
    Width of Rectangle <input type="number" name="width" class="num2"> mtr<br>
    
    <input type="submit" name = "submit" class = "cal" value = "Calculate Area & Parimeter">
    </div>
    <?php
        
        $length = ($_POST["length"]);
        $width = ($_POST["width"]);
        $operation = ($_POST["submit"]);
        $area = $length*$width;
        $peri = 2*($length + $width);
        echo "<div class = 'calDiv'>";
        echo "Area is $area sq. mtr.<br>";
        echo "<br>Perimeter is $peri sq. mtr."; 
        echo "</div>";
    ?> 
    

    </form>
    
    </body>
    </html>
