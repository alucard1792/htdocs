<!DOCTYPE html>
<html>
    <head>
        <title>Administración</title>
		<?php include('../templates/resources.php'); ?>
    </head>
    <body>
		<div class="mdl-layout mdl-js-layout">
			<?php include('../templates/header.php'); ?>
			<?php include('../templates/menu.php'); ?>
			<main class="mdl-layout__content">
				<div class="page-content">
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--12-col-phone">
							<div class="menu-card mdl-card mdl-shadow--2dp">
								<div class="mdl-card__title mdl-card--expand">
									<h2 class="mdl-card__title-text">Usuarios</h2>
								</div>
								<div class="mdl-card__supporting-text">
									Administre los usuarios del sistema.
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a class="mdl-button mdl-button--accent mdl-button--raised mdl-js-button mdl-js-ripple-effect" href="enviarCotizacion.html">Administrar usuarios</a>
								</div>
							</div>
						</div>
						<div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--12-col-phone">
							<div class="menu-card mdl-card mdl-shadow--2dp">
								<div class="mdl-card__title mdl-card--expand">
									<h2 class="mdl-card__title-text">Roles</h2>
								</div>
								<div class="mdl-card__supporting-text">
									Administre los roles del sistema.
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a class="mdl-button mdl-button--accent mdl-button--raised mdl-js-button mdl-js-ripple-effect" href="enviarCotizacion.html">Administrar roles</a>
								</div>
							</div>
						</div>
						<div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--12-col-phone">
							<div class="menu-card mdl-card mdl-shadow--2dp">
								<div class="mdl-card__title mdl-card--expand">
									<h2 class="mdl-card__title-text">Bodegas</h2>
								</div>
								<div class="mdl-card__supporting-text">
									Administre las bodegas de almacenamiento de los materiales.
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a class="mdl-button mdl-button--accent mdl-button--raised mdl-js-button mdl-js-ripple-effect" href="enviarCotizacion.html">Administrar bodegas</a>
								</div>
							</div>
						</div>
						<!-- Materiales, convenciones y categorías -->
						<div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--12-col-phone">
							<div class="menu-card mdl-card mdl-shadow--2dp">
								<div class="mdl-card__title mdl-card--expand">
									<h2 class="mdl-card__title-text">Convenciones</h2>
								</div>
								<div class="mdl-card__supporting-text">
									Administre los materiales, proveedores y las categorías disponibles.
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a class="mdl-button mdl-button--accent mdl-button--raised mdl-js-button mdl-js-ripple-effect" href="./convenciones.php">Administrar convenciones</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
    </body>
</html>
