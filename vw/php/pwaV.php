<?php

class pwaV extends cbmV
{
  public function drawPage($title, $content, $img): void
  {
    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $title);
    $this->setTag('content', $content);
    $this->setTag('img', $img);

    $this->draw();
  }
}

?>