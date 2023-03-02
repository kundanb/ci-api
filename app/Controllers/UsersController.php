<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class UsersController extends ResourceController
{
    use ResponseTrait;

    private $users = [
        [
            'id' => 1,
            'name' => 'A'
        ],
        [
            'id' => 2,
            'name' => 'B'
        ]
    ];

    public function getAllUsers()
    {
        return $this->respond( $this->users );
    }

    public function getUserById($id = null)
    {
        foreach ($this->users as $user)
        {
            if ($user['id'] == $id)
            {
                return $this->respond($user);
            }
        }
    }

    public function createUser()
    {
        return $this->respond([$this->request->getVar('name')]);
    }
}
