<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Formulario Validacion</title>
	<meta charset="UTF-8"></meta> 
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/slate/bootstrap.min.css">
	<style type="text/css">
		/* Estilos de CSS */

	</style>
	<script type="text/javascript">

	</script>
</head>
<body class="col-md-6">
	<!-- Sentencias de Control -->
	<form class="form-horizontal" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
	  <fieldset>
	    <legend>Formulario de Prueba de envío de mensaje: </legend>
	    <div class="form-group">
	      <label for="inputName" class="col-lg-2 control-label">Nombre</label>
	      <div class="col-lg-10">
	        <input class="form-control" id="inputName" name="inputName" placeholder="Nombre" type="text">
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
	      <div class="col-lg-10">
	        <input class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" type="text">
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="inputAsunto" class="col-lg-2 control-label">Asunto</label>
	      <div class="col-lg-10">
	        <input class="form-control" id="inputAsunto" name="inputAsunto" placeholder="Asunto" type="text">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
	      <div class="col-lg-10">
	        <textarea class="form-control" rows="3" id="textArea" name="textArea"></textarea>
	        <span class="help-block">Escribe los comentarios que consideres oportunos. En breve nos pondremos en contacto a través del mail asociado.</span>
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button class="btn btn-default">Cancel</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	      </div>
	    </div>
	  </fieldset>
	</form>
	
	<?php
		if (isset($_POST["inputName"]) && isset($_POST["inputEmail"]) && isset($_POST["inputAsunto"]) && isset($_POST["textArea"])){
			$nombre = $_POST["inputName"];
			$mail = $_POST["inputEmail"];
			$asunto = $_POST["inputAsunto"];
			$textArea = $_POST["textArea"];
			//$para="veronicamarugal@gmail.com";
			$para="jmddesarrollo@gmail.com";
			$contenido="Nombre: $nombre Mail: $mail Contenido: $textArea";
    
			mail($para, $asunto, $contenido);
		}
	?>
</body>
</html>
