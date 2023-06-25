<?php

class teasersV extends cbmV
{

  /**
   * Summary of cbmBase
   * @return string
   * ________________________________________________________________
   */
  public function cBase(): string
  {
    return $this->renderBaseTag();
  }

  /**
   * Summary of drawRandom
   * @return string
   * ________________________________________________________________
   */
  public function cContent(): string
  {
    $str = '';
    $entries = $this->get('teasers', 'articles');

    foreach($entries as $entry)
    {
      $str .= '<p><a href="'.$this->renderHrefArticle($entry['articleName']).'">'.$entry['articleName'].'</a></p>';
    }

    return $str;
  }

}

?>