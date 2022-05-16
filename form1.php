
    <html>
    <body>
    <?php
        if (isset($_POST['submit'])) {
            $unit = ($_POST["unit"]);
            if( $unit <= 50)
                $price = $unit*3.5;
            elseif( $unit <= 150)
                $price = (50 * 3.5) + ($unit - 50) * 4 ;
            elseif( $unit <= 250)
                $price = (50 * 3.5) + (100 * 4) + ($unit - 150) * 5.20;
            elseif( $unit > 250)
                $price = (50 * 3.5) + (100 * 4) + (100 * 5.20) + ($unit - 250)*6.50;
            
        }
        
    ?>

    <form action="" method="post">
    Unit: <input type="text" name="unit"><br>
    
    <input type="submit" name = "submit">
    
    <?php 
    echo "<br>Electricity Bill is ".$price;
    ?>

    </form>
    
    </body>
    </html>