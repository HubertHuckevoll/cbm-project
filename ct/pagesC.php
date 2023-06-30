<?php

class pagesC extends cbmPagesC
{
  public function __construct(array $request, ?array $prefs = null)
  {
    $view = new pagesV('pagesV');
    parent::__construct($request, $prefs, $view);
  }
}

?>