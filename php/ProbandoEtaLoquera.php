<?php
$titulo = 'pepe donis';
$contenido = 'Contenido por defecto';
$items = [
    'pepe',
    'donis'
];
?>

<div class="php-component">
    <h2 class="text-2xl bg-blue-500"><?= $titulo ?></h2>
    <p><?= $contenido ?></p>

    <?php if (!empty($items)): ?>
        <ul class="list-disc pl-5 mt-4">
            <?php foreach ($items as $item): ?>
                <li class=""><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</div>