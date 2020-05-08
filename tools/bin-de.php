<?php

echo "Masukan Bilangan Biner : ";
$oct = trim(fgets(STDIN));

echo "Desimal : " . base_convert($oct,2,10) ."\n";
?>