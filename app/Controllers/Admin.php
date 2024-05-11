<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;

class Admin extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
       $this->db = \Config\Database::connect();
       $this->builder = $this->db->table('users');
    }
    public function index(): string
    {
        $data["title"] = 'User List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'users.id = auth_groups_users.user_id');
        $this->builder->join('auth_groups', 'auth_groups_users.group_id = auth_groups.id');
        $query = $this->builder->get();
        $data['users'] = $query->getResult();
        return view('admin/index',$data);
    }


    public function detail($id = 0)
    {
        $data["title"] = 'User Detail';
        $this->builder->select('users.id as userid, username, email,user_image,fullname, name');
        $this->builder->join('auth_groups_users', 'users.id = auth_groups_users.user_id');
        $this->builder->join('auth_groups', 'auth_groups_users.group_id = auth_groups.id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();
        $data['user'] = $query->getRow();
        if(empty($data['user']))
        {
           return redirect()->to('/admin');
        }
        return view('admin/detail',$data);


    }


}
