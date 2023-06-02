<?php

require_once('../cbm/loader.php');

$prefs = [
  'indexArticlesPerPage' => 1
];

$router = new cbmAppC('cbmtest.data', $prefs);
$router->run();

?>