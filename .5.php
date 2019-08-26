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
echo "\n$yellow
_____ ____            _____           _                                   |  ___| __ )          |_   _|__   ___ | |___
| |_  |  _ \   _____    | |/ _ \ / _ \| / __|                              |  _| | |_) | |_____|   | | (_) | (_) | \__ \
|_|   |____/            |_|\___/ \___/|_|___/";
echo "\n$blue
Author  : Al2VyN
Mod     : Unknown240
Version : 0.1 (Private)
Date    : $date\n";
    echo "$red-------------------------------------------------------------------------$green\n";
@header('Content-Type: text/html; charset=UTF-8');
function input($echo) {
    echo "$echo : ";
}
input("Want to use a bot? / mau menggunakan bot? [y/n]");
$pilih = trim(fgets(STDIN));
if($pilih == "n") {
    die("$red(!)$OUT$red (!)\n");
} elseif($pilih == "y") {
    echo "$red-------------------------------------------------------------------------$green\n";
    input("Insert Your Token Fb! / Masukan Token Fb");
    $token = trim(fgets(STDIN));
    echo "$red-------------------------------------------------------------------------$green\n";
} else {
    echo "$red(!)$yellow Invalid$red (!)$green\n";
    goto pilih;
}
input("What do you want to comment on? / apa yang mau kamu Comment?");
$msgx=trim(fgets(STDIN));
    echo "$red-------------------------------------------------------------------------$green\n";
input("How many comments? / Berapa Coment?");
$jumlah=trim(fgets(STDIN));
    echo "$red-------------------------------------------------------------------------$green\n";
$ambil = "https://graph.facebook.com/me/home?fields=id,from,name,message,type&limit=".$jumlah."&access_token=".$token;
$ambil = file_get_contents($ambil);
$ambil = json_decode($ambil, true);
foreach($ambil['data'] as $data) {
        $stat_id = $data['id'];
        $post_id = explode("_", $stat_id);
        $data_id = $data['id']; // data id
        $data_name = $data['from']['name']; // pemilik status
        $data_time = $data['created_time']; // waktu status
        $data_pesan = $data['message'];
        $msg=$msgx . "\n";
        $url ="https://graph.facebook.com/".$post_id[1]."/comments";
$var="method=POST&message=".$msg."&access_token=".$token;

           $ch=curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $var);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch);
                curl_close($ch);
echo "Your Comment / Komentar mu => $msg\n";
if(preg_match('/error/', $result)) {
     die("$red(!)$yellow Token Invalid$red (!)\n");
                } else {
        echo "Status :".$data_pesan."\n";
        echo "Status maker / Pembuat status:".$data_name."\r\n";
        echo "ID Status / Status ID :".$post_id[1]."\n";
        echo "Success / Sukses\n";
        $sleep = array(
        "5",
    ); // Detik
    $slp   = array_rand($sleep);
    $slp2  = $sleep[$slp];
    echo "pause during $slp2 / Jeda selama $slp2 \n";
    echo "$red-------------------------------------------------------------------------$green\n";
    sleep($slp2);
                }
        }
        unset($data);
?>
