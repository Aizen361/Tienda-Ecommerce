<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin/css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('admin/img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">
    
    <style>
      .dashboard-sideBar-UserInfo{
  border-top: 1px solid rgba(255, 255, 255, .3);
  border-bottom: 1px solid rgba(255, 255, 255, .3);
  color: #fff;
  font-size: 14px;
  padding: 20px 0;
}
.dashboard-sideBar-UserInfo figure img{
  width: 100px;
  height: 100px;
  border-radius: 100%;
  display: block;
  margin: 0 auto;
}
.dashboard-sideBar-UserInfo ul{
  margin-top: 15px;
}
.dashboard-sideBar-UserInfo ul > li,
.dashboard-sideBar-UserInfo ul > li > a{
  display: inline-block;
  color: #fff;
}
.dashboard-sideBar-UserInfo ul > li > a{
  outline: none;
  font-size: 20px;
  padding: 7px;
  transition: all .3s ease-in-out;
}
.dashboard-sideBar-UserInfo ul > li > a:hover{
  color: #FF5722;
}
.producto-block
{
  background: rgba(243, 255, 255, 1);
  border-radius: 2em;
  padding: 1em;
}

   </style>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          
          
          <span class="logo-mini"><b>E</b>K</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>EiKova</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    
                  <span class="hidden-xs">{{Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
               
                  <!-- User image -->
                  <li class="user-header">
                   
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
         <!-- SideBar User info -->
        <section class="sidebar">
            <ul class="sidebar-menu">
            <li class="header"></li>
            <div class="full-box dashboard-sideBar-UserInfo">
        <figure class="full-box">
          <img src="{{asset('imagenes/perfil/'.auth()->user()->imagen)}}"lt="UserIcon">
          <figcaption class="text-center text-titles">{{Auth::user()->name}}</figcaption>
        </figure>
      </div>
              
          <!-- Sidebar user panel -->
                    
      <!-- sidebar menu: : style can be found in sidebar.less -->
             <li class="treeview">
              <a href="#">
                <i class="fa fa-child"></i>
                <span>Perfil</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('Perfil/show')}}"><i class="fa fa-circle-o"></i>Mi perfil</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-open"></i>
                <span>Subir Catalogo</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('/home')}}"><i class="fa fa-circle-o"></i>Subir Archivo</a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Almacén</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('almacen/categoria')}}"><i class="fa fa-circle-o"></i>Categorias</a></li>
                <li><a href="{{url('almacen/producto')}}"><i class="fa fa-circle-o"></i> Productos</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Compras</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
            
                <li><a href="{{url('compras/ingresos')}}"><i class="fa fa-circle-o"></i> Ingresos</a></li>                


                <li><a href="{{url('almacen/proveedor')}}"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                  </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Ventas</span>
                 <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <li><a href="{{url('ventas/ventas')}}"><i class="fa fa-circle-o"></i> Ventas</a></li>
                <li><a href="{{url('ventas/cliente')}}"><i class="fa fa-circle-o"></i> Clientes</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-trash"></i>
                <span>Restauraciones</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('restauracion/categoria')}}"><i class="fa fa-circle-o"></i>Restaurar Categorias</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="{{url('restauracion/producto')}}"><i class="fa fa-circle-o"></i>Restaurar Productos</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="{{url('restauracion/ingreso')}}"><i class="fa fa-circle-o"></i>Restaurar Ingreso</a></li>
              </ul>
            </li>
                       
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sistema de Ventas</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
                        
		                          <!--Contenido-->
                              @yield('contenido')
		                          <!--Fin Contenido-->
                            
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="www.incanatoit.com">IncanatoIT</a>.</strong> All rights reserved.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('admin/js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/js/app.min.js')}}"></script>
    
  </body>
</html>
