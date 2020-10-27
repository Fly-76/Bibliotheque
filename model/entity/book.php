<?php
// Classe représetant les livres stockés en base de données
require_once "model/entity/entity.php";

class Book extends Entity {

  protected string $title;
  protected string $author;
  protected string $summary;
  protected string $release_date;
  protected string $category;
  protected string $status;
  protected int $user_id;

  public function __construct(array $data = null) {
    if($data) {
      $this->hydrate($data);
    }
  }

  public function getTitle():string
  {
      return $this->title;
  }

  public function setTitle(string $title):Book
  {
      $this->title = $title;
      return $this;
  }


	public function getAuthor():string
	{
	  return $this->author;
	}

	public function setAuthor(string $author):Book
	{
	  $this->author = $author;
	  return $this;
	}


	public function getSummary():string
	{
	  return $this->summary;
	}

	public function setSummary(string $summary):Book
	{
	  $this->summary = $summary;
	  return $this;
	}


	public function getRelease_date():string
	{
	  return $this->release_date;
	}

	public function setRelease_date(string $release_date):Book
	{
	  $this->release_date = $release_date;
	  return $this;
	}


	public function getCategory():string
	{
	  return $this->category;
	}

	public function setCategory(string $category):Book
	{
	  $this->category = $category;
	  return $this;
	}


	public function getStatus():string
	{
	  return $this->status;
	}

	public function setStatus(string $status):Book
	{
	  $this->status = $status;
	  return $this;
	}


	public function getUser_id():string
	{
	  return $this->user_id;
	}

	// public function setUser_id(int $user_id):Book
	// {
	//   $this->user_id = $user_id;
	//   return $this;
	// }
}
