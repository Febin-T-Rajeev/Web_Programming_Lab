<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>
<body>

    <form action="" method="post">

    Enter a Number:<input type="text" name="num" id=""><br>
    <button type="submit">CHECK</button>
    
    </form>

    <?php

        if($_POST){
        $num=$_POST['num'];
        $reverse=strrev($num);

        if($num==$reverse)
            echo "The number $num is Palindrome";
        else
        echo "The number $num is not Palindrome";
        }
    ?>
    
</body>
</html>