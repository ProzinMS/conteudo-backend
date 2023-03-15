<h2> Estrutura de decisão</h2>

<p>
As estruturas de condição permitem executar blocos distintos de código dado uma condição.

<strong>Exemplo</strong>

<pre>
    if(condicao){
        //instruções executadas
        //caso a condição seja verdadeira
    }else{
        //instruções executadas, caso 
        //a condição seja falsa. 
    }
</pre>
</p>

<?php 
 $media = 7;

 if($media >= 6){
    echo "O aluno foi aprovado";
 }else{
    echo "O aluno foi reprovado";
 }
 
?>

<br>
-------------------------
<br>

<?php 
 $media = 4;

 if($media >= 6)
 {
    echo "O aluno foi aprovado";
 }
 else
 {
    echo "O aluno foi reprovado";
 }
 
?>

<br>
-------------------------
<br>

10 < media >= 6 | aprovado<br>
6 < media >= 3  | exame<br>
media < 3       | reprovado<br>


<?php 
$media = 4;

if($media >= 3)
{
   echo "O aluno foi de base.";
}
else if ($media >= 6){
    echo "o aluno tankou o bostil";
}
else
{
   echo "O aluno foi de f no chat";
}


?>

<br>
-------------------------
<br>

<?php 
$media = 4;


if($media >= 6 && "vou terminar essa porra"){
    echo "tmnc, sou foda pra carai";
}
else
{
   echo "Ih, tomei no c#";
}


?>