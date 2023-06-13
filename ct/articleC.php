<?php

class articleC extends cbmArticleC
{
  public function __construct(string $store, array $request, ?array $prefs = null)
  {
    $view = new articleV('articleV');
    parent::__construct($store, $request, $view, $prefs);
  }
}

?>
