<?php 

session_start();
include('conexion.php');

function verificar_login($user,$contrasena,&$result) {
    $sql = 
    "SELECT * FROM usuarios WHERE Usuario = '".$user."' and Password = password('".$contrasena."')";
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
    echo "existe id";
    if(isset($_POST['user'])) 
    { 
    echo "existe user";
    $valor = verificar_login($_POST['user'],$_POST['contrasena'],$conexion);
    echo $valor;
        if($valor == 1) 
        {
            header("location:index.php?va=sig"); 
        }
        else
        {
            //Mensaje de error.
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

