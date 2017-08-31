<?php
/*
 * The MIT License
 *
 * Copyright 2017 APRENDIZ.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Autenticación | HELIREP</title>
		<?php include('../templates/resources.php'); ?>
	</head>
	<body>
		<main id="login">
			<form action="/helirep/controllers/UsuarioController.php" method="post">
				<div class="mdl-dialog">
					<h3 class="mdl-dialog__title">Iniciar sesión</h3>
					<div class="mdl-dialog__content">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="usuario" name="usuario" required />
							<label class="mdl-textfield__label" for="usuario">Nombre de usuario</label>
						</div><br />
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="password" id="contrasena" name="contrasena" required />
							<label class="mdl-textfield__label" for="contrasena">Contraseña</label>
						</div>
					</div>
					<div class="mdl-dialog__actions">
						<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="iniciarSesion" value="Iniciar sesión" />
					</div>
				</div>
			</form>
		</main>
		<?php include('../templates/dialogs.php'); ?>
	</body>
</html>