<!doctype html>
<html>
<head>
    <title>Homework-1</title>
    <style type="text/css">
        .red
        {
            color: red;
        }
        
        .blue
        {
            color: blue;
        }
    </style>
</head>

<?php
    function is_prime($number)
    {
        $prime = true;
        for($i = 2; $i < $number/2 ; $i++)
        {
            if($number % $i == 0)
            {
                $prime = false;
                break;
            }
        }
        return $prime;
    }
?>

<body>

<?php
    $number = $_GET["number"];
    if(!is_numeric($number))
    {
        echo "<p class='red'>The parameter is not a number.</p>";
    }
    elseif($number < 0 || $number > 19999)
    {
        echo "<p class='red'>The parameter is not within the range [0,19999].</p>";
    }
    elseif(is_prime($number))
    {
        echo "<p>The number $number is prime!</p>";
    }
    else
    {
        echo "<p class='blue'>The number $number is NOT prime!</p>";
    }
?>


</body>

</html>