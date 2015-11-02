<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MAGENTA Impresión y Diseño.</title>
<meta name="keywords" content="impresion, diseño, pyme" />
<meta name="description" content="MAGENTA, diseñando tus ideas." />
<link href="<?php echo base_url('assets/templatemo_style.css'); ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/stylesheet/styles.css'); ?>" />
</head>
<body>
<div id="templatemo_wrapper">
	<div id="templatemo_menu">
        <ul>
//hola verito
            <li><a href="http://localhost/magenta/index.php/admin"><span>.01</span>Admin Home</a></li>
            <li><a href="http://localhost/magenta/index.php/ingresap"><span>.02</span>Ingresar Pedido</a></li>
            <li><a href="http://localhost/magenta/index.php/pedidoex"><span>.03</span>Pedidos Existentes</a></li>
            <li><a href="http://localhost/magenta/index.php/clientes"><span>.04</span>Clientes</a></li>
        </ul>    	
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_header_bar">
    
            <div id="header"><div class="right"></div>
            
                <h1><a href="#">
                    <img src="<?php echo base_url('assets/images/templatemo_logo.png'); ?>" alt="Site Title" />
                </a></h1>
            </div>    
    </div> <!-- end of templatemo_header_bar -->
    
    <div class="cleaner"></div>
    
    <div id="sidebar"><div class="sidebar_top"></div><div class="sidebar_bottom"></div>
    	
        <div class="sidebar_section">

			<div class="cleaner"></div>
		</div>
        
        <div class="sidebar_section">

        	<h2>Bienvenido!</h2>
			<a href="http://localhost/magenta/index.php">Logout</a>

        </div>
        
    </div> <!-- end of sidebar -->

    <div id="templatmeo_content">
        
        <div class="content_section">

            <h1>Notificaciones</h1>

            <h3>Pedidos Atrasados:</h3>

            <?php
            $result = mysql_query("select Codigo_pedido,Rut,Nombre,Apellido,correo,fecha_ent,descripcion,lower(estado) from pedidos where fecha_ent < curdate() and estado = \"en curso\" order by fecha_ent"); 
            echo "<table border='1'  >";
            echo "<tr bgcolor='#CCCCCC'>";
            echo "<td><b>Rut Cliente Asociado</b></td>";
            echo "<td><b>Nombre</b></td>";
            echo "<td><b>Apellido</b></td>";
            echo "<td><b>Codigo Pedido</b></td>";
            echo "<td><b>Contacto</b></td>";
            echo "<td><b>Fecha Tentativa</b></td>";
            echo "<td><b>Descripcion</b></td>";
            echo "</tr>";

            while ($row = mysql_fetch_array($result)){
            echo "<tr>";
            echo "<td bgcolor='#FF0033'>","<FONT COLOR='FFFFFF'>",$row["Rut"],"</td>";
            echo "<td bgcolor='#FF0033'>","<FONT COLOR='FFFFFF'>",$row["Nombre"],"</td>";
            echo "<td bgcolor='#FF0033'>","<FONT COLOR='FFFFFF'>",$row["Apellido"],"</td>";
            echo "<td bgcolor='#FF0033'>","<FONT COLOR='FFFFFF'>",$row["Codigo_pedido"],"</td>";
            echo "<td bgcolor='#FF0033'>","<FONT COLOR='FFFFFF'>",$row["correo"],"</td>";
            echo "<td bgcolor='#FF0033'>","<FONT COLOR='FFFFFF'>",$row["fecha_ent"],"</td>";
            echo "<td bgcolor='#FF0033'>","<FONT COLOR='FFFFFF'>",$row["descripcion"],"</td>";
            echo "</tr>";
            }
            echo "</table>";
            ?>

            <h1> </h1>
            <h1> </h1>
            <h1> </h1>
            <h1> </h1>
            
            <h3>Pedidos sin Retirar:</h3>

       <?php
            $result = mysql_query("select Codigo_pedido,Rut,Nombre,Apellido,correo,fecha_ent,descripcion,lower(estado) from pedidos where DATEDIFF( curdate(),fecha_ent) > 14 and estado= \"listo\""); 
            echo "<table border='1'  >";
            echo "<tr bgcolor='#CCCCCC'>";
            echo "<td><b>Rut Cliente Asociado</b></td>";
            echo "<td><b>Nombre</b></td>";
            echo "<td><b>Apellido</b></td>";
            echo "<td><b>Codigo Pedido</b></td>";
            echo "<td><b>Contacto</b></td>";
            echo "<td><b>Fecha Tentativa</b></td>";
            echo "<td><b>Descripcion</b></td>";
            echo "</tr>";

            while ($row = mysql_fetch_array($result)){
            echo "<tr>";
            echo "<td bgcolor='#33CC00'>","<FONT COLOR='FFFFFF'>",$row["Rut"],"</td>";
            echo "<td bgcolor='#33CC00'>","<FONT COLOR='FFFFFF'>",$row["Nombre"],"</td>";
            echo "<td bgcolor='#33CC00'>","<FONT COLOR='FFFFFF'>",$row["Apellido"],"</td>";
            echo "<td bgcolor='#33CC00'>","<FONT COLOR='FFFFFF'>",$row["Codigo_pedido"],"</td>";
            echo "<td bgcolor='#33CC00'>","<FONT COLOR='FFFFFF'>",$row["correo"],"</td>";
            echo "<td bgcolor='#33CC00'>","<FONT COLOR='FFFFFF'>",$row["fecha_ent"],"</td>";
            echo "<td bgcolor='#33CC00'>","<FONT COLOR='FFFFFF'>",$row["descripcion"],"</td>";
            echo "</tr>";
     }
       echo "</table>";

        ?>
        </div>
    
    </div> <!-- end of templatmeo_content -->
    
    
</div> <!-- end of templatemo_wrapper -->

</body>
</html>
