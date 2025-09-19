<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Post;

class PostsController extends BaseController
{

    protected $validationRulesCreate = [
        'title'       => 'required|min_length[3]|max_length[255]',
        'summary'     => 'required',
        'category_id' => 'required|integer',
        'image'       => 'uploaded[image]|is_image[image]|max_size[image,2048]'
    ];

    protected $validationRulesUpdate = [
        'title'       => 'required|min_length[3]|max_length[255]',
        'summary'     => 'required',
        'category_id' => 'required|integer',
        'image'       => 'permit_empty|is_image[image]|max_size[image,2048]'
    ];

    public function index()
    {
        $model = new Post();
        $data['posts'] = $model->findAll();
        $data['username'] = session()->get('username');
        return view('admin/posts_list', $data);
    }

    public function create()
    {
        return view('admin/post_form');
    }

    public function store()
    {
        if (!$this->validate($this->validationRulesCreate)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $img = $this->request->getFile('image');
        $newName = $img->getRandomName();
        $img->move(FCPATH . 'uploads', $newName);

        $data = [
            'title'       => $this->request->getPost('title'),
            'summary'     => $this->request->getPost('summary'),
            'category_id' => $this->request->getPost('category_id'),
            'image'       => $newName,
            'created_at'  => date('Y-m-d H:i:s')
        ];

        $model = new Post();
        $model->save($data);

        return redirect()->to('/admin/dashboard')->with('success', 'Post creado correctamente.');
    }

    public function edit($id)
    {
        $postModel = new Post();
        $data['post'] = $postModel->find($id);
        return view('admin/edit_post', $data);
    }

    public function update($id)
    {
        $postModel = new Post();
        $post = $postModel->find($id);

        if (!$this->validate($this->validationRulesUpdate)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title'       => $this->request->getPost('title'),
            'summary'     => $this->request->getPost('summary'),
            'category_id' => $this->request->getPost('category_id'),
        ];

        // Revisar si se subió nueva imagen
        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(FCPATH . 'uploads', $newName);
            $data['image'] = $newName;

            // Borrar imagen vieja
            if (!empty($post['image']) && file_exists(FCPATH . 'uploads/' . $post['image'])) {
                unlink(FCPATH . 'uploads/' . $post['image']);
            }
        } else {
            // Mantener la imagen actual si no se sube nueva
            $data['image'] = $post['image'];
        }

        $postModel->update($id, $data);

        return redirect()->to('/admin/dashboard')->with('success', 'Post actualizado correctamente.');
    }


    public function delete($id)
    {
        $postModel = new Post();
        $postModel->delete($id);

        return redirect()->to('/admin/dashboard')->with('success', 'Post eliminado correctamente.');
    }
}
