<?php
/**
* @var $post PDOStatement;
*/
?>
<article>
    <h2> <?=htmlentities($post->title)?></h2>
    <?=htmlentities($post->message)?>
    <p>
        <time datetime="<?=$post->datecreated?>"><?=$post->datecreated?></time>
        by <span><a href="mailto:<?=$post->email?>"><?=$post->email?></a> </span>
    </p>
</article>
