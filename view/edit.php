<!-- Page du formulaire "Nouveau besoin" -->
<?php echo date("j M y"); ?>
<form method="post" action="?controller=besoin&action=added">
	<div class="input-field">
		<input type="text" name="rs_client" id="rs_client" class="validate" />
		<label for="rs_client">Client</label>
	</div>
	<div class="input-field">
		<input type="text" name="contact" id="contact" />
		<label for="contact">Contact name</label>
	</div>
	<div class="input-field">
		<input type="text" name="titre" id="titre" />
		<label for="titre">Title</label>
	</div>
	<div class="input-field">
		<input type="text" name="description" id="description" />
		<label for="description">Full description</label>
	</div>
	<p>3 main key success factors</p>
	<div class="input-field">
		<input type="text" class="col s4" name="s_factor1" id="s_factor1" placeholder="#1" />
		<input type="text" class="col s4" name="s_factor2" id="s_factor2" placeholder="#2" />
		<input type="text" class="col s4" name="s_factor3" id="s_factor3" placeholder="#3" />
	</div>
	<div class="input-field">
		<input type="text" name="duree" id="duree" />
		<label for="duree">Duration (months)</label>
	</div>
	<div class="input-field">
		<input type="text" name="frequence" id="frequence" />
		<label for="frequence">Frequency (days/week)</label>
	</div>
	<div class="input-field">
		<input type="text" name="date_debut" id="date_debut" class="datepicker" />
		<label for="date_debut">Start at the latest</label>
	</div>
	<div class="input-field">
		<input type="text" name="lieu" id="lieu" />
		<label for="lieu">Location</label>
	</div>
	<div class="input-field">
		<input type="text" name="prix" id="prix" />
		<label for="prix">Rate</label>
	</div>
	<div class="file-field input-field">
		<div class="btn require">
			<span>Télécharger</span>
			<input type="file" name="description_file" multiple />
		</div>
		<div class="file-path-wrapper">
			<input class="file-path validate" type="text" placeholder="Description file" />
		</div>
	</div>
	<div class="input-field">
		<input type="text" name="consultant1" id="consultant1" />
		<label for="consultant1">Consultant</label>
	</div>
	<div class="input-field">
		<input type="text" name="consultant2" id="consultant2" />
		<label for="consultant2">Consultant</label>
	</div>
	<div class="input-field">
		<input type="text" name="consultant3" id="consultant3" />
		<label for="consultant3">Consultant</label>
	</div>
	<div class="input-field">
		<input type="text" name="consultant4" id="consultant4" />
		<label for="consultant4">Consultant</label>
	</div>
	<div class="input-field">
		<input type="text" name="consultant5" id="consultant5" />
		<label for="consultant5">Consultant</label>
	</div>
	<select name="statut" size="1">
		<option>Open</option>
		<option>Win</option>
		<option>Lost</option>
	</select>
	<p class="center">
		<button class="btn waves-effect waves-light" type="submit">Save & Share
			<i class="material-icons right">send</i>
		</button>
	</p>
</form>
<div>&nbsp;</div>