<?php
use Models\Article;

/** @var $newsList Article[] */
/** @var $article Article */

?>

<form action="" method="post">
    <input type="hidden" name="action" value="<?= $forward; ?>">
    <input type="hidden" name="id" value="<?= $id ?? ''; ?>">
    <label for="title">Заголовок</label>
    <br>
    <input id="title" type="text" name="title" value="<?= isset($article) ? $article->title : ''; ?>">
    <br><br>
    <label for="preview">Анонс</label>
    <br>
    <textarea name="preview" id="preview" cols="60" rows="10"><?= isset($article) ? $article->preview : ''; ?></textarea>
    <br><br>
    <label for="content">Содержание</label>
    <br>
    <textarea name="content" id="content" cols="60" rows="10"><?= isset($article) ? $article->content : ''; ?></textarea>
    <br><br>
    <button type="submit">Отправить</button>
    <a href="/admin.php?action=clear">Сбросить</a>
</form>
<ul>
    <?php foreach ($newsList as $item): ?>
    <li>
        <h3><?= $item->title; ?></h3>
        <div> <?= $item->date; ?> </div>
        <p><i> <?= $item->preview; ?> </i></p>
        <p> <?= $item->content ?> </p>
        <a href="/admin.php?action=edit&id=<?= $item->id ?>">Редактировать</a>
        <a href="/admin.php?action=delete&id=<?= $item->id ?>">Удалить</a>
        <hr>
    </li>
    <?php  endforeach; ?>
</ul>

