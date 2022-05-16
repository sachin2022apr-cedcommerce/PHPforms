
    <html>
        <head>
            <link rel="stylesheet" href="style2.css">
        </head>
    <body>
    <?php
        $operation = ($_POST["choice"]);
        $num1 = ($_POST["num1"]);
        $num2 = ($_POST["num2"]);
        switch($operation){
            case '+':
            $res = $num1 + $num2;
            break;
            
        
            case '-':
            $res = $num1 - $num2;
            break;
        
            case '*':
            $res = $num1 * $num2;
            break;
            
            case '/':
            $res = $num1 / $num2;
            break;
        }
        
        

    ?>

    <form action="" method="post">
    Number1: <input type="number" name="num1" class="num"><br>
   
    Number2: <input type="number" name="num2" class="num"><br>
    
    <?php 
    echo "Result:   <input type='text' readonly name='result' class = 'res' value = '$res' ><br>";
    ?>

    <input type="submit" name = "choice" class = "add" value = "+">
    
    <input type="submit" name = "choice" value = "-">

    <input type="submit" name = "choice" value = "X">

    <input type="submit" name = "choice" value = "/">

    

    </form>
    
    </body>
    </html>