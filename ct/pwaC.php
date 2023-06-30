<?php

class pwaC extends cPageC
{
  public function __construct(array $request, ?array $prefs = null)
  {
    parent::__construct($request, $prefs);
  }

  public function show()
  {
    $view = new pwaV('pwaV');
    $view->drawPage('PWA Upload!', '', '');
  }

  public function upload()
  {
    $results = [];
    $upDir = "../cbm-project.data/entries.assets/";

    //$str = print_r($_FILES + $this->request, true);

    foreach($_FILES as $file)
    {
      $fname = $upDir.$file['name'];
      if (move_uploaded_file($file['tmp_name'], $fname))
      {
        $results[] = $fname;
      }
    }

    $this->redirect($results[0]);
  }

  public function create()
  {
    $view = new pwaV('pwaV');
    $img = $this->request['img'];

    $view->drawPage('PWA Upload!', 'Holla die Waldfee, it worked.', $img);
  }

  public function redirect($img)
  {
    $href = dirname($_SERVER['PHP_SELF']);
    $href = substr($href, 0, strrpos($href, 'index.php'));
    $href = rtrim($href, '/\\');
    $href = 'https://'.$_SERVER['HTTP_HOST'].$href.'/index.php/pwaC/create?img='.$img;

    header('Location: '.$href, null, 303);
  }

}

?>
