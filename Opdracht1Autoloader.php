<?php
  spl_autoload_register('myAutoloader');

  function myAutoloader($className)
  {
    include $className.'.php';
  }

  //-------------------------------------

  $classname = new Name();
?>
