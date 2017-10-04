$(document).ready(function() {
	$('select').material_select();
	var $input = $('.datepicker').pickadate({
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
		closeOnSelect: true // Close upon selecting a date,
	});
	var picker = $input.pickadate('picker')
	picker.set('select', new Date());
});
