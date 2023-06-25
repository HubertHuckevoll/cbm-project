<?php

class articleV extends cbmV
{
  public function cBase()
  {
    return $this->renderBaseTag();
  }

  public function cTitle()
  {
    return $this->get('article', 'title') ?? '';
  }

  public function cMetadata()
  {
    return $this->renderArticleMetadata();
  }

  public function cHeader()
  {
    return $this->get('article', 'title') ?? '';
  }

  public function cDate()
  {
    $timestamp = $this->get('article', 'date');
    return $this->renderDate($timestamp);
  }

  public function cArticle()
  {
    return $this->get('article', 'content') ?? '';
  }

  public function cImages()
  {
    $html  = '';
    $imgs = $this->get('article', 'images');
    $name = $this->get('article', 'articleName');

    if ($imgs !== null)
    {
      for($i=0; $i < count($imgs); $i++)
      {
        $img = $imgs[$i];
        $html .= '<a href="'.$this->renderHrefGallery($name, $i).'">'.
                    '<img height="250" src="'.$img['src'].'" title="'.$img['title'].'" alt="'.$img['title'].'">'.
                 '</a>&nbsp;';
      }
    }

    return $html;
  }

  public function cFooter()
  {
    $page = $this->get('index', 'articleBoxPage');
    return '<a href="'.$this->renderHrefIndex($page).'">Zurück</a>';
  }
}

?>