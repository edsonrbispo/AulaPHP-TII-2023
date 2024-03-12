<?php

//var_dump($_POST);

echo "<h1>Dados do Usuário</h1>";
echo "<hr>";

echo "<strong>Nome: </strong>" . $_POST['nome'] ."<br>";
echo "<strong>E-mail: </strong>" . $_POST['email'] ."<br>";
echo "<strong>Senha: </strong>" . $_POST['senha'] ."<br>";
echo "<strong>CEP: </strong>" . $_POST['cep'] ."<br>";
echo "<strong>Endereço: </strong>" . $_POST['endereco'] ."<br>";
echo "<strong>Numero: </strong>" . $_POST['numero'] ."<br>";
echo "<strong>Complemento: </strong>" . $_POST['complemento'] ."<br>";
echo "<strong>Bairro: </strong>" . $_POST['bairro'] ."<br>";
echo "<strong>Cidade: </strong>" . $_POST['cidade'] ."<br>";
echo "<strong>Estado: </strong>" . $_POST['estado'] ."<br>";
echo "<strong>Genero: </strong>" . $_POST['genero'] ."<br>";
echo "<strong>Cursos: </strong>" . implode(', ',$_POST['cursos']) ."<br>";
echo "<strong>Sugestao: </strong>" . $_POST['sugestao'] ."<br>";
echo "<strong>NewLetter: </strong>" . $_POST['newsletter'] ."<br>";