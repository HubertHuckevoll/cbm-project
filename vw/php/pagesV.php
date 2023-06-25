<?php

class pagesV extends cbmV
{
  public function cBase()
  {
    return $this->renderBaseTag();
  }

  public function cTitle()
  {
    return $this->get('article', 'title') ?? '';
  }

  public function cHeader()
  {
    return $this->get('article', 'title') ?? '';
  }

  public function cContent()
  {
    return $this->get('article', 'content') ?? '';
  }
}

?>