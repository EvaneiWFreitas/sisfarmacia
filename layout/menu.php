<?php
/**
 * ( $URL ) - A $URL É A VARIÁVEL DE CONEXÃO
 * COM O BANCO DE DADOS ->($URL = 'http://localhost/www.sisfarmacia.com';)
*/
global $URL;
?>
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo $URL;?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>F</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sistema de </b>Farmácia</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo $URL;?>/app/templates/AdminLTE-2.3.11/dist/img/fotoney.png"
                             class="user-image" alt="User Image">
                        <span class="hidden-xs">Nome do Usuário</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo $URL;?>/app/templates/AdminLTE-2.3.11/dist/img/fotoney.png"
                                 class="img-circle" alt="User Image">
                            <p>
                                Nome do Usuário - Cargo
                                <small>email do Usuário</small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Finalizar Sessão</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!--<li>
                  <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>-->
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $URL;?>/app/templates/AdminLTE-2.3.11/dist/img/fotoney.png"
                     class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Nome do Usuário</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU DE NAVEGAÇÃO</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Usuarios</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $URL;?>/usuarios/"><i class="fa fa-users"></i> Listar Usuário</a></li>
                    <li><a href="<?php echo $URL;?>/usuarios/create.php"><i class="fa fa-user"></i> Novo Usuário</a></li>
                </ul>
            </li>

            <li><a href=""><i class="fa fa-book"></i> <span>Documentation</span></a></li>


            <li class="header">INFORMAÇÕES</li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
