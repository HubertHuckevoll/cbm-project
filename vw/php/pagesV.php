<?php

class pagesV extends cbmV
{
  public function drawPage($article): void
  {
    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $article['xml']->title);
    $this->setTag('metadata', $this->renderArticleMetadata($article));
    $this->setTag('content', $article['xml']->content);

    $this->draw();
  }
}

?>