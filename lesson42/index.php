<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$files = scandir('small');

for($i=2; $i<count($files); $i++):?>
   
<a href="big/<?=$files[$i]?>" target='_blank'><img  src="small/<?=$files[$i]?>" alt=""></a>


<?php
endfor;
?>
    
</body>
</html>