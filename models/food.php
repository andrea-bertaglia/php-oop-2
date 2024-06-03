<?php

require_once __DIR__ . "/product.php";

class Food extends Product
{
    private string $food_type;
    private string $packaging;
    private string $expiration_date;
    private string $img_path;

    public function __construct(string $name, string $brand, string $food_type, string $packaging, string $img_path)
    {
        parent::__construct($name, $brand);
        $this->food_type = $food_type;
        $this->packaging = $packaging;
        $this->img_path = $img_path;
    }

    /**
     * Get the value of food_type
     */
    public function getFood_type()
    {
        return $this->food_type;
    }

    /**
     * Get the value of packaging
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * Get the value of expiration_date
     */
    public function getExpiration_date()
    {
        return $this->expiration_date;
    }

    /**
     * Set the value of expiration_date
     *
     * @return  self
     */
    public function setExpiration_date($expiration_date)
    {
        // estraggo l'anno della data
        $year = intval($expiration_date[0] . $expiration_date[1] . $expiration_date[2] . $expiration_date[3]);
        // var_dump($year);

        if ($expiration_date < 2024) {
            throw new Exception('Prodotto scaduto');
        }
        $this->expiration_date = $expiration_date;
    }

    /**
     * Get the value of img_path
     */
    public function getImg_path()
    {
        return $this->img_path;
    }
}
