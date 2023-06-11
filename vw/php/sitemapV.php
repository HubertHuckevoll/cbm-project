<?php

class sitemapV extends cbmPageV
{

  public function cbmContent()
  {
    $str = '';
    $articles = $this->get('sitemap', 'articles');
    $pages = $this->get('sitemap', 'pages');

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

    header('Content-Type: text/xml');

    return $str;
  }
}

?>