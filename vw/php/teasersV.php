<?php

class teasersV extends cbmV
{
  public function drawPage(array $articles, string $tags): void
  {
    $this->setTag('title', 'Random');
    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('content', $this->renderTeaserList($articles, $tags));

    $this->draw();
  }

}

?>