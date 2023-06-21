<?php

class teasersC extends cbmTeasersC
{
  public function __construct(array $request, ?array $prefs = null)
  {
    $view = new teasersV('teasersV');
    parent::__construct($request, $view, $prefs);
  }
}

?>
