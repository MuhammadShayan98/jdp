<?php

namespace App\Models;

use CodeIgniter\Model;

class Common extends Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }
}
