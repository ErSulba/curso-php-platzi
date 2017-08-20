<?php

namespace App\Controllers\Admin;



use App\Controllers\BaseController;

class PostsController extends BaseController{

    public function getIndex()
    {
        // admin/pots or admin/posts/index

        global $pdo;

        $query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC ');

        $query->execute();

        $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
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
        global $pdo;
        $result = false;

        if (!empty($_POST)){
            $sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content) ';
            $query= $pdo->prepare($sql);
            $result= $query->execute([
                'title'     => $_POST['title'],
                'content'   => $_POST['content']
            ]);
        }
        return $this->render('admin/insert-post.twig', ['result' => $result]);
    }
}