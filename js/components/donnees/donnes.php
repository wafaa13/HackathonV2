<!DOCTYPE html>
<html>

	<?php include '../header/header.php'; ?>
	<link rel="stylesheet" type="text/css" href="../../../style/donnees.css">

	<body>
		<!-- The side menu-->
		<div class="container">
			<div class="col-sm-2">
				<nav class="nav-sidebar">
					<h4><a href="#allcat" class="accordion-toggle" data-toggle="tab">Catégories</a></h4>
					<ul class="nav tabs">
						<!-- <li class="active"> -->
						<li id="tab-nav-1" class=""><a href="#tab1" class="accordion-toggle" data-toggle="tab">Citoyenneté</a></li>
						<li id="tab-nav-2" class=""><a href="#tab2" class="accordion-toggle" data-toggle="tab">Déplacement</a></li>
						<li id="tab-nav-3" class=""><a href="#tab4" class="accordion-toggle" data-toggle="tab">Finance</a></li>
					</ul>
				</nav>
			</div>

		<!-- tab content -->
		<div class="tab-content" id="allTables">
			<!-- All data -->
			<div class="tab-pane text-style active" id="allcat">
				<p> Toutes les données ...</p>
				<div class="container" id="moreData">
					<div class="row" id="block0">
						<div class="col-sm-4">
							<div class="card">
								<div class="card-block">
									<a href="../visualisation/visualisation.php?type=table&amp;data=budget_2018"><div class="panel-body form-group panelBody" id="budget_2018"></div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Citoyenneté -->
			<div class="tab-pane text-style" id="tab1">
				<h2>Citoyenneté</h2>
				<p>Cette catégorie contient deux type de données: les données INSEE et les données Archive.</p>
				<hr>
				<div class="row" id="block1">
					<div class="col-sm-4" id="block11">
						<div class="card">
							<div class="card-block">
								<h3 class="card-title">INSEE</h3>
								<a href="../visualisation/visualisation.php?type=table&amp;data=population_2008"><div class="panel-body form-group panelBody" id="population_2008"></div></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4" id="block12">
						<div class="card">
							<div class="card-block">
								<h3 class="card-title">Archives</h3>
								<a href="../visualisation/visualisation.php?type=table&amp;data=archive_fiche"><div class="panel-body form-group panelBody" id="archive_fiche"></div></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Déplacement -->
			<div class="tab-pane text-style" id="tab2">
				<h2>Déplacement</h2>
				<p>Les données concernant le déplacement à la ville de La Rochelle.</p>
				<hr>
				<div class="row" id="block2">
					<div class="col-sm-4" id="block21">
						<div class="card">
							<div class="card-block">
								<h3 class="card-title">Parkings</h3>
								<a href="../visualisation/visualisation.php?type=table&amp;data=disponibilite_parking"><div class="panel-body form-group panelBody" id="disponibilite_parking"></div></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Finance -->
			<div class="tab-pane text-style" id="tab4">
				<h2>Finance</h2>
				<hr>
				<div class="row">
					<div class="col-sm-4" id="block31">
						<div class="card">
							<div class="card-block">
								<h3 class="card-title">Budget 2017 - Fonction</h3>
								<a href="../visualisation/visualisation.php?type=table&amp;data=bp_2017_fonction"><div class="panel-body form-group panelBody" id="bp_2017_fonction"></div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

	<?php include '../footer/footer.php'; ?>
	<script type="text/javascript" src="../visualisation/map/popup.js"></script>
	<script type="text/javascript" src="../visualisation/map/bus.js"></script>
	<script type="text/javascript" src="../visualisation/map/poste.js"></script>
	<script type="text/javascript" src="../visualisation/map/geoloc.js"></script>
	<script type="text/javascript" src="../visualisation/map/map.js"></script>
	<script type="text/javascript" src="../visualisation/chart/chart.js"></script>
	<script type="text/javascript" src="../controller.js"></script>
	<script type="text/javascript" src="../util.js"></script>
	<script type="text/javascript" src="donnees.js"></script>

</html>
