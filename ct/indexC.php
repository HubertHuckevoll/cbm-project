<?php

/**
 * index page / blog / articles
 * __________________________________________________________________
 */
class indexC extends cbmIndexC
{
  public function __construct(string $store, array $request)
  {
    $pv = new indexV('index');
    parent::__construct($pv, $store, 'articles');
  }
}

?>
