<form action="?action=identification" method="POST">
	<p>
		<label for="mail">Email : </label>
		<input type="email" id="mail" name="mail" placeholder="exemple@gfi.fr" onInvalid="setCustomValidity('Utilisez une adresse mail @gfi.fr');" pattern="^[a-zA-Z0-9\.\-_]*@gfi.fr$" class="validate" />
	</p>
	<p class="center">
		<button class="btn waves-effect waves-light" type="submit" name="action">Connexion
			<i class="material-icons right">send</i>
		</button>
	</p>
	
</form>