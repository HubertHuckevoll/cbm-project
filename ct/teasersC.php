<?php

class teasersC extends cbmTeasersC
{
  public function __construct(string $store, array $request, ?array $prefs = null)
  {
    $view = new teasersV('teasersV');
    parent::__construct($store, $request, $view, $prefs);
  }
}

?>
