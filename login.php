<?php 

session_start();
include('conexion.php');

function verificar_login($user,$contrasena,&$result) {
    $sql = 
    "SELECT * FROM usuarios WHERE Usuario like binary '".$user."' and Password = password('".$contrasena."')";
    $rec = $result->query($sql);
    $count = 0;
     
    while($row = $rec->fetch_array()) 
    { 

        $count++; 
        $_SESSION['userid'] = $row['idUsuarios'];
        $_SESSION['nombre'] = $row['Nombre'];
        $_SESSION['tipoUsuario'] = $row['TipoUsuario_idTipoUsuario'];
        if($count == 1) 
        { 
            return 1; 
        } 
      
        else 
        {
         return 0;
        }


    }
    }

try{

if(!isset($_SESSION['userid'])) 
{ 
    if(isset($_POST['user'])) 
    { 
    $valor = verificar_login($_POST['user'],$_POST['contrasena'],$conexion);
        if($valor == 1) 
        {
            header("location:index.php?va=sig"); 
        }
        else
        {
            ?>
            <!DOCTYPE html>
<html>
<head>
    <title></title>
    <script type="text/javascript" src="vendors/sweetalert2/js/sweetalert.min.js"></script>

</head>
<body>
    <script type="text/javascript">
        swal({
  title: "Datos incorrectos!",
  text: "Por favor, verifique su usuario y contraseña",
  icon: "error",
})
.then((value) => {
   location.href="logearse.php";
});
    </script>

</body>
</html>
            <?php
        }
    
    }

} else {
    echo "Su usuario ingreso correctamente."; 
//    header("location:siguiente.php");
    }


}catch(Exception $e){
    echo "Error en la conexion.. " . $e-> getMessage();
}
?>

