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

	/*(function() {
		var ev = new $.Event('remove'), orig = $.fn.remove;
		$.fn.remove = function() {
			if(confirm("Etes vous sur de vouloir supprimer cet item ?")) {
				$(this).trigger(ev);
				return orig.apply(this, arguments);
			}
			else {
				$(this).css({'style' : 'translateX(0)'});
				$(this).style = "none";
				$(this).html() = $(this).html();
				return false;
			}
		}
	})();

	$('.dismissable').bind('remove', function(event) {
		if(confirm("Êtes vous sur de vouloir supprimer ce besoin ?")) {
			alert("yes");
		}
		else {
			alert("no");
			return false;
		}
		var object_id = $(this).data('id');
		// do pre-mortem stuff here
		// 'this' is still a reference to the element, before removing it
	});*/

});

function callback_dismissable(e) {
	//alert("hi");
	if(confirm("Êtes-vous sur de vouloir supprimer cet item ?")) {
		e.remove();
	}
	else {
		location.reload();
	}
}

