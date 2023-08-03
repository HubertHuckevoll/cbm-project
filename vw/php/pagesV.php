<?php

class pagesV extends cbmV
{
  public function drawPage($article): void
  {
    $metadata = [];
    $image0 = $article['xml']->images->children()[0] ?? null;
    $metadata['image0'] = ($image0 !== null) ? $this->makeAssetURL($article, $image0, true) : null;
    $metadata['imageTitle'] = $article['xml']->images->children()[0]['title'] ?? '';
    $metadata['summary'] = $article['xml']->summary ?? '';
    $metadata['author'] = $article['xml']->author ?? $_SERVER['SERVER_NAME'];
    $metadata['title'] = $article['xml']->title ?? '';
    $metadata['date'] = $article['date'] ?? '';

    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $article['xml']->title);
    $this->setTag('metadata', $this->renderArticleMetadata($metadata));
    $this->setTag('content', $article['xml']->content);

    $this->draw();
  }
}

?>