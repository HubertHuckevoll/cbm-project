<?php

class galleryV extends cbmV
{
  public function drawPage(array $article, array $gallery, string $tags): void
  {
    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $article['xml']->title);
    $this->setTag('metadata', $this->renderArticleMetadata($article));
    $this->setTag('content', $this->renderGallery($article, $gallery, $tags));

    $this->draw();
  }

  public function renderGallery(array $article, array $gallery, string $tags): string
  {
    return '<div class="gallery">'.parent::renderGallery($article, $gallery, $tags).'</div>';
  }
}

?>