<?php
include_once 'func.php';


$nome = tratarNome($_POST["nome"]);
$senha = $_POST["senha"];
$tel = $_POST["telefone"];
    


if(empty($nome) || empty($tel) || empty($senha)){


    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0.1; URL=index.html">';
    echo "<script>
            alert('Complete os campos vazios')
            </script>";
 
}
else{
   
   //$data = date(date_default_timezone_set('America/Sao_Paulo'));
    
    date_default_timezone_set('America/Sao_Paulo');
    //echo date_default_timezone_get();
    $agora = date('y-m-d');
    $arquivo = fopen("C://temp/dados.txt", "a+");
    //fwrite($arquivo,  $dataHora);
    fwrite($arquivo, $agora);
    fwrite($arquivo, "\r\n");
    fwrite($arquivo, $nome);
    fwrite($arquivo, "\r\n");
    fwrite($arquivo, $senha);
    fwrite($arquivo, "\r\n");
    fwrite($arquivo, $tel);
    fclose($arquivo);
    
    
echo $nome;
echo "<br>";
echo $tel;
echo "<br>";
echo $senha;
}



?>