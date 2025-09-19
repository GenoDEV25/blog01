<?php

namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'summary', 'image', 'category_id', 'created_at'];

    //* Método para obtener posts con el nombre de la categoría
    public function getPostsWithCategory()
    {
        return $this->select('posts.*, categories.name as category_name')
            ->join('categories', 'categories.id = posts.category_id')
            ->orderBy('posts.created_at', 'DESC')
            ->findAll();
    }
}
