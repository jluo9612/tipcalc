<html>
    <head>
        <meta charset="UTF-8"> 
        <link href="styles.css" rel="stylesheet">
    </head>
    <body>

<?php

    if (! empty($_POST["subtotal"])) {
        $subtotal = $_POST["subtotal"];
        if ($_POST['rate'] == "10") {
            $total = $total*(1.1);
            echo $total;
        }
        if ($_POST['rate'] == "15") {
            $total = $total*(1.15);
            echo $total;
        }
        if ($_POST['rate'] == "20") {
            $total = $total*(1.20);
            echo $total;
        }
    
    }

?>
        
        
        
     <div>
        <form action="" method="post" name="rate">
            <input type="text" name="subtotal" placeholder="Enter a numeric value">
            <input type="submit"/>
            <input checked name="10" type="radio" value="10"/> 10%
            <input name="10" type="radio" value="15"/> 15%
            <input name="10" type="radio" value="20"/> 20%
        </form>
        
    </div>


</body>
</html>