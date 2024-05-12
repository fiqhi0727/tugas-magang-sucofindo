<?php 
namespace App\Models;
use CodeIgniter\Model;

class ModelProfil extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'username', 'email', 'fullname'];
}

?>