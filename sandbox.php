<?php 

// ternary operators

$score=20;

// if($score >40) {
//     echo "high score!";
// } else {
//     echo "low score!";
// }

$val= $score>40 ?  "high score!" : "low score!";
echo $val;

// superglobals

echo $_SERVER["SERVER_NAME"] . "<br />";
echo $_SERVER["REQUEST_METHOD"] . "<br />";
echo $_SERVER["SCRIPT_FILENAME"] . "<br />";
echo $_SERVER["PHP_SELF"] . "<br />";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>