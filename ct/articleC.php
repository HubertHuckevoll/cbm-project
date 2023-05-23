<?php

/**
 * article controller
 * __________________________________________________________________
 */
class articleC extends cbmArticleC
{
  public function __construct(array $request)
  {
    $pv = new cbmArticleV('article');
    parent::__construct($pv, $request['articleBox'], $request['articleName']);
  }
}

?>
