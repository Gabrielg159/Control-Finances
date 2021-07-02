<?php

include 'config/mysql.php';
include 'config/funcoes.php';
include 'config/check.php';

?>
<!DOCTYPE html>
<html lang="pt">

<head>

   <meta charset="utf-8" />
   <title><?php echo $titulo_site.' - '.$sistema.' v. '.$versao; ?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
   <meta content="Sistema Financeiro" name="author" />

   <link rel="stylesheet" href="css/admin.css" />
   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-responsive.min.css" />
   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-fileupload.css" />
   <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" href="css/style-responsive.css" />
   <link rel="stylesheet" href="css/style-gray.css" id="style_color" />
   <link rel="stylesheet" href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" />
   <link rel="stylesheet" href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" type="text/css" media="screen"/>
   <link rel="stylesheet" href="assets/fancybox/source/jquery.fancybox.css" />

   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
    <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />


<div class="luz">
</div>
<div class="popup">
	<div class="titulopopup">
        <span id="titulo" class="page-title tpopup"></span>
        <a href="#" onClick="fecharpopup(); return false;">
         <img src="img/fecharpopup.png" height="25" width="25" border="0">
        </a>
    </div>
    <div class="conteudopopup">
    </div>
</div>
<body class="fixed-top">
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <div class="navbar-inner">
           <div class="container-fluid">
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder"></div>
               </div>
               <a class="brand" href="sistema.php">
               </a>
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <div id="top_menu" class="nav notify-row">
                   <ul class="nav top-menu">

                   </ul>
               </div>
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <span class="username"><?php echo $nome_admin; ?></span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               <li><a href="sair.php"><i class="icon-key"></i> Sair</a></li>
                           </ul>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
   <div id="container" class="row-fluid">
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Busca" />
            </form>
         </div>
          <ul class="sidebar-menu">
<?php
if (@$tp_admin == 1)
{
	echo menu('inicial','Home','icon-home','');
	echo menu('clientes','Clientes','icon-book','');
	echo menu('fornecedores','Fornecedores','icon-book','');
	echo menu('financeiro','Financeiro','icon-usd','');
	echo menu('faturas','Faturas','icon-barcode','');
	echo menu('contasapagar','Contas a pagar','icon-warning-sign','');
	echo menu('filiais','Filiais','icon-building','');
	echo menu('usuarios','Usuários','icon-user','');
	echo menu('conheceu','Como Conheceu','icon-info-sign','');
	echo menu('tiposervicos','Serviços','icon-briefcase','');
	echo menu('recebimento','Tipos de recebimento','icon-credit-card','');

} 
else if (@$tp_admin == 2)
{ 
	echo menu('inicial','Home','icon-home');
	echo menu('pedidos','Pedidos','icon-credit-card');
	echo menu('senha','Mudar senha','icon-key');

}
?>
          </ul>
      </div>
      </div>
      <div id="main-content">
         <div class="container-fluid">
            <div class="row-fluid">
               <div class="span12">
                   <h3 class="page-title titulomeio">
                     
                   </h3>
               </div>
            </div>
            <div class="row-fluid" id="conteudo"></div>
         </div>
      </div>
   </div>



   
<script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
<script src="js/jquery.price_format.1.7.min.js" type="text/javascript"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/data-tables/jquery.dataTables.js" type="text/javascript"></script>
<script src="assets/data-tables/DT_bootstrap.js" type="text/javascript"></script>
<script src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script> 
   <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
<!-- ie8 fixes -->
<!--[if lt IE 9]>
<script src="js/excanvas.js"></script>
<script src="js/respond.js"></script>
<![endif]-->

<script src="js/jquery.blockui.js"></script>
<!-- BEGIN JAVASCRIPTS -->
   
<script type="text/javascript" src="assets/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="js/jquery.pulsate.min.js"></script>

<script src="js/common-scripts.js"></script>


<script>
//CARREGAR AO ABRIR
$(document).ready(function()
{
	var ancora = window.location.href.split("#")[1];
	var ancora2 = window.location.href.split("#")[2];
<?php include 'config/ancoras.php'; ?>	
	
}); 
</script>

   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>