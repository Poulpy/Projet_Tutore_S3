<?php

session_start();

$path_of_class_cours = "classes" . DIRECTORY_SEPARATOR . "cours.php";
$path_of_config_ini = "config" . DIRECTORY_SEPARATOR . "config.ini";

require_once($path_of_class_cours);

$GLOBALS["correspondancesDates"] = array("0"=>"6", "1" => "0", "2" => "1", "3" => "2", "4" => "3", "5" => "4", "6" => "5"); 

if (file_exists($path_of_config_ini)) {
    $GLOBALS["config"] = parse_ini_file($path_of_config_ini);
    $GLOBALS["config_tree"] = parse_ini_file($path_of_config_ini, true);
}


?>