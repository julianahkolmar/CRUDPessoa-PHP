<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
    //posteriormente iremos trabalhar com session
    require_once '../controller/cUsuario.php';
    $cadUsuarios = new cUsuario();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <title>Cadastro de Usuário</title>
    </head>
    <body>
        <div class="container">
        <h1>Cadastro de Usuário</h1>
        <form action="<?php $cadUsuarios->inserir(); ?>" method="POST">
        <div class="form-floating">
            <input class="form-control" id="nome" type="text" name="nome" placeholder="Nome...">
            <label for="nome">Nome...</label>
</div>
            <br/><br/>
            <select class="form-select" name="perfilAcesso">
                <option value="">Selecione...</option>
                <option value="admin">Administrador</option>
                <option value="user">Usuário</option>
            </select>
            <br/><br/>
            <div class="form-floating">
            <input class="form-control" type="text" name="usuario" placeholder="User aqui..." id="user">
            <label for="user">User aqui...</label>
            </div>
            <br/><br/>
            <div class="form-floating">
            <input class="form-control"type="password" name="senha" minlength="8" 
                   placeholder="Senha aqui..." id="senha">
                   <label for="senha">Senha aqui...</label>
                   </div>
            <br/><br/>
            <input class="btn btn-success" type="submit" name="salvar" value="Salvar">
            <input class="btn btn-secondary" type="reset" value="Limpar">
            <input class="btn btn-primary" type="button" value="Voltar" 
                   onclick="location.href='../index.php'">
            <input class="btn btn-outline-primary" type="button" value="Lista Usuários" 
                   onclick="location.href='listaUsuarios.php'">
                   
        </form>
        </div>
        <script src="../assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>
