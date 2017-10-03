<!DOCTYPE html><!-- HTML 5 -->
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>GFI Commercial - <?php echo $pagetitle; ?></title>
	<link rel="stylesheet" type="text/css" href="asset/materialize/css/materialize.css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="asset/materialize/js/materialize.js"></script>
</head>
<body>
	<div class="container">
		<h1>GFI Commercial Tools</h1>
		<nav>
			<ul>
				<li><a href="?controller=besoin">Liste des besoins</a></li>
				<li><a href="?controller=besoin&action=add">Nouveau besoin</a></li>
				<?php
					if(isset($_SESSION['user'])) {
				?>
				<li><a href="?action=deconnection">Déconnexion</a></li>
				<?php
					}
				?>
			</ul>
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