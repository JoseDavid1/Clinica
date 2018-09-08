<?php
	require("./conexion.php");
	require("./logear.php");
	$obj = new Login();
	if($obj->conectar()){				
				
	}else{
		echo "Error de Conexión";
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Seleccion en Tabla</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body style="background-color:grey">
	<div class="container">		
		<section>
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<form class="form-horizontal" method="POST">
							<div class="form-group row">
								<div class="table-responsive">
									<?=$obj->mostrar()?>
								</div>
							</div>							
							<div class="form-group">								
								<div class="col-md-6 offset-md-3">
									<button class="btn btn-info col-md-12" type="submit" name="guardar">Guardar</button>
								</div>
							</div>								
						</form>
					</div>					
				</div>
			</div>
		</section>
	</div>
	
	<script>
		function seleccionar(tr,value){
			$(function(){
				if($("#chk"+value).attr("checked") == "checked"){
					$("#chk"+value).removeAttr("checked");
					$(tr).css("background-color", "#FFFFFF");
				}else{
					$("#chk"+value).attr("checked","true");
					$("#chk"+value).prop("checked","true");
					$(tr).css("background-color", "#BEDAE8");
				}
			})
		}
	</script>

	<?php
		if(isset($_REQUEST["guardar"])){
			$checkes = $_REQUEST["check"];	
			for($x = 0; $x < count($checkes); $x++){
				echo $checkes[$x]."<br>";
			}
		}
	?>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>