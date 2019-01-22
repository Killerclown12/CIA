
<?php
error_reporting(0);
echo "\n\e[1;35m==================[ AUTO VISITOR ]=====================\e[0m\r\n";
$banner     = "   
\e[1;35m================================================
Feature :
- Auto change IP.
- Support Proxy.
- Add delay time.
- 20 UserAgent.
\e[1;31mNB : 
#URL wajib di awali dengan 'http:// or https:// Paham ngak Cok'
#Contoh isi url nya : https://killerclowntutor.blogspot.com/2018/11/hack-ig-via-termux-vol-2.html?m=1
#Proxy : IP:PORT | Misalkan : 127.0.0.1:80 | atau Kosongin Aja Cok! \e[0m
\e[1;35m================================================\e[0m\n";
print $banner;
$authorceo = 'Killer_Clown';
echo "\nMasukin URLnya Cok ! : ";
$url = trim(fgets(STDIN, 1024)); /** MANUAL URL $url = 'URL or Target'; **/
echo "\nJumlahnya Cok !    : ";
$jumlah = trim(fgets(STDIN, 1024));
echo "\nIsi Proxynya Cok   : ";
$proxy       = rtrim( fgets( STDIN));
echo "\n";
echo "\n\e[1;35m+==============\e[0m[# \e[1;32mTunggu Lagi Proses\e[0m #]\e[1;35m==============+\e[0m\n";
// $url = 'http://'.substr(trim($url), 1);
for ($x=1; $x<=$jumlah; $x++) {
/** FUNCTION CURL **/
$Killer_Clown = curl_init();
curl_setopt($Killer_Clown, CURLOPT_URL, "https://idsystem404.000webhostapp.com/api/api-autovisitor.php?url=".$url);
curl_setopt($Killer_Clown, CURLOPT_REFERER, "https://www.google.com");
curl_setopt($Killer_Clown, CURLOPT_HEADER, 0);
curl_setopt($Killer_Clown, CURLOPT_PROXY, $proxy);
curl_setopt($Killer_Clown, CURLOPT_HTTPPROXYTUNNEL, $proxy);
curl_setopt($Killer_Clown, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($Killer_Clown, CURLOPT_RETURNTRANSFER, true);
curl_setopt($Killer_Clown, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($Killer_Clown, CURLOPT_TIMEOUT, 10);
curl_setopt($Killer_Clown, CURLOPT_ENCODING, "gzip");
$exec = curl_exec($Killer_Clown);
if(!curl_errno($Killer_Clown)){
//$info = curl_getinfo($Killer_Clown, CURLINFO_HTTP_CODE);
$info = curl_getinfo($Killer_Clown);
$ip = $info['primary_ip'];
$port = $info['primary_port'];
$code = $info['http_code'];
curl_close($Killer_Clown);
	if ($exec == "primary_ip") {
		$jumlah += 1;
		echo "ERROR";
		flush();
		sleep(0); /** Delay **/		
	} else {
		echo "$x. [\e[1;31m $authorceo \e[0m] | URL : [\e[1;34m $url \e[0m] [\e[1;33m $ip:$port \e[0m] [ \e[1;92mSUCCESS ]\e[0m\n";
		flush();
		sleep(0); /** Delay **/		
	}
}
}
echo "\n\e[1;31mERROR : Periksa Koneksi Internet atau Isi Kolom Diatas Yang Bener Goblok!\e[0m\n";
?>