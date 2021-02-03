<?php
require __DIR__ . '/header.php';
?>

<header>
    <h1><?= $title ?></h1>
</header>
<ul>
    <?php foreach ($monsters as $monster) : ?>
        <li>
            <a href="/pokemon?id=<?= $monster->id; ?>">
                <?= $monster->name; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php
require __DIR__ . '/footer.php';
