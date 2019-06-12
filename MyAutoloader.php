<?php
spl_autoload_register('myAutoloader');

$classname = new TableMGame();

function myAutoloader($className){
  include 'classes/' . $className . '.php';
}

include 'mystyle.css';
include 'GameRules.js';
?>
