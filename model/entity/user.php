<?php
require_once "model/entity/entity.php";

class User extends Entity {

  protected string $civility;
  protected string $lastname;
  protected string $firstname;
  protected string $email;
  protected string $city;
  protected string $zipCode;

  public function __construct(array $data = null) {
    if($data) {
      $this->hydrate($data);
    }
  }

  public function getCivility():string
  {
      return $this->civility;
  }

  public function setCivility(string $civility):User
  {
      $this->civility = $civility;
      return $this;
  }


  public function getLastname():string
  {
      return $this->lastname;
  }

  public function setLastname(string $lastname):User
  {
      $this->lastname = $lastname;
      return $this;
  }


  public function getFirstname():string
  {
      return $this->firstname;
  }

  public function setFirstname(string $firstname):User
  {
      $this->firstname = $firstname;
      return $this;
  }


  public function getEmail():string
  {
      return $this->email;
  }

  public function setEmail(string $email):User
  {
      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $this->email = $email;
        return $this;
      }
      throw new Exception("Format d'email incorrect");
  }


  public function getCity():string
  {
      return $this->city;
  }

  public function setCity(string $city):User
  {
      $this->city = $city;
      return $this;
  }


  public function getZipCode():string
  {
      return $this->zipCode;
  }


  public function setZipCode(string $zipCode):User
  {
      $this->zipCode = $zipCode;
      return $this;
  }

}
