<?php
//set env variables from .env file
$root = $_SERVER['DOCUMENT_ROOT'];
$envFilepath = "$root/.env";
$env = file_get_contents($envFilepath);
$lines = explode("\n",$env);
foreach($lines as $line){
  preg_match("/([^#]+)\=(.*)/",$line,$matches);
  if(isset($matches[2])){
    $val = str_replace('"', '', trim($line));
    putenv($val);
  }
} 
// end of .env part

// router.php 
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} elseif ( $_SERVER["PHP_SELF"] == '/') { 
    require_once('src\index.php');
} else { 

  require_once('src\\' . $_SERVER["PHP_SELF"]);
}
?>