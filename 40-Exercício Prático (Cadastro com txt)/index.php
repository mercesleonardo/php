<form method = "POST">
    <label>
    Novo Nome <br>
    <input type= "text" name= "nome">
    <input type = "submit" value ="Adicionar">
    <h2>Lista de Nomes</h2>
    </label>
</form>
</br>


<?php

$nome = filter_input(INPUT_POST,'nome'); //filter input, filtra o nome de entrada
if($nome != null){ // se o filtro for valido ou diferente de em branco
    $novo = file_get_contents('nomes.txt'); //lê todo o conteúdo de um arquivo
    $novo .="\n <li>$nome</li>"; // cria um novo nome com em formato de lista <li>
    echo$novo; //imprime novo
    file_put_contents('nomes.txt',$novo); // file_put_contents — Escreve dados em um arquivo
} else{
    $novo= file_get_contents('nomes.txt');
    echo$novo;
}


?>

