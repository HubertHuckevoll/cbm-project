<?php

/**
 * Auto loader
 * ________________________________________________________________
 */
spl_autoload_register(function($className)
{
  $fname = null;
  $ct = substr($className, -1);

  switch($ct)
  {
    case 'V':
      $fname = './vw/'.$className.'.php';
    break;
  }

  if (file_exists($fname))
  {
    require_once($fname);
  }

});

?>