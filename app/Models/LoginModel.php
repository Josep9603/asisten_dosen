<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $allowedFields = ['username', 'password'];
    protected $primaryKey = 'username';
    protected $useAutoIncrement = false;


    public function cekLogin($data)
    {
        return $this->where(['username' => $data['username'], 'password' => $data['password']])->first();
    }

}
