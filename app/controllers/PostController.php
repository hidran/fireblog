<?php

namespace App\Controllers;

use App\Models\Comment;
use App\Models\Post;
use PDO;
use PDOException;

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
     * @return void
     */
    public function show(int $postid)
    {
        $post = $this->Post->find($postid);
        $comment = new Comment($this->conn);
        $comments = $comment->all($postid);
        $this->content = view('post', compact('post', 'comments'));
    }

    public function edit($postid)
    {

        $post = $this->Post->find($postid);

        $this->content = view('editPost', compact('post'));

    }

    /**
     * @return void
     */
    public function create()
    {

        $this->content = view('newpost');
    }

    /**
     * @return void
     */
    public function save()
    {

        $this->Post->save($_POST);
        redirect('/');
    }

    public function store(string $id)
    {
        try {

            $this->Post->store($_POST);
            redirect('/');

        } catch (PDOException $e) {
            return $e->getMessage();
        }


    }

    public function delete(int $id)
    {
        try {

            $result = $this->Post->delete($id);
            redirect('/');

        } catch (PDOException $e) {
            return $e->getMessage();
        }


    }

    public function saveComment($postid)
    {
        $comment = new Comment($this->conn);
        $_POST['post_id'] = (int)$postid;
        $comment->save($_POST);

        redirect('/post/' . $postid);
    }
}
