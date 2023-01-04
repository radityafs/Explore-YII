<?php

/** @var yii\web\View $this */
?>

<div class="row">
    <?php foreach ($data as $movie) : ?>
        <div class="col-md-3">
            <div class="card">
                <img src="<?= $movie['link']['thumbnail'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $movie['title'] ?></h5>
                    <a href="<?= $movie['link']['url'] ?>" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</p>