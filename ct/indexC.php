<?php

/**
 * index page / blog / articles
 * __________________________________________________________________
 */
class indexC extends cbmIndexC
{
  public function __construct(string $store, array $request)
  {
    $pv = new cbmIndexV('index');
    parent::__construct($pv, $store, 'articles');
  }

  public function index(): void
  {
    $this->view->setData('title', 'The mighty index!');
    $this->view->setData('header', 'Look and see what\'s in store for you:');

    parent::index();
  }

}

?>
