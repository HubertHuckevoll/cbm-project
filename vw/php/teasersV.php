<?php

class teasersV extends cbmPageV
{

  /**
   * Summary of cbmBase
   * @return string
   * ________________________________________________________________
   */
  public function cbmBase(): string
  {
    return $this->renderBaseTag();
  }

  /**
   * Summary of drawRandom
   * @return string
   * ________________________________________________________________
   */
  public function cbmContent(): string
  {
    $str = '';
    $entries = $this->get('index', 'articles');

    foreach($entries as $entry)
    {
      $str .= '<p><a href="'.$this->renderHrefArticle($entry['articleName']).'">'.$entry['articleName'].'</a></p>';
    }

    return $str;
  }

}

?>