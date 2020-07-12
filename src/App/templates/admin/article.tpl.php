<?php
use Models\Article;

/** @var $article Article */
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
    <i><?php echo $article->preview; ?></i>
</p>
<p>
    <?php echo $article->content; ?>
</p>
<?php if(!is_null($article->author)): ?>
    <p><i> <?php echo $article->author->pseudonym; ?> </i></p>
<?php endif; ?>
<a href="/admin">К списку новостей</a>
