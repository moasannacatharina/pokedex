<?php
require __DIR__ . '/header.php';
?>

<h1>
    <?= $pokemon->name ?>
</h1>
<img src="<?= $pokemon->getImageUrl(); ?>">
<?php
require __DIR__ . '/footer.php';
