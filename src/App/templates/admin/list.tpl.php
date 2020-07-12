<?php

use Models\Article;

/** @var Article[] $newsList */
$newsList = $this->articles;
?>
<ul>
    <?php foreach ($newsList as $item): ?>
        <li>
            <h3><?= $item->title; ?></h3>
            <div> <?= $item->date; ?> </div>
            <p><i> <?= $item->preview; ?> </i></p>
            <p> <?= $item->content ?> </p>
            <?php if (!is_null($item->author)): ?>
                <p><i><?php echo $item->author->pseudonym; ?></i></p>
            <?php endif; ?>
            <a href="/admin/article/edit?id=<?= $item->id ?>">Редактировать</a>
            <a href="/admin/article/delete?id=<?= $item->id ?>">Удалить</a>
            <hr>
        </li>
    <?php endforeach; ?>
</ul>
