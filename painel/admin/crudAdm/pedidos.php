
<?php
include '../../../Config/conexao.php';
$sql = "SELECT DISTINCT cliente.nome AS nomeCliente, cliente.id AS idCliente FROM pedido INNER JOIN cliente ON pedido.idCliente=cliente.id";
$res = $cn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../../css/Produtos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../../img/ico.png">
    <title>Pedidos</title>
    <link rel="stylesheet" href="editPedidos.css">

    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <?php
    $contador = 0;
    while ($dado = $res->fetch_array()) { ?>
        <?php 
        $id_cliente = $dado['idCliente'];
        $nome_cliente = $dado['nomeCliente'];
        ?>
        <div id="accordion">
            <div class="card">
                <div class="card-header div-titulo" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" id="btn-accordion" data-toggle="collapse" data-target="<?php echo '#collapse' . $dado['idCliente'] ?>" aria-expanded="true" aria-controls="collapseOne">
                            <span style="text-transform: capitalize;"><?php echo $dado['nomeCliente'] ?></span>
                        </button>
                    </h5>
                </div>

                <div id="<?php echo 'collapse' . $dado['idCliente'] ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <?php
                        include '../../../Config/conexao.php';
                        $sql_p = "SELECT pedido.prod as prod, pedido.id as idp, produto.id as id, cliente.nome AS user, produto.nome, produto.preco, pedido.quantidade, pedido.sta as sta, produto.preco*pedido.quantidade AS total
                            FROM cliente
                            INNER JOIN pedido ON cliente.id=pedido.idCliente
                            INNER JOIN produto ON pedido.idProduto=produto.id WHERE cliente.id=$id_cliente";
                        $res_p = $cn->query($sql_p); ?>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Pedido</th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <?php
                            $valor_total = 0;
                            while ($dado_p = $res_p->fetch_array()) {
                                if ($dado_p['prod'] == 1) {
                                    $corp = 'green';
                                    $texto = 'PRODUZINDO';
                                } else {
                                    $corp = '#b7b7b7';
                                    $texto = 'ITENS DO PEDIDO';
                                }
                                if ($dado_p['sta'] == 1) {
                                    $st = 'CONFIRMADO';
                                } else {
                                    $st = 'PENDENTE';
                                }
                                echo  '<tbody>';
                                echo '<tr>
                                    <th>' . $dado_p['nome'] . '</th>
                                    <td><img class="imgEdit" style="width: 80px; height: 80px;" src="../../../img/' . $dado_p['id'] . '.png"></td>
                                    <td>R$ ' . $dado_p['preco'] . '</td>
                                    <td>' . $dado_p['quantidade'] . '</td>
                                    <td>' . $st . '</td>
                                </tr>';
                                    if($dado_p['prod']==1){
                                        $block2='disabled';
                                    }else{
                                        $block2='';
                                    }
                                    if($dado_p['sta']==1){
                                        $situ='Cancelar Pedido';
                                        $block='';
                                    }else{
                                        $situ='Aguardando...';
                                        $block='disabled';
                                    }
                                
                                $valor_atual = $dado_p['preco'] * $dado_p['quantidade'];
                                $valor_total = $valor_total + $valor_atual;
                            } ?>
                            <td></td><td></td><td></td><td></td><td>
                                <form id="confPd" action="./processos/delPedido.php" method="post">
                                <button <?php echo $block; ?> id='<?php echo $dado_p['idp']; ?>' name='idp' value='<?php echo $dado_p['idp'] ?>' style='background-color: ;'><?php echo $situ;?></button>
                                </form>
                            </td></tbody>;
                        </table>

                        
                        <form action="../crudAdm/processos/processaPedidos.php" method="POST">
                            <button <?php echo $block;echo $block2; ?>>Confirmar Pedido</button>
                        </form>
                        <p style="text-align: right; font-size: 14pt;">Total: R$ <?php echo $valor_total?></p>
                    </div>
                </div>
            </div>

        </div>
    <?php } ?>
    <a class="btn-voltar" href="../logado.php">Voltar</a>



    <script src="javascript/jquery-3.6.0.min.js"></script>
    <!-- CDN Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
