<?php

namespace App\Controllers;

use PDO;

class PostController
{
    protected $layout = 'layout/index.tpl.php';
    public $content = 'Hidran Arias';
    protected $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
        $posts = $this->conn->query('select * from posts')
            ->fetchAll(PDO::FETCH_OBJ);
        ob_start();
        require __DIR__.'/../views/posts.tpl.php';
        $this->content = ob_get_contents();
        ob_end_clean();
    }

    /**
     * @return void
     */
    public function display()
    {
        require $this->layout;
    }

    /**
     * @return string
     */
    public function show(int $postid)
    {
        $message = ' this is a post message';
        ob_start();
        require_once __DIR__ . '/../views/post.tpl.php';
        $this->content = ob_get_contents();
        ob_end_clean();
    }
}
