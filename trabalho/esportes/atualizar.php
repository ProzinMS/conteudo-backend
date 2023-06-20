<?php require_once "../controla_sessao/controla.php"; ?>
<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["esporte"]) 
           && isset($_POST["data"]))
{

//inclui o arquivo para salvar a foto do upload
require_once "salvar_foto.php";

$idesporte =        $_POST["idesporte"];        
$nome =      $_POST["nome"];
$esporte = $_POST["esporte"];
$data =     $_POST["data"];
$local =     $_POST["local"];

//String com o comando SQL para ser executado no DB
$sql = "UPDATE esporte SET 
`nome`= ?, `esporte`= ?, `data`= ?, `local`= ? 
WHERE  `idesporte`= ? ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssdsi", $nome, $esporte, $data, $local, $idesporte);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");
