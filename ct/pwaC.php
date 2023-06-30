<?php

class pwaC extends cPageC
{
  public function __construct(array $request, ?array $prefs = null)
  {
    $view = new pwaV('pwaV');
    parent::__construct($request, $prefs, $view);
  }

  public function show()
  {
    $this->view->drawPage('PWA Upload!', '', '');
  }

  public function upload()
  {
    $results = [];
    $upDir = "../cbm-project.data/entries.assets/";

    foreach($_FILES as $file)
    {
      $fname = $upDir.$file['name'];
      if (move_uploaded_file($file['tmp_name'], $fname))
      {
        $results[] = $fname;
      }
    }

    $str = print_r($_FILES + $this->request, true);
    $this->view->drawPage('PWA Upload!', $str, $results[0]);
  }
}

?>
