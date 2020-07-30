<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 3 задание 3</title>
</head>
<body>

<?php


$city = ["Московская область"=>[
    'Москва',
    'Зеленоград',
    'Клин'],
         'Ленинградская область'=>[
    'Cанкт-Петергург',
    'Всеволожск',
    'Павловск',
    'Кронштадт'],
          'Рязанская область'=>[
    'Сасово',
    'Касимов',
    'Рыбное'
          ]
    
          ];
          foreach($city as $region => $twn){
              echo  ($region.': ').implode(', ',$twn).'</br>';
          }

?>
    
</body>
</html>