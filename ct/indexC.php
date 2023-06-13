<?php

class indexC extends cbmIndexC
{
  public function __construct(string $store, array $request, ?array $prefs = null)
  {
    $view = new indexV('indexV');
    parent::__construct($store, $request, $view, $prefs);
  }
}

?>
