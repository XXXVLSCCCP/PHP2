<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание первое</title>
</head>
<body>
<?php

$files = scandir('img');

for($i=2; $i<count($files); $i++):?>
   
<a  href="img/<?=$files[$i]?>" target='_blank'><img width='30%' src="img/<?=$files[$i]?>" alt=""></a>


<?php
endfor;
?>
    
</body>
</html>