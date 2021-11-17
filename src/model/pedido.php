<?php

class Pedido{
    public function listarItensPedido($conexao, $pedido)
    {
        $comandosql = "Select * from itensPedido where idPedido=$pedido";
        $dados = $conexao->query($comandosql);
        return $dados;
    }

    public function ultimoId($conexao){
        $comandosql = "select max(id)+1 as id from pedido";
        $dados=$conexao->query($comandosql);
        return $dados;

    }
}
    