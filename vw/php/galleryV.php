<?php

class galleryV extends cbmV
{

  public function drawPage(array $article, array $gallery, string $tags): void
  {
    $curIdx  = $gallery['curIdx'];
    $nextIdx = $gallery['nextIdx'];
    $prevIdx = $gallery['prevIdx'];

    $cur         = $article['images'][$curIdx]['src'];
    $curDesc     = $article['images'][$curIdx]['title'];
    $articleName = $article['articleName'];

    $prev = $this->renderHrefGallery($articleName, $prevIdx, $tags);
    $next = $this->renderHrefGallery($articleName, $nextIdx, $tags);
    $back = $this->renderHrefArticle($articleName, $tags);

    $erg = '<div>'.
            '<div>'.
              '<p>'.
                '<a href="'.$prev.'" title="Voriges Bild"><span>&laquo;</span></a>&nbsp;'.
                '<a href="'.$next.'" title="Nächstes Bild"><span>&raquo;</span></a>&nbsp;'.
                '<a href="'.$back.'" title="Zur&uuml;ck"><span>x</span></a>'.
              '</p>'.
            '</div>'.
            '<div>'.
              '<a href="'.$next.'">'.
                 '<img alt="'.$curDesc.'" title="'.$curDesc.'" src="'.$cur.'">'.
              '</a>'.
              '<p><em>'.$curDesc.'</em></p>'.
            '</div>'.
          '</div>';

    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('title', $article['title']);
    $this->setTag('metadata', $this->renderArticleMetadata($article));
    $this->setTag('header', $article['title']);
    $this->setTag('content', $erg);

    $this->draw();
  }
}

?>