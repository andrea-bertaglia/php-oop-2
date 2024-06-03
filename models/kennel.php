<?php

require_once __DIR__ . "/product.php";

class Kennel extends Product
{
    private string $material;
    private string $machine_washable;
    private string $img_path;

    public function __construct(string $name, string $brand, string $material, string $machine_washable, string $img_path)
    {
        parent::__construct($name, $brand);
        $this->material = $material;
        $this->machine_washable = $machine_washable;
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

    /**
     * Get the value of machine_washable
     */
    public function getMachine_washable()
    {
        return $this->machine_washable;
    }
}
