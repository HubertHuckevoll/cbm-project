<?php

class searchC extends cbmSearchC
{
  public function __construct(string $store, array $request, ?array $prefs = null)
  {
    $view = new searchV('searchV');
    parent::__construct($store, $request, $view, $prefs);
  }
}

?>
