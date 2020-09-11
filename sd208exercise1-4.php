<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
</head>
<body>
<?php

function fizzBuzz(){   
    for($num=1; $num <= 100; $num++){
      if ($num%3==0 && $num%5==0){
        echo "FizzBuzz <br/>";
       
    }
        else if ($num%3==0){
           echo "Fizz <br/>";
           
       }
            else if ($num%5==0){
                echo "Buzz <br/>";
                
            }
               else{
                echo $num. "<br/>";
            }
}
}

fizzBuzz();



?>
    
</body>
</html>