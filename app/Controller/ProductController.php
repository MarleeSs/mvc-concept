<?php

namespace Belajar\Mvc\Controller;

class ProductController
{
    public function categories(string $productId, string $categoryId): void
    {
        echo "Product ID: $productId, Category : $categoryId";
    }

}