<?php
require __DIR__ . '/header.php';
?>

<div class="pokemon">
    <h1>
        <?= $pokemon->name ?>
    </h1>
    <img src="<?= $pokemon->getImageUrl(); ?>">
</div>

<?php
require __DIR__ . '/footer.php';
