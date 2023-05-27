<?php

class articleV extends cbmPageV
{
  use cbmArticleVF;

  public function cbmHeader()
  {
    return $this->getData('article')['title'] ?? '';
  }

  public function cbmDate()
  {
    return $this->getData('article')['date'] ?? '';
  }

  public function cbmContent()
  {
    return $this->getData('article')['content'] ?? '';
  }

  public function cbmSection()
  {
    $imgs = $this->getData('article')['images'] ?? null;
    return $this->renderGallery($imgs);
  }
}

?>