<!-- Page de la "Liste des besoins" -->
<?php
	if($tab_besoins && count($tab_besoins)>0) {
?>
<div class="row">
	<form class="col s12 m4">
		<div class="input-field">
			<label class="label-icon" for="search" style="width: 40px;"><i class="material-icons">search</i></label>
			<input id="search" type="search" style="margin-left: 40px;" required />
			<i class="material-icons" style="margin-right: -80px;">close</i>
		</div>
	</form>
	<div class="col s12 m7 offset-m1">
		<div class="col m6 s12">
			<p>
				Statut
				<a href="?controller=besoin&tri=statut&order=desc"><i class="material-icons small">arrow_drop_down</i></a>
				<a href="?controller=besoin&tri=statut&order=asc"><i class="material-icons small">arrow_drop_up</i></a>
			</p>
			<p>
				Titre
				<a href="?controller=besoin&tri=titre&order=desc"><i class="material-icons small">arrow_drop_down</i></a>
				<a href="?controller=besoin&tri=titre&order=asc"><i class="material-icons small">arrow_drop_up</i></a>
			</p>
		</div>
		<div class="col m6 s12">
			<p>
				Date
				<a href="?controller=besoin&tri=date_debut&order=desc"><i class="material-icons small">arrow_drop_down</i></a>
				<a href="?controller=besoin&tri=date_debut&order=asc"><i class="material-icons small">arrow_drop_up</i></a>
			</p>
			<p>
				Client
				<a href="?controller=besoin&tri=rs_client&order=desc"><i class="material-icons small">arrow_drop_down</i></a>
				<a href="?controller=besoin&tri=rs_client&order=asc"><i class="material-icons small">arrow_drop_up</i></a>
			</p>
		</div>
	</div>
</div>
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