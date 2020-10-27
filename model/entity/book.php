<?php
// Classe représetant les livres stockés en base de données
require_once "model/entity/entity.php";

class Book extends Entity {

  protected string $title;
  protected string $author;
  protected string $summary;

  public function __construct(array $data = null) {
    if($data) {
      $this->hydrate($data);
    }
  }

  public function getTitle():string
  {
      return $this->title;
  }

  public function setTitle(string $title):Livre
  {
      $this->title = $title;
      return $this;
  }

}
