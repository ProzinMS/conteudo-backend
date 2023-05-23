<?php
   
   //importa o arquivo de conexão
   require_once "conexao.php";

   //verificar  se foi enviada o param o id
   if(insert($_GET['id'])){

   $id = $_GET['id'];

   //cria uma variável com um comando SQL
   $SQL = "SELECT FROM `usuario` WHERE  `idusuario`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: ../form_usuario.php");

   //pegar os reultados da consulta + todas as linhas de resulados 
   $resultados = $comandos->get_result();

   //pega a primeira linha de resultado da consulta
   $usuario = $resultados->fetch_assoc();

   //imprimir o usuário
   echo $usuario->senha;

}


   







