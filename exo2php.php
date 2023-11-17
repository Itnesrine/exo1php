<?php
$notes = [15, 17, 20, 13, 19];
$somme = 0;
$count=0;
foreach ($notes as $key => $value) {
    $somme = $value + $somme;
    $count=$count+1;
}
echo $somme / $count;

$somme=0;
for ($i=0; $i <$count; $i++) { 
    $somme=$notes[$i]+$somme;

}
echo $somme/$count;
