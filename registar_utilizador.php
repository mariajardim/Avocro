<?php

include('conf.php');

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$pass = $_POST['senha'];

if(isset($_POST['aceitarpolitica'])){
    $aceitarpolitica = 1;
} else {
    $aceitarpolitica = 0;
}

$sql = "INSERT into clientes
(nome_cliente, apelido_cliente, email, pass, aceitar_politica)
VALUES
('$nome', '$apelido', '$email','$pass', $aceitarpolitica)";


$resultado = $ligacao->query($sql);

header('Location:index.php?area=registo&status=ok');

?>