<?php

class galleryC extends cbmGalleryC
{
  public function __construct(array $request, ?array $prefs = null)
  {
    $view = new galleryV('galleryV');
    parent::__construct($request, $prefs, $view);
  }
}

?>