<?php 

/* Traemos datos ingresados en formulario */
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

/* Iniciamos sesión tras el POST con datos traídos desde el form */
session_start();
$_SESSION['usuario'] = $usuario;

/* Nos conectamos a la db */
$conexion = mysqli_connect("localhost", "root", "", "login");

/* Realizamos consulta en db con datos ingresados (¿coinciden?) */
$consulta = "SELECT * FROM login.login WHERE usuario='$usuario' AND contrasena='$contrasena'";

/* Las coincidencias las asignamos a resultado */
$resultado = mysqli_query($conexion, $consulta);

/* Vemos si el número de filas es 1 (datos ingresados correctamente), o es 0 (el usuario no existe) */
$filas = mysqli_num_rows($resultado);

/* Si existe coincidencia, entonces solo habrá 1 fila (1 = True), del contrario habrán 0 filas (0 = False) */
if($filas){
    /* Si los datos ingresados son correctos, vamos al home */
    header("location:home.php");
} else {
    /* Sino, arrojamos error */
    include("login.php");
    echo '<p style="color:red;">Usuario o contraseña inválida.</p>';
}

/* Liberamos memoria y la conexión */
mysqli_free_result($resultado);
mysqli_close($conexion);

?>