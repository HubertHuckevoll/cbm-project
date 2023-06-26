<?php

class sitemapV extends cbmV
{
  public function drawPage(array $articles, array $pages): void
  {
    $str = '';
    $protocol = ($_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
    $root = $protocol.$_SERVER['HTTP_HOST'];

    if ($articles !== null)
    {
      foreach($articles as $item)
      {
        $str .= '<url>';
        $str .= '<loc>'.$root.$this->renderBaseHref().'index.php/articleC/show/'.$item['articleName'].'</loc>';
        $str .= '<lastmod>'.$this->renderTimestampToIso8601($item['date']).'</lastmod>';
        $str .= '</url>';
      }
    }

    if ($pages !== null)
    {
      foreach($pages as $page)
      {
        $str .= '<url>';
        $str .= '<loc>'.$root.'index.php/pagesC/show/'.$page['articleName'].'</loc>';
        $str .= '<lastmod>'.$this->renderTimestampToIso8601($page['date']).'</lastmod>';
        $str .= '</url>';
      }
    }

    $this->setTag('content', $str);
    header('Content-Type: text/xml');
    $this->draw();
  }
}

?>