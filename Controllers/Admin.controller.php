<?php

class Admin 
{
    private int | null $id;
    private string $first_name;
    private string $last_name;
    private string $phone;
    private string $email;
    private string $password;
    private AdminModel $model;
}

public function __construct(string $first_name, string $last_name, string $phone, string $email, string $password, $id = null)
{
    $this->id = $id;
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->phone = $phone;
    $this->email = $email;
    $this->password = $password;
    $this->model = new AdminModel();
}