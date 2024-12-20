<?php

namespace App\Repositories;

use App\Models\CategoryArticle;
use App\Repositories\Contracts\CategoryArticleRepositoryInterface;

class CategoryArticleRepository implements CategoryArticleRepositoryInterface
{
    public function getAllCategoryArticles()
    {
        return CategoryArticle::latest()->get();
    }
}
