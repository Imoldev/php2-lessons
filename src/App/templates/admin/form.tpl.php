<?php
use Models\Article;

/** @var Article $article */
$article = $this->article;
?>
<form action="/admin/article/save" method="post">
    <input type="hidden" name="id" value="<?php echo $article->id ?? ''; ?>">
    <label for="title">Заголовок</label>
    <br>
    <input id="title" type="text" name="title" value="<?php echo isset($article) ? $article->title : ''; ?>">
    <br><br>
    <label for="preview">Анонс</label>
    <br>
    <textarea name="preview" id="preview" cols="60" rows="10"><?php echo isset($article) ? $article->preview : ''; ?></textarea>
    <br><br>
    <label for="content">Содержание</label>
    <br>
    <textarea name="content" id="content" cols="60" rows="10"><?php echo isset($article) ? $article->content : ''; ?></textarea>
    <br><br>
    <button type="submit">Отправить</button>
    <?php if (isset($article)): ?>
    <a href="/admin/article/edit?id=<?php echo $article->id ?>">Сбросить</a>
    <?php endif; ?>
</form>