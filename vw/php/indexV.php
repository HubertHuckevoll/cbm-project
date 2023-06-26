<?php

class indexV extends cbmV
{

  public function drawPage(array $index, array $articles): void
  {
    $html  = '';

    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $_SERVER['SERVER_NAME']);
    $this->setTag('header', $_SERVER['SERVER_NAME']);

    $html  = '';
    $html .= '<ul>';
    foreach($articles as $item)
    {
      $html .= '<li>'.
                 '<a href="'.$this->renderHrefArticle($item['articleName'], $index['tags']).'">'.$item['title'].'</a>'.
                 '<p>'.$item['summary'].'</p>'.
               '</li>';
    }
    $html .= '</ul>';
    $this->setTag('content', $html);

    $html  = '';
    $html .= '<hr>';
    $page = $index['page'];
    $maxPage = $index['maxPage'];

    for ($i = 0; $i < $maxPage; $i++)
    {
      if ($i == $page)
      {
        $html .= '<span>'.($i+1).'</span>&nbsp;';
      }
      else
      {
        $html .= '<a href="'.$this->renderHrefIndex($i, $index['tags']).'"><span>'.($i+1).'</span></a>&nbsp;';
      }
    }
    $this->setTag('pages', $html);

    $this->draw();
  }

}

?>