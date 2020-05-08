<?php

echo "Masukan Bilangan Oktal : ";
$oct = trim(fgets(STDIN));

echo "Desimal : " . base_convert($oct,8,10) ."\n";
?>