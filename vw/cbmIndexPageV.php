<?php

class cbmIndexPageV extends cbmPageV
{
  public function content()
  {
    $html  = '';
    $html .= '<ul>';

    foreach($this->data['articles'] as $item)
    {
      $html .= '<li>'.$item.'</li>';
    }
    $html .= '</ul>';

    return $html;
  }
}

?>