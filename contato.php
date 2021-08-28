<?php
include 'pages/header.php';
include 'dados/dados.php';
?>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Entre em contato <small>Deixe sua mensagem</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="formulario.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Nome</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Endereço de E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Menssagem</label>
                                <textarea name="message" id="message" class="form-control" rows="5" cols="25" placeholder="Menssagem"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Enviar Mensagem</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <legend>Nosso endereço</legend>
                <address>
                    <strong><?=$info['titulo'];?></strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">
                        P:</abbr>
                    (123) 456-7890
                </address>
                <address>
                    <a href="mailto:#">martinsdoces@example.com</a>
                </address>
            </form>
        </div>
    </div>
</div>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Localização <small>Visualize o mapa para nos encontrar</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="container map">
            <div id="map"></div>

            <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHksyZFCGRusvV2DLjit0xWTGsAMjX4ks&callback=initMap&libraries=&v=weekly" async></script>
        </div>
    </div>
</div>


<?php
include 'pages/footer.php';
?>