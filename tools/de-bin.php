<?php

echo "Masukan Bilangan Desimal : ";
$oct = trim(fgets(STDIN));

echo "Biner : " . base_convert($oct,10,2) ."\n";
?>