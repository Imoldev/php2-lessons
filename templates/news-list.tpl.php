<ul>
    <?php foreach ($newsList as $item): ?>
    <li>
        <h3><?= $item->title; ?></h3>
        <div> <?= $item->date; ?> </div>
        <p> <?= $item->preview; ?> </p>
        <a href="/article.php?id=<?= $item->id ?>">Читать подробно</a>
        <hr>
    </li>
    <?php  endforeach; ?>
</ul>
