<?php

/**
 * index page / blog / articles
 * __________________________________________________________________
 */
class indexC extends cbmIndexC
{
  public function __construct()
  {
    try
    {
      $pv = new cbmIndexPageV('index');
      parent::__construct($pv, 'articles');
    }
    catch (Exception $e)
    {
      die($e->getMessage);
    }
  }

  public function index()
  {
    $this->view->setData('title', 'The mighty index!');
    $this->view->setData('header', 'Look and see what\'s in store for you:');

    parent::index();
  }

}

?>
