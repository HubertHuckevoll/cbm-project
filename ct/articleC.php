<?php

/**
 * article controller
 * __________________________________________________________________
 */
class articleC extends cbmArticleC
{
  public function __construct()
  {
    try
    {
      $pv = new cbmPageV('article');
      parent::__construct($pv, 'articles', '2023-05-21_geliebte_tante');
    }
    catch (Exception $e)
    {
      die($e->getMessage);
    }
  }
}

?>
