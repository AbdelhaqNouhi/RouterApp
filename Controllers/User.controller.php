<?php

class User
{
  
  public function all()
  {
    $this->model = new UserModel();
    echo json_encode($this->model->fetch());
  }

  public function add()
  {
    $this->model = new UserModel();
    echo json_encode($this->model->add());
  }

  public function update()
  {
    $this->model = new UserModel();
    echo json_encode($this->model->update());
  }

  public function delete()
  {
    $this->model = new UserModel();
    echo json_encode($this->model->delete());
  }
}
