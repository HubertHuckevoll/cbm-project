<?php

class pagesC extends cbmPagesC
{
  public function __construct(string $store, array $request, ?array $prefs = null)
  {
    $view = new pagesV('pagesV');
    parent::__construct($store, $request, $view, $prefs);
  }
}

?>