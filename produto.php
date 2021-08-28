<?php
include 'pages/header.php';
include 'dados/dados.php';
$id = $_GET['id'];
?>

<div class="container bootstrap snipets">
    <h1 class="text-center text-muted"><?= $produtos[$id]['nome']; ?></h1>
    <div class="row flow-offset-1">
        <img class="prod" src="<?= $produtos[$id]['img']; ?> " />
        <span class="price sale">R$<?= number_format($produtos[$id]['preco'], 2); ?> </span><br>
        <h3>Ingredientes: <?= $produtos[$id]['ingredientes']; ?></h3>
        </span>
    </div>
</div>

<?php
include 'pages/footer.php';
?>