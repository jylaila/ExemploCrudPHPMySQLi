<?php

include "header.php";
include "modalCliente.php";
require "../controller/clienteController.php";

?>
<body class="container-fluid">

<h1> Cadastro de Cliente</h1>

<button type="button" class="btn btn-outline-primary" 
data-toggle="modal" data-target="#cadCliente">Cadastrar</button>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while($objcli = $dados->fetch_object()){    
    ?> 
    <tr>
      <th scope="row"><?php echo $objcli->codigo;?></th>
      <td><?php echo $objcli->nome;?></td>
      <td><?php echo $objcli->endereco;?></td>
      <td><?php echo $objcli->telefone;?></td>
      <td> 
      <a href="editarCliente.php?id=<?php echo $objcli->codigo?>&acao=editar">  
      <i class="bi bi-pencil-square"></i></a> 
        
      <!-- <button location.href="#">Exemplo</button> -->
      <a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir este cliente?'))location.href='../controller/clienteController.php?id=<?php echo $objcli->codigo ?>&acao=excluir'">
      <i class="bi bi-trash"></i> </a> 
    </td>
    </tr>
    <?php }?>
  </tbody>
</table>


</div>

</body>
</html>