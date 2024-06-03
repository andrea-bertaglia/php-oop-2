<?php

require_once __DIR__ . "/category.php";

class Product
{
    private string $name;
    private string $brand;
    private float $price;
    private float $discount;
    private float $vat_percentage;
    public Category $category;

    public function __construct($name, $brand)
    {
        $this->name = $name;
        $this->brand = $brand;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        if ($price < 0) {
            throw new Exception("Prezzo negativo non valido");
        }
        $this->price = $price;
    }

    /**
     * Get the value of discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */
    public function setDiscount($discount)
    {
        if ($discount >= 50) {
            throw new Exception("Lo sconto non può superare il 50%");
        }
        $this->discount = $discount;
    }

    /**
     * Get the value of vat_percentage
     */
    public function getVat_percentage()
    {
        return $this->vat_percentage;
    }

    /**
     * Set the value of vat_percentage
     *
     * @return  self
     */
    public function setVat_percentage($vat_percentage)
    {
        // inserisco l'aliquota iva come setter anche se è una sola in un'ottica di manutenibilità futura (nel caso ci fossero nuove aliquote)
        if ($vat_percentage !== 22) {
            throw new Exception("L'unica aliquota possibile è 22%");
        }
        $this->vat_percentage = $vat_percentage;
    }
}
