<?php

class indexV extends cbmPageV
{
  use cbmIndexVF;

  public function cbmHeader()
  {
    $str  = '';
    $str .= $this->getData('meta')['articleBox'] ?? '';
    return $str;
  }

  public function cbmContent()
  {
    $articles = $this->getData('pages') ?? null;
    return $this->renderIndexWithTeaser($articles);
  }
}

?>