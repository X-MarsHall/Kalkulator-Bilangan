<?php 

echo "
  _  __     _ _        _      _           
 | |/ /__ _| | |___  _| |__ _| |_ ___ _ _ 
 | ' </ _` | | / / || | / _` |  _/ _ \ '_|
 |_|\_\__,_|_|_\_\\_,_|_\__,_|\__\___/_|  
 | _ |_) |__ _ _ _  __ _ __ _ _ _    Author : MarsHall   
 | _ \ | / _` | ' \/ _` / _` | ' \   Team   : Xai Syndicate 
 |___/_|_\__,_|_||_\__, \__,_|_||_|  Github : https://github.com/X-MarsHall   
                   |___/                  
\n";
echo "1. Desimal => Biner    | 4. Oktal => Desimal    \n";
echo "2. Biner => Desimal    | 5. Hexadesimal => Oktal\n";
echo "3. Desimal => Oktal    | 6. Oktal => Hexadesimal\n";
echo "[+] Masukkan Nomor : ";
$no = trim(fgets(STDIN));
if ($no == '1') {
	echo "\n";
	include('tools/de-bin.php');
	exit();
} 

if ($no == '2') {
	echo "\n";
	include('tools/bin-de.php');
	exit();
} 

if ($no == '3') {
	echo "\n";
	include('tools/de-ok.php');
	exit();
} 

if ($no == '4') {
	echo "\n";
	include('tools/ok-de.php');
	exit();
} 

if ($no == '5') {
	echo "\n";
	include('tools/hexa-ok.php');
	exit();
} 

if ($no == '6') {
	echo "\n";
	include('tools/ok-hexa.php');
	exit();

} else {
	echo "\nLu Buriq\n";
}

?>