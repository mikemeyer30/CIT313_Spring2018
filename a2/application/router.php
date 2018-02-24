<?php

  function classLoad($class) {
    if (file_exists('application/' . strtolower($class) . '.class.php')) {
      require_once 'application/' . strtolower($class) . '.class.php';
    } else if (file_exists('application/models/' . strtolower($class) . '.class.php')) {
      require_once 'application/models/' . strtolower($class) . '.class.php';
    } else if (file_exists('application/controllers/' . strtolower($class) . '.class.php')) {
      require_once 'application/controllers/' . strtolower($class) . '.class.php';
    }
  }

  spl_autoload_register('classLoad');

  new Controller();


?>
