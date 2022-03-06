<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>

    <form action="" method="post">

        <input type="number" name="hai" id="number">
        <input type="submit" name="submit" value="SUBMIT">
    
    </form>
    
    <?php
        
        if($_POST)
        {
            $fact=1;
            $number=$_POST['hai'];

            echo "Factorial of $number"."<br>";

            for($i=1;$i<=$number;$i++){
                $fact=$fact*$i;
            }

            echo $fact;
        }
       
    ?>
</body>
</html>