<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/css.css">
</head>
<body>
	<!-- Carga el menu -->
	<?php
		require('menu.php');  
	?>
	<!-- Hacemos la conexion de la base de datos -->
	<?php
        // Crea la conexión
        $conn = new mysqli('localhost','id3314307_grupo2', 'grupo2', 'id3314307_blog2dw3');

        // Comprueba la conexion
        // En caso de que de error sale la primera opción del IF
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // Comprobamos si existe el usuario que se quiere registrar en el formulario de REGISTRO
        $sql="select * from `Usuarios` WHERE `NombreUsu`='".$_POST['nombreusuarioregistro']."'";
        $resultado2=$conn->query($sql);
        
        // Como nos devuelve un array, comprobamos si tiene algun registro
        if ($resultado2->num_rows < 1){
        	// Hacemos la insert en la base de datos (ESTA OPCIÓN ES EN CASO DE QUE NO EXISTA)
            $sql2 = "INSERT INTO Usuarios VALUES ('".$_POST['nombreregistro']."','".$_POST['apellidosregistro']."','".$_POST['nombreusuarioregistro']."','".$_POST['passwordregistro']."','".$_POST['emailregistro']."', '0')";
            $resultado3=$conn->query($sql2);
        ?>
        <h2 class="usuariologueadoconexito">USUARIO REGISTRADO CON EXITO WUJUUUU</h2>
        <center><form class="formularioregistro" action='indexlogueado.php' method="POST">
    		<div>
      			<h2>FORMULARIO DE LOGUEO</h2>
    		</div>
    		<div>
      			<!-- Username -->
      			<label for="nombreusuariologin"><b>Nombre de usuario</b></label>
      			<div>
        			<input type="text" id="nombreusuariologin" name="nombreusuariologin" placeholder="Nombre de usuario" required>
      			</div>
    		</div>
 
    		<div>
      			<!-- Password-->
      			<label for="passwordlogin"><b>Contraseña</b></label>
      			<div class="controls">
        			<input type="password" id="passwordlogin" name="passwordlogin" placeholder="Introduce tu contraseña" required />
      			</div>
    		</div>
 			<br>
    		<div>
      			<!-- Button -->
      			<div class="controls">
        			<input type="submit" value="Login" />
      			</div>
    		</div>
		</form></center>
        <?php
        	}
        	else{
        ?>
        <center><form class="formularioregistro" action='registrovalidado.php' method="POST">
    		<div>
      			<h2>FORMULARIO DE REGISTRO</h2>
    		</div>
    		<div>
      			<!-- Username -->
      			<label for="nombreusuarioregistro"><b>Nombre de usuario</b></label>
      			<div>
        			<input type="text" id="nombreusuarioregistro" name="nombreusuarioregistro" placeholder="Nombre de usuario" required>
        			<p><i>El usuario puede contener cualquier tipo de carácteres, siempre y cuando no haya espacios.</i></p>
      			</div>
    		</div>
    
    		<div>
      			<!-- Username -->
      			<label for="nombreregistro"><b>Nombre</b></label>
      			<div>
        			<input type="text" id="nombreregistro" name="nombreregistro" placeholder="Nombre" required>
        			<p class="help-block"><i>Introduzca el nombre que consta en su DNI.</i></p>
      			</div>
    		</div>
    
    		<div>
      			<!-- Username -->
      			<label for="apellidosregistro"><b>Apellidos</b></label>
      			<div class="controls">
        			<input type="text" id="apellidosregistro" name="apellidosregistro" placeholder="Apellidos" required>
        			<p><i>Introduzca los apellidos que constan en su DNI.</i></p>
      			</div>
    		</div>
 
    		<div>
      			<!-- E-mail -->
      			<label for="emailregistro"><b>E-mail</b></label>
      			<div class="controls">
        			<input type="text" id="emailregistro" name="emailregistro" placeholder="E-mail" required>
        			<p><i>Por favor introduce tu e-mail</i></p>
      			</div>
    		</div>
 
    		<div>
      			<!-- Password-->
      			<label for="passwordregistro"><b>Contraseña</b></label>
      			<div class="controls">
       				<input type="password" id="passwordregistro" name="passwordregistro" placeholder="Introduce tu contraseña" required />
      			</div>
    		</div>
 
    		<br>
    		<div>
      			<!-- Button -->
      			<div class="controls">
        			<input type="submit" value="Registrate" />
        			<input type="reset" value="Reiniciar" />
      			</div>
    		</div>
		</form></center>
    <?php
        }
    ?>
	<?php
		require('pie.php');  
	?>
</body>


</html>