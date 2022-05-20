<?php

class Product
{
  public function all()
  {
    echo json_encode($this->model->fetch_all());
  }

  public function add()
  {
    $this->model->add($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['password']);
  }

  public function update()
  {
    $this->model->update($_POST['id'], $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['password']);
  }

  public function delete()
  {
    $this->model->delete($_POST['id']);
  }
}