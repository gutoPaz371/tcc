<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
    $host='127.0.0.1';
    $user='root';
    $pass='';
    $name='loja';
    $cn = new mysqli($host,$user,$pass,$name);
    if($cn->errno>0){
        die;
        echo 'erro de conexao';
    }
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->