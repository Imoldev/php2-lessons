<?php

use Models\Article;

/** @var $newsList Article[] */

?>

<ul>
    <?php foreach ($newsList as $item): ?>
        <li>
            <h3><?= $item->title; ?></h3>
            <div> <?= $item->date; ?> </div>
            <p><i> <?= $item->preview; ?> </i></p>
            <p> <?= $item->content ?> </p>
            <a href="/admin/?action=edit&id=<?= $item->id ?>">Редактировать</a>
            <a href="/admin/?action=delete&id=<?= $item->id ?>">Удалить</a>
            <hr>
        </li>
    <?php  endforeach; ?>
</ul>
