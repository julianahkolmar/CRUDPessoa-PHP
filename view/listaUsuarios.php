<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
    require_once '../controller/cUsuario.php';
    $cadUsuarios = new cUsuario();
    $listaUsers = $cadUsuarios->getUsuarios();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Usuários</title>
    </head>
    <body>
        <div class="container">
        <div id="Lista">
            <h2>Lista de Usuários</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Usuário</th>
                        <th>Perfil Acesso</th>
                        <th>Usuário</th>
                        <th>Funções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaUsers as $user): ?>
                    <tr>
                        <td><?php echo $user['idUsuario']?></td>
                        <td><?php echo $user['nomeUsuario']?></td>
                        <td><?php if ($user['perfilAcesso'] == "admin") {
                        echo "Administrador";}
                        elseif ($user['perfilAcesso'] == "user" ) {
                            echo "Usuário";
                        }
?></td>
                        <td><?php echo $user['usuario']?></td>
                        <td>
                            <form action="editarUser.php" method="post">
                                <input type="hidden" name="idUsuario" value="<?php echo $user['idUsuario'];?>">
                                <input type="submit"  value="Editar" name="editar">        
                            </form>
                            <form action="../controller/deletarUser.php" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $user['idUsuario'];?>">
                                <input type="submit"  value="Deletar" name="deletar">        
                            </form>
                              </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br/>
            <input type="button" value="Voltar ao Cadastro" 
            onclick="location.href='cadUsuario.php'"> 
        </div>
        </div>
    </body>
</html>