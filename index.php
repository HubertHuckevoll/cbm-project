<?php

require_once('../cbm/cbmLoader.php');
require_once('./loader.php');

try
{
  $talR = new cbmAppC('cbm.datastore');
  $talR->runWithPathInfo();
}
catch (Exception $e)
{
  die($e->getMessage());
}


?>