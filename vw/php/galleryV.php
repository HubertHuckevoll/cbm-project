<?php

class galleryV extends cbmV
{
  public function drawPage(array $article, array $gallery, string $tags): void
  {
    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $article['title']);
    $this->setTag('metadata', $this->renderArticleMetadata($article));
    $this->setTag('header', $article['title']);
    $this->setTag('content', $this->renderGallery($article, $gallery, $tags));

    $this->draw();
  }
}

?>