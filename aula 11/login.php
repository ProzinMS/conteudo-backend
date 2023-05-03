
<?php
// se existe, ou nfoi enviada, a variável usuário 
if($_GET['usuario'])){} == "admin" && $_GET['senha'] == 123){
    echo "usuário logado";
}else{
    echo "Usuári ou senha inválidos!";
}

}else{
//mamda abrir outro arquivo, o formulário de login 
// caso o usuário tente abrir esse arquivo pela URL 
// sem acessaro formulario de login  "redirecionamento "
header(location : form_login.html);
?>