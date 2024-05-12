<?php

namespace App\Controllers;

use App\Models\ModelProfil;

class User extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new ModelProfil();
    }

    public function index(): string
    {
        $data["title"] = 'My Profile';
        return view('user/index', $data);
    }

    public function edit()
    {
        $data['title'] = "Edit Profile";
        return view('user/edit', $data);
    }

    public function update($id)
    {
        $this->model->save([
            'id' => $id,
            'username' => $this->request->getPost('username'),
            'email'         => $this->request->getPost('email'),
            'fullname'  => $this->request->getPost('fullname')
        ]);
       return redirect()->to('user');
    }
}
