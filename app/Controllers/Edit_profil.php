<?php

namespace App\Controllers;

class Edit_profil extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Edit Profil';
        return view('edit_profil/index', $data);
    }


   
}
