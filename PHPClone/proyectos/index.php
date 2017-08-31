<!DOCTYPE html>
<html>
    <head>
        <title>Proyectos</title>
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
									<h2 class="mdl-card__title-text">Proyectos</h2>
								</div>
								<div class="mdl-card__supporting-text">
									Administre los proyectos vigentes.
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a class="mdl-button mdl-button--accent mdl-button--raised mdl-js-button mdl-js-ripple-effect" href="enviarCotizacion.html">Administrar proyectos</a>
								</div>
							</div>
						</div>
						<div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--12-col-phone">
							<div class="menu-card mdl-card mdl-shadow--2dp">
								<div class="mdl-card__title mdl-card--expand">
									<h2 class="mdl-card__title-text">Solicitudes</h2>
								</div>
								<div class="mdl-card__supporting-text">
									Administre las solicitudes de los proyectos.
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a class="mdl-button mdl-button--accent mdl-button--raised mdl-js-button mdl-js-ripple-effect" href="enviarCotizacion.html">Administrar solicitudes</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
    </body>
</html>
