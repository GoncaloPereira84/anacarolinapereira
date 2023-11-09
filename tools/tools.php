<?php
function cleanVariable($var){
	global $mysqli;
	return utf8_decode(strip_tags($mysqli->real_escape_string($var)));
}

function getPathInfo(){
	$pathinfo = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : false) ;
    $pathinfo = preg_replace('/\?.*/', '', $pathinfo);
	return $pathinfo ? preg_split('|/|', $pathinfo, -1, PREG_SPLIT_NO_EMPTY) : false;
}

/*CODIGO POR BRUNO GOUVEIA*/
function CleanToUrl($str, $replace=array(), $delimiter='-') {
//ARRANJAR UMA FUNCAO MELHOR
    setlocale(LC_ALL, 'en_US.UTF8');
    if( !empty($replace) ) {
        $str = str_replace((array)$replace, ' ', $str);
    }
    $str = (trim(Truncate(strip_tags($str))));
    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
    $clean = strtolower(trim($clean, '-'));
    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
    return $clean;
}
function containsInjectionAttempt($input) {
    if (stristr("\r", $input) ||
    stristr("\n", $input) ||
    stristr("%0a", $input) ||
    stristr("%0d", $input) ||
    stristr("Content-Type:", $input) ||
    stristr("bcc:", $input) ||
    stristr("to:", $input) ||
    stristr("cc:", $input)) {
        return true;
    } else {
        return false;
    }
}
function spamcheck($field){
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
}

Function DateFormat($str,$pad="-"){
	$str = substr($str,8,2) . "-" . substr($str,5,2) . "-" .substr($str,0,4);
	return $str;
	
}

function generatePassword($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);
    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }
    return $result;
}
function PassEncoder($value){
	return password_hash($value,PASSWORD_DEFAULT);
}
//maudar para apasta de funçoes uteis
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

Function ConnectMySQLi($dbHost, $dbUser,$dbPass, $dbName){
    global $mysqli;
    $mysqli = new mysqli($dbHost, $dbUser,$dbPass, $dbName);
    // if(!$mysqli || $mysqli->connect_errno > 0){
    //     Logout(); 
    //     die("Unable to connect to database client [" . $mysqli->connect_error . "][$dbHost, $dbUser] ");
    //     //se tudo estiver bem e mesmo assim nao funcionar podera ser o wildcard para o easyoffice q nao esta definido no alojamento do cliente
    // }else{
        // $mysqli->query("SET NAMES 'utf8'");
        return $mysqli;
    // }
}
Function CloseMySQLi($mysqli){
    global $mysqli;
 
    if(isset($mysqli) && !$mysqli->connect_error && $mysqli->ping()){
        $mysqli->close();
    }
}

function array_flatten($array) { 
    if (!is_array($array)) { 
      return FALSE; 
    } 
    $result = array(); 
    foreach ($array as $key => $value) { 
      if (is_array($value)) { 
        $result = array_merge($result, array_flatten($value)); 
      } 
      else { 
        $result[$key] = $value; 
      } 
    } 
    return $result; 
  } 