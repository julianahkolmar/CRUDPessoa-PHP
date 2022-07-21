<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
require_once '../controller/cUsuario.php';
        $cadUsuario = new cUsuario();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Language" content="pt-br">
        <meta name="viewport" content="width=device=width,initial-scale=1.0">
        <title>Cadastro de Usuário</title>
    </head>
    <body style="font-family: Arial, Helvetica, sans-serif;">
        <h1>Cadastro de Usuário</h1>
        <form action="<?php $cadUsuario->inserir();?>" method="POST">
            <input type="text" name="nome" placeholder="Nome">
            <br/><br/>
            <input type="text" name="usuario" placeholder="User">
            <br/><br/>
            <input type="password" name="senha" placeholder="Senha" minlength="8">
            <br/><br/>
            <input type="submit" name="salvar" value="Salvar">
            <input type="reset" value="Limpar">
            <input type="button" value="Voltar" onclick="location.href='../index.php'">
            <input type="button" value="Lista Usuários" onclick="location.href='../listaUsuarios.php'">
        </form>
            </body>
</html>
