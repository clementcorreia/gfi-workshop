<!-- Page de la "Liste des besoins" -->
<?php
	if($tab_besoins && count($tab_besoins)>0) {
?>
<ul class="collection">
	<?php
		foreach ($tab_besoins as $besoin) {
			$id = $besoin->getId();
			$titre = $besoin->getTitre();
			$client = $besoin->getClient();
			$statut = $besoin->getStatut();
	?>
	<li class="collection-item avatar dismissable" data-id="<?php echo $id; ?>">
		<i class="material-icons circle">folder</i>
		<div>
			<span class="title"><?php echo '['.$client.'] '.$titre; ?></span>
			<p class="<?php if($statut == 'Open') { echo 'orange-text'; } else if($statut == 'Win') { echo 'green-text'; } else if($statut == 'Lost') { echo 'red-text'; }?>">
				<?php echo $statut; ?>
			</p>
		</div>
		<a href="#" class="secondary-content" onclick="callback_dismissable($(this)); return false;" data-id="<?php echo $id; ?>"><i class="material-icons">delete</i></a>
	</li>
	<?php
		}
	?>
</ul>
<?php
	}
	else {
?>
<p>
	<i>Aucun besoin enregistré...</i>
</p>
<?php
	}
?>