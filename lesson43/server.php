<?php
// $print_r = ($_FILES);
$smallfile = 'small/'.$_FILES['doc']['name'];
$file = 'files/'.$_FILES['doc']['name'];
if(move_uploaded_file($_FILES['doc']['tmp_name'],$file)){
    echo "файл успешно загружен";
};
