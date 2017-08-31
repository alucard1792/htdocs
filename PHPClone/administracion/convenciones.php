<!DOCTYPE html>
<html>
    <head>
        <title>Convenciones</title>
		<?php include('../templates/resources.php'); ?>
    </head>
    <body>
		<div class="mdl-layout mdl-js-layout">
			<?php include('../templates/header.php'); ?>
			<?php include('../templates/menu.php'); ?>
			<main class="mdl-layout__content">
				<div class="page-content">
					<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
						<div class="mdl-tabs__tab-bar">
							<a href="#categorias-panel" class="mdl-tabs__tab is-active">Categorías</a>
							<a href="#proveedores-panel" class="mdl-tabs__tab">Proveedores</a>
							<a href="#materiales-panel" class="mdl-tabs__tab">Materiales</a>
						</div>
						<div class="mdl-tabs__panel is-active" id="categorias-panel">
							<div class="mdl-grid">
								<table class="mdl-cell mdl-cell--12-col mdl-data-table mdl-js-data-table mdl-shadow--2dp">
									<thead>
										<tr>
											<th class="mdl-data-table__cell--non-numeric">Descripción</th>
											<th class="mdl-data-table__cell--non-numeric">Acciones</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
											<td class="mdl-data-table__cell--non-numeric">
												<i class="material-icons">mode_edit</i>
												<i class="material-icons">delete_sweep</i>
											</td>
										</tr>
										<tr>
											<td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
											<td class="mdl-data-table__cell--non-numeric">
												<i class="material-icons">mode_edit</i>
												<i class="material-icons">delete_sweep</i>
											</td>
										</tr>
										<tr>
											<td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
											<td class="mdl-data-table__cell--non-numeric">
												<i class="material-icons">mode_edit</i>
												<i class="material-icons">delete_sweep</i>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="mdl-tabs__panel" id="proveedores-panel">
							<div class="mdl-grid">
								<table class="mdl-cell mdl-cell--12-col mdl-data-table mdl-js-data-table mdl-shadow--2dp">
									<thead>
										<tr>
											<th class="mdl-data-table__cell--non-numeric">Proveedor</th>
											<th class="mdl-data-table__cell--non-numeric">Acciones</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
											<td class="mdl-data-table__cell--non-numeric">
												<i class="material-icons">mode_edit</i>
												<i class="material-icons">delete_sweep</i>
											</td>
										</tr>
										<tr>
											<td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
											<td class="mdl-data-table__cell--non-numeric">
												<i class="material-icons">mode_edit</i>
												<i class="material-icons">delete_sweep</i>
											</td>
										</tr>
										<tr>
											<td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
											<td class="mdl-data-table__cell--non-numeric">
												<i class="material-icons">mode_edit</i>
												<i class="material-icons">delete_sweep</i>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="mdl-tabs__panel" id="materiales-panel">
							<div class="mdl-grid">
								<table class="mdl-cell mdl-cell--12-col mdl-data-table mdl-js-data-table mdl-shadow--2dp">
									<thead>
										<tr>
											<th class="mdl-data-table__cell--non-numeric">Referencia</th>
											<th class="mdl-data-table__cell--non-numeric">Descripción</th>
											<th class="mdl-data-table__cell--non-numeric">Categoría</th>
											<th class="mdl-data-table__cell--non-numeric">Proveedor</th>
											<th class="mdl-data-table__cell--non-numeric">Acciones</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
											<td class="mdl-data-table__cell--non-numeric">25</td>
											<td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
											<td class="mdl-data-table__cell--non-numeric">50</td>
											<td class="mdl-data-table__cell--non-numeric">
												<i class="material-icons">mode_edit</i>
												<i class="material-icons">delete_sweep</i>
											</td>
										</tr>
										<tr>
											<td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
											<td class="mdl-data-table__cell--non-numeric">50</td>
											<td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
											<td class="mdl-data-table__cell--non-numeric">10</td>
											<td class="mdl-data-table__cell--non-numeric">
												<i class="material-icons">mode_edit</i>
												<i class="material-icons">delete_sweep</i>
											</td>
										</tr>
										<tr>
											<td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
											<td class="mdl-data-table__cell--non-numeric">10</td>
											<td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
											<td class="mdl-data-table__cell--non-numeric">25</td>
											<td class="mdl-data-table__cell--non-numeric">
												<i class="material-icons">mode_edit</i>
												<i class="material-icons">delete_sweep</i>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
    </body>
</html>
