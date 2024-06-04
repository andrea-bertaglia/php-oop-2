<?php

class Category
{
    private string $category;
    private string $icon;

    public function __construct($category)
    {
        if ($category !== 'cane' && $category !== 'gatto') {
            throw new Exception("Le categorie possibili sono 'cane' o 'gatto'");
        }
        $this->category = $category;

        if ($category === 'cane') {
            $this->icon = "fa-solid fa-dog";
        } elseif ($category === 'gatto') {
            $this->icon = "fa-solid fa-cat";
        }
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get the value of icon
     */
    public function getIcon()
    {
        return $this->icon;
    }
}
