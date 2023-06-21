<?php

class indexC extends cbmIndexC
{
  public function __construct(array $request, ?array $prefs = null)
  {
    $view = new indexV('indexV');
    parent::__construct($request, $view, $prefs);
  }
}

?>
