<?php

$file = fopen("tasks.txt" , "r");

$header = fgetcsv($file,0,"\t");

echo implode("\t" , $header). "\n";

while (($row= fgetcvs($file, 0, "\t")) !== false){
    echo implode ("\t",$row). "\n";
}
fclose($file).
?>