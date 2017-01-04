<?php 
    session_start();
    if( $_SESSION['autenPanel'] != "SI")
    {
        header("location:../../../../panelLogin.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?> 
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<div class="container">
        <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Panel de Control Torres Electronica</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="<?php echo site_url('examples/clientes')?>" role="button" aria-haspopup="true" aria-expanded="false"> Clientes </a>
              </li>
            <li class="dropdown">
                <a href="<?php echo site_url('examples/ventas')?>" role="button" aria-haspopup="true" aria-expanded="false"> Ventas </a>
              </li>
            <li class="dropdown">
                <a href="<?php echo site_url('examples/producto')?>" role="button" aria-haspopup="true" aria-expanded="false"> Productos</a>
              </li>
            <li class="dropdown">
                <a href="<?php echo site_url('examples/categorias')?>" role="button" aria-haspopup="true" aria-expanded="false"> Categorias</a>
            </li>    
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuracion<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('examples/slider')?>">Slider Cabecera</a></li>
                    <li><a href="#">Textos</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="../../../logout.php">LogOut</a></li>
                  </ul>
                </li>
            </ul>  
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
		
	</div>
	<div style='height:20px;'></div>  
    <div class="container">
		<?php echo $output; ?>
    </div>
</body>
</html>
