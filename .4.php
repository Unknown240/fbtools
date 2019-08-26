#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
date_default_timezone_set('Asia/Jakarta');
$date   = date('d-M-Y H:i:s');
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
pilih:
system($bersih);
echo "\n$red
 _____ ____            _____           _                                   |  ___| __ )          |_   _|__   ___ | |___
| |_  |  _ \   _____    | |/ _ \ / _ \| / __|                              |  _| | |_) | |_____|   | | (_) | (_) | \__ \
|_|   |____/            |_|\___/ \___/|_|___/";

echo "\n$blue
Author  : Al2VyN
Mod     : Unknown240
Version : 0.1 (Private)
Date    : $date\n";
    echo "$blue-------------------------------------------------------------------------$green\n";
@header('Content-Type: text/html; charset=UTF-8');
function input($echo) {
    echo "$echo : ";
}
echo "$red Please log in to your Facebook account so that there is no Checkpoint !! $green\n";
input("Insert your Email/User ID");
$iduser=trim(fgets(STDIN));
input("Insert your Password ");
$pass=trim(fgets(STDIN));
echo "$blue-------------------------------------------------------------------------$green\n";
$konten=file_get_contents('https://b-api.facebook.com/method/auth.login?access_token=237759909591655%25257C0f140aabedfb65ac27a739ed1a2263b1&format=json&sdk_version=2&email='.$iduser.'&locale=en_US&password='.$pass.'&sdk=ios&generate_session_cookies=1&sig=3f555f99fb61fcd7aa0c44f58f522ef6');
$json= json_decode($konten, true);
$userid = $json['session_cookies'][0]['value'];
$token = $json['access_token'];
if(preg_match('/session_key/', $konten)) {
	echo "Your Token :\t".$token."\n";
	echo "Your ID Facebook :\t".$userid."\n";
	$tulis=fopen("hasil.txt","w+");
	fwrite($tulis,$token);
	fclose($tulis);
	if(file_exists("hasil.txt")) {
		echo " Your token save in -> hasil.txt\n";
	}
 } else {	
   die("Check your Username/Password");
   }
   echo "$white-------------------------------------------------------------------------$green\n";
?>
