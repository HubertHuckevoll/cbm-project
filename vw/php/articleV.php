<?php

class articleV extends cbmV
{
  public function drawPage(array $index, array $article): void
  {
    $metadata = [];
    $image0 = $article['xml']->images->children()[0] ?? null;
    $metadata['image0'] = ($image0 !== null) ? $this->makeAssetURL($article['store'], $article['articleBox'], $image0, true) : null;
    $metadata['imageTitle'] = $article['xml']->images->children()[0]['title'] ?? '';
    $metadata['summary'] = $article['xml']->summary ?? '';
    $metadata['author'] = $article['xml']->author ?? $_SERVER['SERVER_NAME'];
    $metadata['title'] = $article['xml']->title ?? '';
    $metadata['date'] = $article['date'] ?? '';

    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $article['xml']->title);
    $this->setTag('metadata', $this->renderArticleMetadata($metadata));
    $this->setTag('date', $this->renderDate($article['date']));
    $this->setTag('article', $article['xml']->content);
    $this->setTag('images', $this->renderImageList($article, $index['tags']));
    $this->setTag('footer', '<a href="'.$this->renderHrefIndex($index['articleBoxPage'], $index['tags']).'">Zurück</a>');

    $this->draw();
  }
}

?>