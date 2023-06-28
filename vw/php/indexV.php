<?php

class indexV extends cbmV
{
  public function drawPage(array $index, array $articles): void
  {
    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $_SERVER['SERVER_NAME']);
    $this->setTag('content', $this->renderArticleList($articles, $index['tags']));
    $this->setTag('pages', $this->renderArticleListPages($index, $articles));

    $this->draw();
  }

}

?>