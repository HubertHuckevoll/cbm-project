<?php

class sitemapC extends cbmSitemapC
{
  public function __construct(string $store, array $request, ?array $prefs = null)
  {
    $view = new sitemapV('sitemapV');
    parent::__construct($store, $request, $view, $prefs);
  }
}

?>
