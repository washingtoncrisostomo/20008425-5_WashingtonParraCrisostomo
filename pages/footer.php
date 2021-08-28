<footer class="footer-bs">
    <div class="row">
        <div class="col-md-4 footer-brand animated fadeInLeft">
            <h2><?=$info['nome']; ?></h2>
            <p><strong>RA:</strong> <?=$info['RA']; ?></p>
            <p><strong><?=$info['instituicao']; ?></strong></P>
            <p><strong>CURSO:</strong> <?=$info['curso']; ?></p>
            <p>© 2021 - All rights reserved</p>
        </div>
        <div class="col-md-3 footer-nav animated fadeInUp">
            <h4>Menu —</h4>
            <div class="col-md-6">
                <ul class="pages">
                    <li><a href="index.php">Início</a></li>
                    <li><a href="./quem-somos.php">Quem somos</a></li>
                    <li><a href="./contato">Contato e localização</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-2 footer-social animated fadeInDown">
            <h4>Siga nas redes sociais</h4>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">RSS</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-ns animated fadeInRight">
            <h4>Newsletter</h4>
            <p>Assine nossa newsletter para se manter atualizado sobre as novidades</p>
            <p>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Endereço de E-mail">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                </span>
            </div><!-- /input-group -->
            </p>
        </div>
    </div>
</footer>