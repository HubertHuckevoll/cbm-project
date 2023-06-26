<?php

class articleV extends cbmV
{

  public function drawPage(array $index, array $article)
  {
    $html = '';
    $imgs = $article['images'] ?? null;
    $name = $article['articleName'];

    if ($imgs !== null)
    {
      for($i=0; $i < count($imgs); $i++)
      {
        $img = $imgs[$i];
        $html .= '<a href="'.$this->renderHrefGallery($name, $i, $index['tags']).'">'.
                    '<img height="250" src="'.$img['src'].'" title="'.$img['title'].'" alt="'.$img['title'].'">'.
                 '</a>&nbsp;';
      }
    }

    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $article['title']);
    $this->setTag('metadata', $this->renderArticleMetadata($article));
    $this->setTag('header', $article['title']);
    $this->setTag('date', $this->renderDate($article['date']));
    $this->setTag('article', $article['content']);
    $this->setTag('images', $html);
    $this->setTag('footer', '<a href="'.$this->renderHrefIndex($index['articleBoxPage'], $index['tags']).'">Zurück</a>');

    $this->draw();
  }
}

?>