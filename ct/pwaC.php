<?php

class pwaC extends cPageC
{
  public function __construct(array $request, ?array $prefs = null)
  {
    $view = new pwaV('pwaV');
    parent::__construct($request, $view, $prefs);
  }

  public function show()
  {
    $this->view->drawPage('PWA Upload!', '');
  }

  public function upload()
  {
    $results = [];
    $uploads_dir = "../cbm-project.data/entries.assets";
    foreach($_FILES["file"] as $file)
    {
      $tmp_name = $file["tmp_name"];
      $name = basename($file["name"]);
      $result = "$uploads_dir/$name";
      move_uploaded_file($tmp_name, $result);
      $results[] = $result;
    }

    $str = print_r($_FILES + $this->request, true);
    $this->view->drawPage('PWA Upload!', $str, $results[0]);
  }
}

?>
