<?php
include 'pages/header.php';
include 'dados/dados.php';
?>

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Quem somos
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-12 col-md-12">
            <h1>
                Nossa História
            </h1>
            <p class="quem-somos">
                <?=$info['quem-somos'];?>
            </p>
        </div>
    </div>
</div>

<?php
include 'pages/footer.php';
?>