<?php

class teasersV extends cbmV
{

  public function drawPage(array $articles, string $tags)
  {
    $str = '';
    foreach($articles as $article)
    {
      $str .= '<p><a href="'.$this->renderHrefArticle($article['articleName'], $tags).'">'.$article['articleName'].'</a></p>';
    }

    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('content', $str);

    $this->draw();
  }

}

?>