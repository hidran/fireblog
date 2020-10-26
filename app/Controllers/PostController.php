<?php

namespace App\Controllers;

class PostController
{
    protected $layout = 'layout/index.tpl.php';
    public $content = 'Hidran Arias';
public function __construct()
{
    //echo 'Post controller creato';
}

    /**
     * @return void
     */
    public function display()
    {
        require  $this->layout;
    }

    /**
     * @return string
     */
    public function show(int $postid)
    {
      $message = ' this is a post message';
      ob_start();
      require_once __DIR__.'/../Views/post.tpl.php';
      $this->content = ob_get_contents();
      ob_end_clean();
    }
}
