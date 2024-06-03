<?php

class Category
{
    private string $category;

    public function __construct($category)
    {
        if ($category !== 'cane' && $category !== 'gatto') {
            throw new Exception("Le categorie possibili sono 'cane' o 'gatto'");
        }
        $this->category = $category;
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
