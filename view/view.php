<!DOCTYPE html><!-- HTML 5 -->
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>GFI Commercial - <?php echo $pagetitle; ?></title>
	<link rel="stylesheet" type="text/css" href="asset/materialize/css/materialize.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/style.css?v=1" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="asset/materialize/js/materialize.js"></script>
	<script type="text/javascript" src="asset/js/app.js"></script>
</head>
<body>
	<div class="container">
		<h1>GFI Commercial Tools</h1>
		<nav>
			<div class="nav-wrapper">
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="hide-on-med-and-down">
					<?php
						$list_besoins = false;
						$new_besoin = false;
						if (isset($_GET['controller']) && htmlspecialchars($_GET['controller'])=="besoin") {
							$list_besoins = true;
							if (isset($_GET['action']) && htmlspecialchars($_GET['action'])=="add") {
								$list_besoins = false;
								$new_besoin = true;
							}
						}

						if(isset($_SESSION['user'])) {
							$u = unserialize($_SESSION['user']);
					?>
					<li <?php if($list_besoins && !$new_besoin) echo 'class="active"'; ?>><a href="?controller=besoin">Liste des besoins</a></li>
					<li <?php if(!$list_besoins && $new_besoin) echo 'class="active"'; ?>><a href="?controller=besoin&action=add">Nouveau besoin</a></li>
					<?php
						}
					?>
				</ul>

				<ul class="right hide-on-med-and-down">
					<?php
						if(isset($_SESSION['user'])) {
							$u = unserialize($_SESSION['user']);
					?>
					<li>Connecté en tant que : <?php echo $u->getMail(); ?></li>
					<li><a href="?action=deconnection"><i class="material-icons left">exit_to_app</i> Déconnexion</a></li>
					<?php
						}
					?>
				</ul>

                <ul class="side-nav" id="mobile-demo">
                    <?php
                    	if(isset($_SESSION['user'])) {
                       		$u = unserialize($_SESSION['user']);
                    ?>
                    <li class="tatata">Connecté en tant que : </li>
                    <li class="tatata"><?php echo $u->getMail(); ?></li>
                    <li><a href="?controller=besoin">Liste des besoins</a></li>
                    <li><a href="?controller=besoin&action=add">Nouveau besoin</a></li>					
					<li><a href="?action=deconnection"><i class="material-icons left">exit_to_app</i> Déconnexion</a></li>                     
                    <?php
                    	}	
                    ?>
                </ul>
			</div>
		</nav>
		<h4><?php if(isset($title)) echo ucfirst($title); else echo "Unknown title"; ?></h4>
		<ul><li class="divider"></li></ul>
		<div>
			<?php
				$filepath = File::build_path(array("view", "$view.php"));
				require $filepath;
			?>
		</div>
	</div>
</body>
</html>