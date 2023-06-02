<?php

require_once('../cbm/loader.php');

$prefs = [
  'articlesPerPage' => 3
];

$router = new cbmAppC('cbmtest.data', $prefs);
$router->run();

?>