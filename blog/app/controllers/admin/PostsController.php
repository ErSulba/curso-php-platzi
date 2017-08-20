<?php

namespace App\Controllers\Admin;



use App\Controllers\BaseController;
use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Model;
use Sirius\Validation\Validator;

class PostsController extends BaseController{

    public function getIndex()
    {
        // admin/pots or admin/posts/index
        $blogPosts = BlogPost::all();
        return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
    }

    public function getCreate()
    {
        //admin/posts/create GET
        $result= false;
        return $this->render('admin/insert-post.twig', [ ]);

    }

    public function postCreate()
    {
        $errors = [];
        $result =false;
        $validator =new Validator();
        $validator->add('title','required');
        $validator->add('content','required');

        if ($validator->validate($_POST)){

            $blogPost = new BlogPost([
                'title'     => $_POST['title'],
                'content'   => $_POST['content']
            ]);
            if ($_POST['img']){
                $blogPost->img_url = $_POST['img'];
            }
            $blogPost->save();

            $result = true;
        }else{
            $errors = $validator->getMessages();
        }


        return $this->render('admin/insert-post.twig', [
            'result' => $result,
            'errors' => $errors]);
    }
}