<?php

namespace App\Controllers\Admin;



use App\Controllers\BaseController;
use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Model;

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
        //admin/posts/create POST
        $blogPost = new BlogPost([
            'title'     => $_POST['title'],
            'content'   => $_POST['content']
        ]);
        $blogPost->save();

        $result = true;

        return $this->render('admin/insert-post.twig', ['result' => $result]);
    }
}