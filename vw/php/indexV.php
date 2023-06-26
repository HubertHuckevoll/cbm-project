<?php

class indexV extends cbmV
{

  public function drawPage(array $index, array $articles): void
  {
    $listHtml = '<ul>';
    foreach($articles as $item)
    {
      $listHtml .= '<li>'.
                    '<a href="'.$this->renderHrefArticle($item['articleName'], $index['tags']).'">'.$item['title'].'</a>'.
                    '<p>'.$item['summary'].'</p>'.
                   '</li>';
    }
    $listHtml .= '</ul>';

    $pageNrHtml = '<hr>';
    $page = $index['page'];
    $maxPage = $index['maxPage'];

    for ($i = 0; $i < $maxPage; $i++)
    {
      if ($i == $page)
      {
        $pageNrHtml .= '<span>'.($i+1).'</span>&nbsp;';
      }
      else
      {
        $pageNrHtml .= '<a href="'.$this->renderHrefIndex($i, $index['tags']).'"><span>'.($i+1).'</span></a>&nbsp;';
      }
    }

    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $_SERVER['SERVER_NAME']);
    $this->setTag('header', $_SERVER['SERVER_NAME']);
    $this->setTag('content', $listHtml);
    $this->setTag('pages', $pageNrHtml);

    $this->draw();
  }

}

?>