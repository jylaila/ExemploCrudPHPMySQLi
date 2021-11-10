<?php
require "../model/conexao.php";
require "../model/cliente.php";

$objCliente = new Cliente(); //instância da classe cliente

$dados = $objCliente->listarTodos($conexao);

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
    $acao = $_GET['acao'];

    if ($acao == 'excluir') {
        if ($objCliente->excluirCliente($conexao, $codigo))
            header("location:../view/index.php"); //redireciono para página inicial
    }
}
