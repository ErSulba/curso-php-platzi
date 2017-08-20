<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Sirius\Validation\Validator;

class UsersController extends BaseController{
    public function getIndex(){
        $user= User::all();
        return $this->render('admin/users.twig',[
            'users' => $user
        ]);
    }

    public function getCreate(){

        return $this->render('admin/insert-user.twig',[]);

    }

    public function postCreate(){

        $errors = [];
        $result =false;
        $validator =new Validator();
        $validator->add('name','required');
        $validator->add('email','required');
        $validator->add('password', 'required');
        $validator->add('email', 'email');


        if ($validator->validate($_POST)){

            $user = new User();
            $user->name     =   $_POST['name'];
            $user->email    =   $_POST['email'];
            $user->password =   password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user->save();
            $result = true;
        }else{
            $errors = $validator->getMessages();
        }

        return $this->render('admin/insert-user.twig',[
            'result'    =>  $result,
            'errors'    =>  $errors
        ]);


    }
}