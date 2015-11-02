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

    <h2>Buscar Pedidos</h2>

             <?=form_open('http://localhost/magenta/index.php/pedidoex/buscar_pedido');
            //aqui se procesará nuestro formulario, controlador comentarios, función insertar_comentarios
            //creamos los arrays que compondran nuestro formulario
            //primer array con el input que se llamará nombre y será donde introduciremos el mismo
             
                $codigo = array(
                    'name' => 'codigo',
                    'id' => 'codigo',
                    'size' => '50',
                    'style' => 'width:50%',
                    'value' => set_value('codigo') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
                );
             
            //el botón submit de nuestro formulario
                $submit = array(
                    'name' => 'submit',
                    'id' => 'submit',
                    'value' => 'Buscar',
                    'title' => 'Buscar'
                );
                ?>
            <?php
            echo form_fieldset('Buscar');
            ?>
                        <table>
                            <tr>
                                <td>
                                    <?php echo form_label('Codigo de Pedido: '); ?>
                                </td>
                                <td>
                                    <?php echo form_input($codigo); ?>
                                    <?php echo form_submit($submit);?>
                                    <font color="red" style="font-weight: bold; font-size: 14px; text-decoration: underline"><?php echo validation_errors(); ?></font>
                                </td>
                            </tr>
                                <td>
                                </td>
                            </tr>
                            <?php
                            echo form_close();
                            ?>
                    </table>
                    <?php
                           echo form_fieldset_close();
                   ?>

    <div id="templatmeo_content">
        </div>
