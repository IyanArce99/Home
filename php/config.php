<?php
session_start();
/*
 * CONFIG FILE - SOLUNA CUSTOMER AREA
 * 
 * 
 */
if($_SERVER['SERVER_NAME']=='localhost'){
 	define('entorno_tpv','test');
	define('clave_tpv','sq7HjrUOBfKmC576ILgskD5srU870gJ7');    
	define('WEB_ROOT','http://localhost/web_2019/');
	define('API_ENDPOINT','');
	define('PASSWD_SEED','s0lun4rul3sb1tch');
	define('ENDPOINT','https://belife.io/apidev/');
	 define('PAYPAL_SANDBOX',true);
	 define('HTTP_APIKEY','kvuUazUVNWEqrCK5XYYzma6VLQTv4AJg');
	 define('HTTP_MANAGERURL','soluna');
 }
 if(strpos( $_SERVER["PHP_SELF"],'dev') !== false){
 	define('entorno_tpv','test');
	define('clave_tpv','sq7HjrUOBfKmC576ILgskD5srU870gJ7');    
	define('WEB_ROOT','https://solunapilates.es/dev/');
	define('API_ENDPOINT','');
	define('PASSWD_SEED','s0lun4rul3sb1tch');
	define('ENDPOINT','https://belife.io/apidev/');
	 define('PAYPAL_SANDBOX',true);
	 define('HTTP_APIKEY','kvuUazUVNWEqrCK5XYYzma6VLQTv4AJg');
	 define('HTTP_MANAGERURL','soluna');
 }else{
 	//PRO
 	 define('WEB_ROOT','https://solunapilates.es/');
	 define('API_ENDPOINT','');
	 define('PASSWD_SEED','s0lun4rul3sb1tch');
     define('entorno_tpv','live');
     define('clave_tpv','ipkkjtmPkwJ/OBwrybxArO71dGGl4dMs');  
	 define('ENDPOINT','https://api.belife.io/'); 
	 define('PAYPAL_SANDBOX',false);
	 define('HTTP_APIKEY','kvuUazUVNWEqrCK5XYYzma6VLQTv4AJg');
	 define('HTTP_MANAGERURL','soluna');
 }
 define('TIMEZONE', 'Europe/Madrid');
	 date_default_timezone_set(TIMEZONE);
	$now = new DateTime();
	$offset = $now->getOffset();

?>
