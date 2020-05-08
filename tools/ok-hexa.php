<?php

echo "Masukan Bilangan Oktal : ";
$oct = trim(fgets(STDIN));

echo "Hexadecimal : " . base_convert($oct,8,16) ."\n";
?>