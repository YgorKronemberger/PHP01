<?php
function tratarNome($nome){
    
   $nome = mb_strtolower($nome);
   $nome = ucwords($nome);
        
    return $nome;
}




?>