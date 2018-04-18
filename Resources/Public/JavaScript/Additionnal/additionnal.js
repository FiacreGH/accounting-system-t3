/**
 * Created by fsankara.
 */
$(document).ready( function () {
	$('#table_id').DataTable({
		//loading french langage
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
		}
	});
} );
