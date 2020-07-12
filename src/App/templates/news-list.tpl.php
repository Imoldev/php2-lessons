<ul>
    <?php

    use Models\Article;

    /** @var Article $item */
    foreach ($this->articles as $item): ?>
        <li>
            <h3><?php echo $item->title; ?></h3>
            <div> <?php echo $item->date; ?> </div>
            <p> <?php echo $item->preview; ?> </p>
            <?php if (!is_null($item->author)): ?>
                <p><i> <?php echo $item->author->pseudonym; ?> </i></p>
            <?php endif; ?>
            <br>
            <a href="/article/detail?id=<?php echo $item->id; ?>">Читать подробно</a>
            <hr>
        </li>
    <?php endforeach; ?>
</ul>
