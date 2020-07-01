<?php
use Models\Article;

/** @var Article $article */
$article = $this->article;
?>
<h2>
    <?php echo $article->title; ?>
</h2>
<div>
    <?php echo $article->date; ?>
</div>
<hr>
<p>
    <?php echo $article->content; ?>
</p>
<p>
    <?php if (!is_null($article->author)): ?>
        <i><?php echo $article->author->pseudonym; ?></i>
    <?php endif; ?>
</p>
<a href="/index.php">К списку новостей</a>
