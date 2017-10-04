$(document).ready(function() {
	$('select').material_select();
	$('.datepicker').pickadate({
		selectMonths: true, // Creates a dropdown to control month
		selectYears: 5, // Creates a dropdown of 15 years to control year,
		today: 'Today',
		clear: 'Clear',
		close: 'Ok',
		format: 'dd/mm/yyyy',
		firstDay: 1,
		monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
		monthsShort: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
		weekdaysFull: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
		weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
		weekdaysLetter: ['D','L','M','M','J','V','S'],
		showMonthsShort: false,
		showWeekdaysFull: false,
		select: new Date(),
		closeOnSelect: true // Close upon selecting a date,
	});
});

function callback_dismissable(e) {
	if(confirm("Êtes-vous sur de vouloir supprimer cet item ?")) {
		var id = e.data('id');
		/*$.ajax({
			// chargement du fichier externe monfichier-ajax.php 
			url      : "/asset/php/suppr_besoin.php",
			// Passage des données au fichier externe (ici le nom cliqué)  
			data     : {id_besoin: id},
			cache    : false,
			dataType : "json",
			error    : 	function(request, error) { // Info Debuggage si erreur         
							alert("Erreur : responseText: "+request.responseText);
						},
			success  : 	function(data) {  
							// Informe l'utilisateur que l'opération est terminé et renvoie le résultat
							if(!data.retour) {
								alert("erreur");
							}
							else {
								//alert("supprimé");
							}
						}       
		});*/
		var tagname = $(e).prop("tagName");
		if(tagname=="a" || tagname== "A") {
			e.parent().remove();
		}
		else {
			e.remove();
		}
	}
	else {
		location.reload();
	}
}

