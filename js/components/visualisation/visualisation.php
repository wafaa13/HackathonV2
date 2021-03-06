<!DOCTYPE html>
<html>

	<?php include '../header/header.php'; ?>

    <link rel="stylesheet" type="text/css" href="../../../style/style-visualisation.css">
    <script type="text/javascript" src="../util.js"></script>

	<body>
		<div id="content-page">

			<h1 id="title-page"></h1>
			<div class="panel panel-default box">
                <div class="panel-heading">
                    <p class="panel-title pull-left">Visualisation</p>

					<!-- Bouton "un probleme?" -->

                    <a href="mailto:claire.lozano@live.fr?subject=Problème sur la plateforme&body=Les données vous semble incorrectes ? La visualisationne vous convient pas ? Aidez-nous à améliorer la plateforme !"> 
                    	<button class="btn btn-default label label-warning pull-right"> Un problème ?</button>
                    </a>
                    
                    <!-- <button class="btn btn-default label label-warning pull-right" data-toggle="modal" data-target="#example">Un problème ?</button>

                    <div class="modal fade" tabindex="-1" role="dialog" id="example">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">?</span></button>
                                    <h4 class="modal-title">Un problème ?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="checkbox">
                                        <label class="labelModal"> <input class="check_list" name="check_list[]" type="checkbox">Les données vous semble incorrecte ...</label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="labelModal"> <input class="check_list" name="check_list[]" type="checkbox">La visualisation ne vous convient pas ...</label>
                                    </div>
                                    <textarea class="form-control" style="min-width: 100%"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-default" data-dismiss="modal">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="clearfix"></div>
                </div>


                <div class="panel-content-visualisation">

					<!-- PANEL -->

					<div class="container">
						<ul class="nav nav-tabs nav-visualisation">
							<li id="tab-nav-1" class="tab-nav"><a href="#tab-pane-1" data-toggle="tab"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Tableau</a></li>
							<li id="tab-nav-2" class="tab-nav"><a href="#tab-pane-2" data-toggle="tab"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Graphe</a></li>
							<li id="tab-nav-3" class="tab-nav"><a href="#tab-pane-3" data-toggle="tab"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Carte</a></li>
							<li id="tab-nav-4" class="tab-nav"><a href="#tab-pane-4" data-toggle="tab"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Infos</a></li>
							<li id="tab-nav-5" class="tab-nav"><a href="#tab-pane-5" data-toggle="tab"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Télécharger</a></li>
						</ul>
						<div class="tab-content">
							<p id="description-page"></p>	
							<div class="tab-pane" id="tab-pane-1">
								<div class="option-panel">
									<div class="select-list-date"></div>
									<div class="select-list-date-compare"></div>
								</div>
								<div class="box-wrapper-inner">
									<div id='box1' class="box-visu"> <!-- TABLEAU --></div>
								</div>
							</div>
							<div class="tab-pane" id="tab-pane-2">
								<div class="option-panel">
									<div class="select-list-date"></div>
									<div class="select-list-date-compare"></div>		
								</div>
								<div class="box-wrapper-inner">
									<div id='box2' class="box-visu"> <!-- GRAPH --></div>
								</div>
							</div>
							<div class="tab-pane" id="tab-pane-3">
								<div id='box3' class="box-visu">
									<!-- MAP -->
									<div id="popup"></div>
                                   <!--  <?php #include 'map/map.php'; ?> -->
								</div>
								<input id="button-icone-bus" class="button-icone" value="false" type="image" src="../../../images/icone_bus.svg"/>
								<input id="button-icone-poste" class="button-icone" value="false" type="image" src="../../../images/icone_poste.png"/>
							</div>
							<div class="tab-pane" id="tab-pane-4">
								<div id='box4' class="box-visu"> <!-- INFO --></div>
							</div>
							<div class="tab-pane" id="tab-pane-5">
								<div id='box5' class="box-visu"> <!-- TELECHARGEMENT --></div>
							</div>
						</div>
					</div>



					<!-- PARTAGER -->

					<h2>Partager </h2>
					<p>Vous pouvez partager cette page sur facebook ainsi que twitter : </p>
			        <div id="rs">

			            <!-- FACEBOOK -->
			            <div id="fb-root" class="rs"></div>
			            <script>(
			                function(d, s, id) {
			                    var js, fjs = d.getElementsByTagName(s)[0];
			                    if (d.getElementById(id)) return;
			                    js = d.createElement(s); js.id = id;
			                    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9&appId=778292025574313";
			                    fjs.parentNode.insertBefore(js, fjs);
			                }(document, 'script', 'facebook-jssdk'));
			            </script>

			            <!-- TWITTER -->
			            <div class="rs">
			                <a href="https://twitter.com/share" class="twitter-share-button" data-size="large">Tweet</a>
			                <script>
			                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
			                </script>
			            </div>

			              <!-- Your share button code -->
			              <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Partager</a></div>
			        </div>



					<!-- COMMENTAIRES -->

					<h2>Commentaires </h2>
					<div class="post-footer">
						<ul class="comments-list">
							<li class="comment">
								<div class="comment-body">
									<div class="comment-heading">
										<h4 class="user">Annonyme</h4>
										<h5 class="time">Il y a 8 minutes</h5>
									</div>
									<p>Commentaire numéro 1</p>
								</div>
							</li>
							<li class="comment">
								<div class="comment-body">
									<div class="comment-heading">
										<h4 class="user">Open Data La Rochelle</h4>
										<h5 class="time">Il y a 3 minutes</h5>
									</div>
									<p>Commentaire numéro 2</p>
								</div>
							</li>
							<li class="comment">
								<div class="comment-body">
									<div class="comment-heading">
										<h4 class="user">Annonyme</h4>
										<h5 class="time">Il y a 2 minutes</h5>
									</div>
									<p>Commentaire numéro 3</p>
								</div>
							</li>
						</ul>
						<div class="input-group">
							<input class="form-control" placeholder="Add a comment" type="text">
							<span class="input-group-addon">
								<a href="#"><i class="glyphicon glyphicon-pencil"></i></a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- END CONTENT PAGE -->

		<script type="text/javascript" src="map/bus.js"></script>
		<script type="text/javascript" src="map/poste.js"></script>
		<script type="text/javascript" src="map/popup.js"></script>
		<script type="text/javascript" src="map/geoloc.js"></script>
		<script type="text/javascript" src="map/map.js"></script>

		<script type="text/javascript" src="chart/bar.js"></script>
		<script type="text/javascript" src="chart/horizontalBar.js"></script>
		<script type="text/javascript" src="chart/pie.js"></script>
		<script type="text/javascript" src="chart/doughnut.js"></script>
        <script type="text/javascript" src="chart/chart.js"></script>
    	<script type="text/javascript" src="table/table.js"></script>

        <script type="text/javascript" src="../controller.js"></script>
        <script type="text/javascript" src="visualisation.js"></script>
	</body>

	<?php include '../footer/footer.php'; ?>



</html>
