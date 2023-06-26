<?php

class searchV extends cbmV
{
  public function drawPage(array $entries, string $tags): void
  {
    $this->setTag('base', $this->renderBaseTag());
    $this->setTag('content', $this->renderSearchResults($entries, $tags));

    $this->draw();
  }

}

?>