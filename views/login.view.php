<?php require 'header.php'; ?>

<div class="container">
	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo">Iniciar sesión</h2>
				<form class="formulario" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<input type="text" name="usuario" placeholder="Usuario">
					<input type="password" name="password" placeholder="Contraseña">
					<input type="submit" value="Iniciar sesión">
				</form>
			</article>
		</div>
	</div>
</div>

<?php require 'footer.php'; ?>
