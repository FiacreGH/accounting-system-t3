/**
 * Created by fsankara.
 */

$(document).ready(function(event) {


	//datatables implementation
	$('#table_id').DataTable({
		//loading french langage
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
		}
	});


	//deletion confirmation
	$('.delete-confirm').click(function() {
		if (!confirm('Êtes-vous sûr(e) de vouloir supprimer ?')) {
		}
		else {
			event.preventDefault();
		}
		return false;
	});


	//select2 implementation
	$('.select2').select2({
		tags: true
	});


	//history back implementation
	$(".btnback").click(function(event) {
		event.preventDefault();
		history.back(1);
	});


	//Calculate amount from price and quantity
	$("#quantity").on('change', function() {
		var qty = $(this).val();
		var price = $('#price').val();
		var opt = [10, 7.5, 7.22];
		if (qty == 6) {
			//$('#price option:eq(0)').prop('selected', true);
			var option = new Option(opt[0], opt[0], true, true);
			$('#price').append(option).trigger('change');
			$("#amount").val(qty * opt[0]);
		}
		else if (qty == 12) {
			var option = new Option(opt[1], opt[1], true, true);
			$('#price').append(option).trigger('change');
			$("#amount").val(qty * opt[1]);
		}
		else if (qty == 18) {
			var option = new Option(opt[2], opt[2], true, true);
			$('#price').append(option).trigger('change');
			$("#amount").val(130);
			//$("#amount").val((qty * opt[2]).toFixed(2));
			//$("#amount").val(Math.round(((qty * opt[2]) * 100))/100);
		}
		else {
			$("#amount").val(qty * price);
		}
	});
	$("#price").on('change', function() {
		var price = $(this).val();
		var qty = $('#quantity').val();
		$("#amount").val(qty * price);
	});


	//Stay on selected tab while refreshing
	if (!localStorage.getItem('selectedTab')) {
		localStorage.setItem('selectedTab', 'one');
	}
	$("#tab-one").click(function() {
		localStorage.setItem('selectedTab', 'one');
	});
	$("#tab-two").click(function() {
		localStorage.setItem('selectedTab', 'two');
	});
	$("#tab-three").click(function() {
		localStorage.setItem('selectedTab', 'three');
	});
	$("#tab-" + localStorage.getItem('selectedTab')).addClass("active");
	$("#tab-content-" + localStorage.getItem('selectedTab')).addClass("active in");


	//Add selected consultations to URL params
	var param = "";
	$('#gen-invoice').click(function() {
		var checked = [];
		$(".consultations:checked").each(function() {
			checked.push($(this).val());
		});
		if (checked.length > 0) {
			for (var i = 0; i < checked.length; i++) {
				param += "&tx_accountingsystem_patient[consultations][]=" + checked[i] + "";
			}
			var url = $('#gen-invoice').attr('href') + param;
			document.location = url;
		} else {
			//prevent any submit if no checked consultation
			alert('Aucune consultation sélectionnée');
			return false;
		}
		localStorage.setItem('selectedTab', 'three');
		return false;
	});

	//Add selected options to URL params
	$('#month, #year').change(function() {
		var baseUrl = $('#link-monthly').attr('href')
		baseUrl += "&tx_accountingsystem_accounting[month]=" + $("#month option:selected").val();
		baseUrl += "&tx_accountingsystem_accounting[year]=" + $("#year option:selected").val();
		document.location = baseUrl;
	});
});
