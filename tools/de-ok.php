<?php

echo "Masukan Bilangan Desimal : ";
$oct = trim(fgets(STDIN));

echo "Oktal : " . base_convert($oct,10,8) ."\n";
?>