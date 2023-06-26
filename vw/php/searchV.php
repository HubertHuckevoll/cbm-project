<?php

class searchV extends cbmV
{

  public function drawPage(array $entries, string $tags): void
  {
    $str = '';
    $this->setTag('base', $this->renderBaseTag());

    foreach($entries as $entry)
    {
      $str .= '<p><a href="'.$this->renderHrefArticle($entry['article']['articleName'], $tags).'">'.$entry['hit'].'</a></p>';
    }

    $this->setTag('content', $str);
    $this->draw();
  }

}

?>