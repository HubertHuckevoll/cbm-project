<?php

class sitemapC extends cbmSitemapC
{
  public function __construct(array $request, ?array $prefs = null)
  {
    $view = new sitemapV('sitemapV');
    parent::__construct($request, $view, $prefs);
  }
}

?>
