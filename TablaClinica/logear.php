<?php
	final class Login extends Conexion{
		/*function logear($usuario,$contra){
			$sql = "SELECT * FROM login WHERE usuario = ? AND contra = md5(?)";
			$sentencia_select = $this->obj_con->prepare($sql);
			$sentencia_select->bindParam(1,$usuario);
			$sentencia_select->bindParam(2,$contra);
			$sentencia_select->execute();
			$conteo = $sentencia_select->rowCount();
			if($conteo > 0){
				return true;
			}
			else{
				return false;
			}
		}*/

		function mostrar(){
			$sql = "SHOW COLUMNS FROM paciente";
			$sentencia_select = $this->obj_con->prepare($sql);
			$sentencia_select->execute();
			$conteo = $sentencia_select->rowCount();
			$regresar = "<table class='table'><thead>";
			if($conteo > 0){
				foreach ($sentencia_select as $filas) {
					$regresar .= "<th>".$filas["Field"]."</th>";
				}
				$regresar .= "</thead><tbody style='cursor:pointer'>";
				$regresar .= $this->datos();
				$regresar .= "</tbody></table>";
			}
			else{
				
			}
			return $regresar;
		}

		function datos(){
			$regresar = "";
			$sql2 = "SELECT * FROM paciente;";
			$sentencia_select2 = $this->obj_con->prepare($sql2);
			$sentencia_select2->execute();
			$conteo2 = $sentencia_select2->rowCount();
			if($conteo2 > 0){
				foreach ($sentencia_select2 as $filas2) {
					$idPaciente = $filas2["idPaciente"];
					$Nombre = $filas2["Nombre"];
					$Apellido = $filas2["Apellido"];
					$Sexo = $filas2["Sexo"];
					$Direccion = $filas2["Direccion"];
					$EstadoCivil = $filas2["EstadoCivil"];
					$Religion = $filas2["Religion"];
					$Telefono = $filas2["Telefono"];
					$Originario = $filas2["Originario"];
					$Residente = $filas2["Residente"];
					$nacimiento = $filas2["nacimiento"];
					$script = "onclick='seleccionar(this,$idPaciente)'";
					$regresar .= "<tr $script>";
					$regresar .= "<td style='display:none'><input type='checkbox' name='check[]' id='chk$idPaciente' value='$idPaciente'></td>";
					$regresar .= "<td>$idPaciente</td>";
					$regresar .= "<td>$Nombre</td>";
					$regresar .= "<td>$Apellido</td>";
					$regresar .= "<td>$Sexo</td>";
					$regresar .= "<td>$Direccion</td>";
					$regresar .= "<td>$EstadoCivil</td>";
					$regresar .= "<td>$Religion</td>";
					$regresar .= "<td>$Telefono</td>";
					$regresar .= "<td>$Originario</td>";
					$regresar .= "<td>$Residente</td>";
					$regresar .= "<td>$nacimiento</td>";
				}
			}
			return $regresar;	
		}
	}
?>