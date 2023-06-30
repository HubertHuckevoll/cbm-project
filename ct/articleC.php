<?php

class articleC extends cbmArticleC
{
  public function __construct(array $request, ?array $prefs = null)
  {
    $view = new articleV('articleV');
    parent::__construct($request, $prefs, $view);
  }
}

?>
