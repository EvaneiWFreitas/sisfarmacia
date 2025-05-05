<?php
include('../app/config/config.php');
global $pdo;
global $URL;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include ('../layout/head.php');?>
    <title>Sistema de Farmácia - Usuários</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include('../layout/menu.php');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                SISTEMA DE FARMÁCIA - USUÁRIOS
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="panel panel-primary">
                <div class="panel-heading">Lista de Usuários Ativos</div>
                <div class="panel-body">
                    <table class="table table-striped table-hover table-condensed">
                        <th>Nº</th>
                        <th>Nome Completo:</th>
                        <th>Cpf:</th>
                        <th>Data Nasc:</th>
                        <th>Genero:</th>
                        <th>País:</th>
                        <th>Celular:</th>
                        <th>Foto Perfil:</th>
                        <th>Email:</th>
                        <th>Cargo:</th>

                        <?php
                          $query_usuarios = $pdo->prepare("SELECT * FROM tb_usuarios");
                          $query_usuarios->execute();
                          $usuarios = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);
                          foreach ($usuarios As $usuarios){
                               $id                = $usuarios['id'];
                               $nome              = $usuarios['nome'];
                               $ap_paterno        = $usuarios['ap_paterno'];
                               $ap_materno        = $usuarios['ap_materno'];
                               $rg                = $usuarios['rg'];
                               $cpf               = $usuarios['cpf'];
                               $data_nasc         = $usuarios['data_nasc'];
                               $genero            = $usuarios['genero'];
                               $pais              = $usuarios['pais'];
                               $celular           = $usuarios['celular'];
                               $cep               = $usuarios['cep'];
                               $foto_perfil       = $usuarios['foto_perfil'];
                               $email             = $usuarios['email'];
                               $senha             = $usuarios['senha'];
                               $token             = $usuarios['token'];
                               $cargo             = $usuarios['cargo'];
                               $user_criador      = $usuarios['user_criador'];
                               $user_atualizacao  = $usuarios['user_atualizacao'];
                               $user_exclusao     = $usuarios['user_exclusao'];
                               $data_criacao      = $usuarios['data_criacao'];
                               $data_atualizacao  = $usuarios['data_atualizacao'];
                               $data_exclusao     = $usuarios['data_exclusao'];
                               $estado            = $usuarios['estado'];

                               ?>
                              <tr>
                                <td><?php echo $id ;?></td>
                                <td><?php echo $nome ;?></td>
                                <td><?php echo $cpf ;?></td>
                                <td><?php echo $data_nasc ;?></td>
                                <td><?php echo $genero ;?></td>
                                <td><?php echo $pais ;?></td>
                                <td><?php echo $celular ;?></td>
                                <td><img class="img-circle img-responsive" src="<?php echo $URL;?>/usuarios/update_usuarios/<?php echo $foto_perfil;?>" width="50px" alt=""></td>
                                <td><?php echo $email ;?></td>
                                <td><?php echo $cargo ;?></td>
                             </tr>
                        <?php
                          }
                        ?>


                    </table>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('../layout/footer.php');?>
</div>
<!-- ./wrapper -->
<?php include('../layout/footer_links.php');?>
</body>
</html>
