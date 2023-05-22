<?php

require_once('../cbm/lb/logger.php');
require_once('../cbm/cbmLoader.php');
require_once('./loader.php');

try
{
  $talR = new cbmAppC('indexC', 'index');
  $talR->runWithPathInfo();
}
catch (Exception $e)
{
  die($e->getMessage());
}


?>