<?php
   
   //importa o arquivo de conexão
   require_once "conexao.php";

   //cria uma variável com um comando SQL
   $SQL = "SELECT *  FROM usuario";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

 
   //executa o comando
   $comando->execute();

 //peagar os resultados da consulta - todas as linhas 
 $usuarios = $comando->get_result();

 //pega todas linha de resultado da consulta I
 $usuario = [];
 while ($usuario = $resultados->fetch_object()){
   $usuario[]= $usuario;

 }







