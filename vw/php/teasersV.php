<?php

class teasersV extends cbmPageV
{
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
      $str .= '<p>'.$entry['articleName'].'</p>';
    }

    return $str;
  }

}

?>