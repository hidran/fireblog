<?php
/**
* @var $post PDOStatement;
 */
?>
<article>
    <h2> <?= htmlentities($post->title) ?></h2>
    <?= htmlentities($post->message) ?>
    <p>
        <time datetime="<?= $post->datecreated ?>"><?= $post->datecreated ?></time>
        by <span><a href="mailto:<?= $post->email ?>"><?= $post->email ?></a> </span>
    </p>
    <div><?= $post->message ?></div>
    <br>
    <div class='form-group d-flex align-items-center'>
        <form class='' action="/post/<?= $post->id ?>/edit" method='GET'>


            <input type='submit' class='btn btn-primary' value='EDIT'>
        </form>

        <form class='form-inline' action="/post/<?= $post->id ?>/delete" method='POST'>
            <input type='submit' class='btn btn-danger' value='DELETE'>

        </form>
    </div>
</article>
