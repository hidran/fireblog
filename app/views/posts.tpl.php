<?php
foreach ($posts as $post):
?>
<article>
    <h1><?=htmlentities($post->title)?></h1>
    <?=htmlentities($post->message)?>
</article>
<?php
endforeach;
?>