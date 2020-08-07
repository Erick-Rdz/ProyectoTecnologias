

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Donation Center</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/estilos.css">
	

</head>  
<body>
    <form class="formulario" method="POST" action="validar_sesion.php">
    
    <h1>Iniciar Sesion</h1>
     <div class="contenedor">
                   
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input name="correo" type="text" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input name="constraseña" type="password" placeholder="Contraseña">
         
         </div>        


         <input type="submit" value="Accesar" class="button">
         <p></p>
         <p>¿No tienes una cuenta? <a class="link" href="registrarvista.html">Registrate </a></p>
     </div>
    </form>
</body>
</html>