<?php

class Product
{
    private int | null $id;
    private string $image;
    private string $name;
    private string $description;
    private string $price;
    private ProductModel $model;
}

public function __construct(string $image, string $name, string $description, string $price, $id = null)
{
    $this->id = $id;
    $this->image = $image;
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->model = new ProductModel();
}