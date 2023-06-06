<?php

require_once('../cbm/loader.php');

$prefs = [
  'articlesPerPage' => 3
];

$router = new cbmAppC('cbm-project.data', $prefs);
$router->run();

?>