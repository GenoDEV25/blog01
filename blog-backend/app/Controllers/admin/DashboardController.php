<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Post;

class DashboardController extends BaseController
{
    public function index()
    {
        $postModel = new Post();
        $data['posts'] = $postModel->getPostsWithCategory();
        $data['username'] = session()->get('username');
        return view('admin/dashboard', $data);
    }
}
