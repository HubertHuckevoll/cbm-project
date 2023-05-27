<?php

require_once('../cbm/cbmLoader.php');

try
{
  $router = new cbmAppC('cbm.datastore');
  $router->run();
}
catch (Exception $e)
{
  die($e->getMessage());
}


?>