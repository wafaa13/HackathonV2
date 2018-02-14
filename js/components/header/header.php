<head>
    <title>Hackathon</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://openlayers.org/en/v4.6.4/css/ol.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../style/style.css">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="https://openlayers.org/en/v4.6.4/build/ol.js"></script>
    <script src="https://openlayers.org/en/v4.6.4/examples/resources/mapbox-streets-v6-style.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.4.4/proj4.js"></script>

    <!-- Table -->
	  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/plug-ins/a5734b29083/i18n/French.json"></script> MARCHE PAS... -->
    <script src="http://d3js.org/d3.v3.min.js"></script>
</head>

<div class="container-fluid">

    <!-- Second navbar for profile settings -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Opendata</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-4">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../home/index.php">Accueil</a></li>
            <li><a href="../donnees/donnes.php">Données</a></li>
            <li><a href="../demarche/demarche.php">La démarche</a></li>
            <li><a href="../aide/aide.php">Besoin d'aide ?</a></li>
          </ul>
          <ul class="collapse nav navbar-nav nav-collapse slide-down" role="search" id="nav-collapse4">
            <li><a href="#">Support</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img class="img-circle" src="https://pbs.twimg.com/profile_images/588909533428322304/Gxuyp46N.jpg" alt="maridlcrmn" width="20" /> Maridlcrmn <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
	            <li><a href="../home/index.php">Accueil</a></li>
	            <li><a href="../visualisation/visualisation.php">Visualisation</a></li>
	            <li><a href="../demarche/demarche.php">La démarche</a></li>
	            <li><a href="../aide/aide.php">Besoin d'aide ?</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div><!-- /.container-fluid -->
