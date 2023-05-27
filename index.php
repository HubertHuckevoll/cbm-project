<?php

require_once('../cbm/loader.php');

try
{
  $router = new cbmAppC('cbmtest.data');
  $router->run();
}
catch (Exception $e)
{
  die($e->getMessage());
}


?>