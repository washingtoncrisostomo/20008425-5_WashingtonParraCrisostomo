<?php

if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
        if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
            $name = filter_input(INPUT_POST, "name");
            $message = filter_input(INPUT_POST, "message");
            if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
                $email = filter_input(INPUT_POST, "email");
            else
                echo "Email não válido!!!";
?>
            <p>Nome: <?= $name; ?></p>
            <p>E-mail: <?= $email; ?></p>
            <p>Mensagem: <?= $message; ?></p>
<?php
        } else {
            echo "Há algum campo vazio";
        }
    } else {
        echo "Campos obrigatórios não preenchidos";
    }
}
?>