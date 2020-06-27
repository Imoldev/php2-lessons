<?php
use Models\Article;

/** @var $article Article */
?>

<h2>
    <?= $article->title; ?>
</h2>
<div>
    <?= $article->date; ?>
</div>
<hr>
<p>
    <i><?= $article->preview; ?></i>
</p>
<p>
    <?= $article->content; ?>
</p>
<a href="/admin">К списку новостей</a>
