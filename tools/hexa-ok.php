<?php

echo "Masukan Bilangan Hexadecimal : ";
$oct = trim(fgets(STDIN));

echo "Oktal : " . base_convert($oct,16,8) ."\n";
?>