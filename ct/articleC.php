<?php

/**
 * article controller
 * __________________________________________________________________
 */
class articleC extends cbmArticleC
{
  public function __construct(string $store, array $request)
  {
    $pv = new cbmArticleV('article');
    parent::__construct($pv, $store, $request['articleBox'], $request['articleName']);
  }
}

?>
