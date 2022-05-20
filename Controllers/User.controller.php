<?php

class User
{
  private int|null $id;
  private string $first_name;
  private string $last_name;
  private string $phone;
  private string $email;
  private string $password;
  private UserModel $model;

  public function __construct(string $first_name, string $last_name, string $phone, string $email, $id = null)
  {
    $this->id = $id;
    $this->username = $first_name;
    $this->first_name = $last_name;
    $this->phone = $phone;
    $this->email = $email;
    $this->model = new UserModel();
  }

  public function all()
  {
    echo json_encode($this->model->fetch_all());
  }
}
