<?php


define("ABSOLUTE_PATH", $_SERVER["DOCUMENT_ROOT"]."/");


define("ENV_FAJL", ABSOLUTE_PATH."/config/.env");
define("LOG_FAJL", ABSOLUTE_PATH."/data/log.txt");


define("SERVER", env("SERVER"));
define("DATABASE", env("DBNAME"));
define("USERNAME", env("USERNAME"));
define("PASSWORD", env("PASSWORD"));

function env($name){
    $data = file(ENV_FAJL);
    $env_value = "";
    foreach($data as $key=>$value){
        $config = explode("=", $value);
        if($config[0]==$name){
            $env_value = trim($config[1]); // trim() zbog \n
        }
    }
    return $env_value;
}