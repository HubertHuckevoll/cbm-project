<?php

require_once('../cbm/loader.php');

$pathInfoAssignCallback = function($pathInfoParts)
{
  $numEntrys = count($pathInfoParts);
  switch ($numEntrys)
  {
    case 0:
    break;
    case 1:
    break;

    case 2:
      $keyVal['mod'] = $pathInfoParts[0];
      $keyVal['hook'] = $pathInfoParts[1];
    break;

    case 3:
      $keyVal['mod'] = $pathInfoParts[0];
      $keyVal['hook'] = $pathInfoParts[1];
      if (substr($pathInfoParts[2], 0, 1) == '[')
      {
        $keyVal['tags'] = substr($pathInfoParts[2], 1, -1);
      }
      else
      {
        $keyVal['articleName'] = $pathInfoParts[2];
      }
    break;

    case 4:
      $keyVal['mod'] = $pathInfoParts[0];
      $keyVal['hook'] = $pathInfoParts[1];
      $keyVal['tags'] = substr($pathInfoParts[2], 1, -1);
      $keyVal['articleName'] = $pathInfoParts[3];
    break;
  }

  return $keyVal;
};

$prefs = [
  'store' => 'cbm-project.data',
  'articlesPerPage' => 3,
];

$router = new cAppC('indexC', 'show', $pathInfoAssignCallback, $prefs);
$router->run();

?>