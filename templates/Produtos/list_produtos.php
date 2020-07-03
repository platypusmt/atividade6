

<?php foreach($produtos as $produto): ?>

    <div class="produto">
        <strong><?= $produto->nome?></strong>
        <p><?= $produto->descricao?></p>
        Preço: R$ <?= $produto->preco?>
        <hr>
    </div>

<?php endforeach; ?>

<div>
<?= $this->Html->link(__('Editar Produtos'), ['action' => 'index']) ?>

</div>