<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;


class UserModel extends Model
{

    // public function __construct(ConnectionInterface &$db)
    // {
    //     $this->db = &$db;
    // }

    protected $table = 'tbl_users';

    protected $allowedFields = [
        'email',
        'password',

    ];


    public function login_user($email,$password)
    {
        $db = db_connect();

        $query = $db->query("
        SELECT * FROM `tbl_user_role` AS ur
        INNER JOIN tbl_users AS u 
        ON u.user_id = ur.user_id
        INNER JOIN tbl_role AS r 
        ON r.role_id = ur.role_id
        WHERE u.email = '$email' AND u.password = '$password'");


        return $query->getRow();


        // $builder = $this->db->table('tbl_user_role as ur');
        // $builder->join('tbl_users as u', 'u.id = ur.id');
        // $builder->join('tbl_role as r', 'r.id = ur.id');

        // $query = $builder->get()->getResult();
    }
}
