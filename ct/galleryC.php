<?php

class galleryC extends cbmGalleryC
{
  public function __construct(string $store, array $request, ?array $prefs = null)
  {
    $view = new galleryV('galleryV');
    parent::__construct($store, $request, $view, $prefs);
  }
}

?>