<?php

namespace App\Controllers;

use App\Models\Post;
use PDO;

class PostController
{
    protected $layout = 'layout/index.tpl.php';
    public $content = 'Hidran Arias';
    protected $conn;
    protected $Post;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
        $this->Post = new Post($conn);

    }

    public function process()
    {

    }

    /**
     * @return void
     */
    public function display()
    {
        require $this->layout;
    }

    public function getPosts()
    {
        $posts = $this->Post->all();

        $this->content = view('posts', compact('posts'));
    }

    /**
     * @return string
     */
    public function show(int $postid)
    {
        $post = $this->Post->find($postid);
        return view('post', compact('post'));
    }
    /**
     * @return string
     */
    public function create()
    {

        return view('newpost');
    }
    /**
     * @return string
     */
    public function save()
    {

      $this->Post->save($_POST);
        redirect('/');
    }
}
