<?php
use Models\Article;

/** @var $article Article */

?>

<form action="" method="post">
    <input type="hidden" name="action" value="<?= $forward; ?>">
    <input type="hidden" name="id" value="<?= $article->id ?? ''; ?>">
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
    <?php if (isset($article)): ?>
    <a href="/admin/?action=edit&id=<?php echo $article->id ?>">Сбросить</a>
    <?php endif; ?>
</form>