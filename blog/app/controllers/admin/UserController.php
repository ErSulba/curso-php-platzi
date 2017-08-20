<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController{
    public function getIndex(){
        $user= User::all();
        return $this->render('admin/users.twig',[
            'users' => $user
        ]);
    }
}