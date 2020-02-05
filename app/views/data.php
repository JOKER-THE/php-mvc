<?php

/**
 * @var array $model - массив данных
 */
?>

<h2>Данные</h2>
<div class="data-block">
    <?php foreach ($model as $item): ?>
        <div class="data-item" style="border: 1px solid black">
            <div class="id">
                <span><?= $item['id']; ?></span>
            </div>
            <div class="value">
                <span><?= $item['value']; ?></span>
            </div>
        </div>
        <br/>
    <?php endforeach; ?>
</div>