<?php

class pagesV extends cbmV
{

  public function drawPage($article): void
  {
    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $article['title']);
    $this->setTag('metadata', $this->renderArticleMetadata($article));
    $this->setTag('header', $article['title']);
    $this->setTag('content', $article['content']);

    $this->draw();
  }
}

?>