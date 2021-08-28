<?php
include 'pages/header.php';
include 'dados/dados.php'
?>

<div class="img-header"></div>
<div class="container bootstrap snipets">
  <h1 class="text-center text-muted">Catálogo de Produtos</h1>
  <div class="row flow-offset-1">

    <?php
    $cont = 0;
    foreach ($produtos as $key => $produto) {
    ?>

      <div class="col-xs-6 col-md-4">
        <div class="product tumbnail thumbnail-3"><a href="produto.php?id=<?= $cont ?>"><img src="<?= $produto['img']; ?>" /></a>
          <div class="caption">
            <h4 class="prod-index"><a href="produto.php?id=<?= $cont ?>"><?= $produto["nome"] ?></a></h4>
            <span class="price sale">R$<?= number_format($produto['preco'], 2); ?></span>
          </div>
        </div>
      </div>

    <?php $cont++;
    } ?>

  </div>
</div>

<?php
include 'pages/footer.php';
?>