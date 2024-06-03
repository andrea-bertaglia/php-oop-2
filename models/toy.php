<?php

require_once __DIR__ . "/product.php";

class Toy extends Product
{
    private string $material;
    private string $img_path;

    public function __construct(string $name, string $brand, string $material, string $img_path)
    {
        parent::__construct($name, $brand);
        $this->material = $material;
        $this->img_path = $img_path;
    }


    /**
     * Get the value of material
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Get the value of img_path
     */
    public function getImg_path()
    {
        return $this->img_path;
    }
}
