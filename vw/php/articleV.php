<?php

class articleV extends cbmV
{
  public function drawPage(array $index, array $article): void
  {
    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $article['title']);
    $this->setTag('metadata', $this->renderArticleMetadata($article));
    $this->setTag('header', $article['title']);
    $this->setTag('date', $this->renderDate($article['date']));
    $this->setTag('article', $article['content']);
    $this->setTag('images', $this->renderImageList($article, $index['tags']));
    $this->setTag('footer', '<a href="'.$this->renderHrefIndex($index['articleBoxPage'], $index['tags']).'">Zurück</a>');

    $this->draw();
  }

  protected function renderImageList(array $article, string $tags): string
  {
    $str = parent::renderImageList($article, $tags);
    /*
    $str .= '<style>
              img {
                height: 500px;
                margin-right: 50px;
              }
            </style>';
            */

    return $str;
  }
}

?>