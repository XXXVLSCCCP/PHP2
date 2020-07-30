<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 3 задание 2</title>
</head>
<body>

<?php
$a = 0;

do{
    if($a == 0){
    echo $a."-Нуль".'</br>'; };
    if($a%2 == 0 && $a !=0){
        echo $a."-Четоное число".'</br>'; };
    if( $a%2 != 0 ){
        echo $a."-Нечетное число".'</br>'; };
        
        $a ++;

}
while($a<=10);


?>
    
</body>
</html>