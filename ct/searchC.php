<?php

class searchC extends cbmSearchC
{
  public function __construct(array $request, ?array $prefs = null)
  {
    $view = new searchV('searchV');
    parent::__construct($request, $view, $prefs);
  }
}

?>
