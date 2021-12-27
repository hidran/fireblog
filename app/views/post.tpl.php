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
    <div class="form-group d-flex align-items-center justify-content-between row">
        <div class="col-md-6">
            <form class='' action="/post/<?= $post->id ?>/edit" method='GET'>


                <input type='submit' class='btn btn-primary' value='EDIT'>
            </form>
        </div>
        <div class='col-md-6'>

            <form class='form-inline' action="/post/<?= $post->id ?>/delete" method='POST'>
                <input type='submit' class='btn btn-danger' value='DELETE'>

            </form>
        </div>
    </div>
    <div class='row'>
        <div class='push-md-3 col-md-6 text-md-center'>
            <hr>
            <h2>COMMENTS</h2>
            <?php

            if (!empty($comments)) {
                foreach ($comments as $comment) { ?>

                    <p><?= $comment->comment ?></p>
                    <p>
                        <time datetime="<?= $comment->datecreated ?>"><?= $comment->datecreated ?></time>

                        by <span><a href="mailto:<?= $comment->email ?>"> <?= $comment->email ?></a> </span>
                    </p>

                    <?php
                }
            }
            ?>
        </div>
    </div>
</article>
