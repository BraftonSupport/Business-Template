jQuery(document).ready(function ($) {
	if ($("#ssbutton").prop("checked")) {
		$(".ss").show();
	}
	$("#ssbutton").click(function () {
		$(".ss").toggle("slow");
	});

	//this doesn't work
	// if( $( '#page_template' ).val() == 'subsection.php'){
	// 	$( '#remove-post-thumbnail' ).text('Remove background image'); 
	// 	$( 'p:last-of-type #set-post-thumbnail' ).text('Set background image');
	// }
	// $( '#page_template' ).on('change', function() {
	// 	$( '#remove-post-thumbnail' ).text('Remove featured image'); 
	// 	$( 'p:last-of-type #set-post-thumbnail' ).text('Set featured image'); 
	// });

	$("td.template:contains('subsection')").parent().addClass('subsection');
	$("td.template:contains('Parent')").parent().addClass('parent');
	$("td.template:empty").parent().addClass('default');

	$("td.template:contains('subsection')").each(function (index) {
		var number = $(this).children('.number').text();
		$(this).parent().addClass('parent-' + number);
	});

	// $("td.template a").click(function () {
	// 	$(this).children('span').toggleClass('open');
	// 	var tr = $(this).parents('tr');
	// 	var parent = tr.attr('id');
	// 	var parentid = parent.replace('post-', '');

	// 	$('tr.parent-' + parentid).toggle('slide');
	// });

	var select = $('#acf-field_592324b7840bb')
	if (select.val() === 'visual') {
		$('.acf-field').show();
		$('.acf-field-593ec173437f2').hide();
		$('.acf-field-593ec263437f3').hide();
		$('.acf-field-593ed342a9ba0').hide();
		$('.acf-field-5924aaf852c2d').hide();
		$('.acf-field-59246ad140f13').hide();
		$('.acf-field-59246b6966665').hide();
		$('.acf-field-59249d29a5510').hide();
		$('.acf-field-592db5811364b').hide();
		$('.acf-field-592db75d1364c').hide();
		$('.acf-field-592dcb3b8bd1c').hide();
		$('.acf-field-594032598fab4').hide();
		$('.acf-field-59443c9e3b126').hide();
		$('.acf-field-59443c943b125').hide();
		$('.acf-field-594032ed8fab5').hide();
		$('.acf-field-59e4ec2c4bbcd').hide();
		$('.acf-field-594033168fab6').hide();
		$('.acf-field-594c32e3805a6').hide();
		$('.acf-field-594c3335805a7').hide();
		$('.acf-field-594c3346805a8').hide();
		$('.acf-field-594c34c4805a9').hide();
		$('.acf-field-5940343b8fab8').hide();
	}
	if (select.val() === 'list') {
		$('.acf-field').show();
		$('.acf-field-593ec173437f2').hide();
		$('.acf-field-593ec263437f3').hide();
		$('.acf-field-593ed342a9ba0').hide();
		$('.acf-field-5931b7574ea13').hide();
		$('.acf-field-593825bebc0bb').hide();
		$('.acf-field-592db5811364b').hide();
		$('.acf-field-592db75d1364c').hide();
		$('.acf-field-592dcb3b8bd1c').hide();
		$('.acf-field-594032598fab4').hide();
		$('.acf-field-59443c9e3b126').hide();
		$('.acf-field-59443c943b125').hide();
		$('.acf-field-594032ed8fab5').hide();
		$('.acf-field-59e4ec2c4bbcd').hide();
		$('.acf-field-594033168fab6').hide();
		$('.acf-field-594c32e3805a6').hide();
		$('.acf-field-594c3335805a7').hide();
		$('.acf-field-594c3346805a8').hide();
		$('.acf-field-594c34c4805a9').hide();
		$('.acf-field-5940343b8fab8').hide();
	}
	if (select.val() === 'slider') {
		$('.acf-field').show();
		$('.acf-field-593ec173437f2').hide();
		$('.acf-field-593ec263437f3').hide();
		$('.acf-field-593ed342a9ba0').hide();
		$('.acf-field-5931b7574ea13').hide();
		$('.acf-field-593825bebc0bb').hide();
		$('.acf-field-5924aaf852c2d').hide();
		$('.acf-field-59246ad140f13').hide();
		$('.acf-field-59246b6966665').hide();
		$('.acf-field-59249d29a5510').hide();
		$('.acf-field-594032598fab4').hide();
		$('.acf-field-59443c9e3b126').hide();
		$('.acf-field-59443c943b125').hide();
		$('.acf-field-594032ed8fab5').hide();
		$('.acf-field-59e4ec2c4bbcd').hide();
		$('.acf-field-594033168fab6').hide();
		$('.acf-field-594c32e3805a6').hide();
		$('.acf-field-594c3335805a7').hide();
		$('.acf-field-594c3346805a8').hide();
		$('.acf-field-594c34c4805a9').hide();
		$('.acf-field-5940343b8fab8').hide();
	}
	if (select.val() === 'half') {
		$('.acf-field').show();
		$('.acf-field-5931b7574ea13').hide();
		$('.acf-field-5924aaf852c2d').hide();
		$('.acf-field-59246ad140f13').hide();
		$('.acf-field-59246b6966665').hide();
		$('.acf-field-59249d29a5510').hide();
		$('.acf-field-592db5811364b').hide();
		$('.acf-field-592db75d1364c').hide();
		$('.acf-field-592dcb3b8bd1c').hide();
		$('.acf-field-594032598fab4').hide();
		$('.acf-field-59443c9e3b126').hide();
		$('.acf-field-59443c943b125').hide();
		$('.acf-field-594032ed8fab5').hide();
		$('.acf-field-59e4ec2c4bbcd').hide();
		$('.acf-field-594033168fab6').hide();
		$('.acf-field-594c32e3805a6').hide();
		$('.acf-field-594c3335805a7').hide();
		$('.acf-field-594c3346805a8').hide();
		$('.acf-field-594c34c4805a9').hide();
		$('.acf-field-5940343b8fab8').hide();
	}
	if (select.val() === 'full') {
		$('.acf-field').show();
		$('.acf-field-593ec173437f2').hide();
		$('.acf-field-5940343b8fab8').hide();
		$('.acf-field-593ec263437f3').hide();
		$('.acf-field-593ed342a9ba0').hide();
		$('.acf-field-5931b7574ea13').hide();
		$('.acf-field-593825bebc0bb').hide();
		$('.acf-field-5924aaf852c2d').hide();
		$('.acf-field-59246ad140f13').hide();
		$('.acf-field-59246b6966665').hide();
		$('.acf-field-59249d29a5510').hide();
		$('.acf-field-592db5811364b').hide();
		$('.acf-field-592db75d1364c').hide();
		$('.acf-field-592dcb3b8bd1c').hide();
		$('.acf-field-594032598fab4').hide();
		$('.acf-field-59443c9e3b126').hide();
		$('.acf-field-59443c943b125').hide();
		$('.acf-field-594032ed8fab5').hide();
		$('.acf-field-59e4ec2c4bbcd').hide();
		$('.acf-field-594033168fab6').hide();
		$('.acf-field-594c32e3805a6').hide();
		$('.acf-field-594c3335805a7').hide();
		$('.acf-field-594c3346805a8').hide();
		$('.acf-field-594c34c4805a9').hide();
	}
	if (select.val() === 'cta') {
		$('.acf-field').show();
		$('.acf-field-593ec173437f2').hide();
		$('.acf-field-5940343b8fab8').hide();
		$('.acf-field-593ec263437f3').hide();
		$('.acf-field-593ed342a9ba0').hide();
		$('.acf-field-5931b7574ea13').hide();
		$('.acf-field-5924aaf852c2d').hide();
		$('.acf-field-59246ad140f13').hide();
		$('.acf-field-59246b6966665').hide();
		$('.acf-field-59249d29a5510').hide();
		$('.acf-field-592db5811364b').hide();
		$('.acf-field-592db75d1364c').hide();
		$('.acf-field-592dcb3b8bd1c').hide();
		$('.acf-field-594032598fab4').hide();
		$('.acf-field-59443c9e3b126').hide();
		$('.acf-field-59443c943b125').hide();
		$('.acf-field-594032ed8fab5').hide();
		$('.acf-field-59e4ec2c4bbcd').hide();
		$('.acf-field-594033168fab6').hide();
		$('.acf-field-594c32e3805a6').hide();
		$('.acf-field-594c3335805a7').hide();
		$('.acf-field-594c3346805a8').hide();
		$('.acf-field-594c34c4805a9').hide();
	}
	if (select.val() === 'map') {
		$('.acf-field').show();
		$('.acf-field-59387dfe68d79').hide();
		$('.acf-field-5a021f1733871').hide();
		$('.acf-field-593ec173437f2').hide();
		$('.acf-field-5940343b8fab8').hide();
		$('.acf-field-593ec263437f3').hide();
		$('.acf-field-593ed342a9ba0').hide();
		$('.acf-field-5931b7574ea13').hide();
		$('.acf-field-593825bebc0bb').hide();
		$('.acf-field-5924aaf852c2d').hide();
		$('.acf-field-59246ad140f13').hide();
		$('.acf-field-59246b6966665').hide();
		$('.acf-field-59249d29a5510').hide();
		$('.acf-field-592db5811364b').hide();
		$('.acf-field-592db75d1364c').hide();
		$('.acf-field-592dcb3b8bd1c').hide();
	}
	$(select).change(function () {
		if ($(this).val() === 'visual') {
			$('.acf-field').show();
			$('.acf-field-593ec173437f2').hide();
			$('.acf-field-593ec263437f3').hide();
			$('.acf-field-593ed342a9ba0').hide();
			$('.acf-field-5924aaf852c2d').hide();
			$('.acf-field-59246ad140f13').hide();
			$('.acf-field-59246b6966665').hide();
			$('.acf-field-59249d29a5510').hide();
			$('.acf-field-592db5811364b').hide();
			$('.acf-field-592db75d1364c').hide();
			$('.acf-field-592dcb3b8bd1c').hide();
			$('.acf-field-594032598fab4').hide();
			$('.acf-field-59443c9e3b126').hide();
			$('.acf-field-59443c943b125').hide();
			$('.acf-field-594032ed8fab5').hide();
			$('.acf-field-59e4ec2c4bbcd').hide();
			$('.acf-field-594033168fab6').hide();
			$('.acf-field-594c32e3805a6').hide();
			$('.acf-field-594c3335805a7').hide();
			$('.acf-field-594c3346805a8').hide();
			$('.acf-field-594c34c4805a9').hide();
			$('.acf-field-5940343b8fab8').hide();
		} else if ($(this).val() === 'list') {
			$('.acf-field').show();
			$('.acf-field-593ec173437f2').hide();
			$('.acf-field-593ec263437f3').hide();
			$('.acf-field-593ed342a9ba0').hide();
			$('.acf-field-5931b7574ea13').hide();
			$('.acf-field-593825bebc0bb').hide();
			$('.acf-field-592db5811364b').hide();
			$('.acf-field-592db75d1364c').hide();
			$('.acf-field-592dcb3b8bd1c').hide();
			$('.acf-field-594032598fab4').hide();
			$('.acf-field-59443c9e3b126').hide();
			$('.acf-field-59443c943b125').hide();
			$('.acf-field-594032ed8fab5').hide();
			$('.acf-field-59e4ec2c4bbcd').hide();
			$('.acf-field-594033168fab6').hide();
			$('.acf-field-594c32e3805a6').hide();
			$('.acf-field-594c3335805a7').hide();
			$('.acf-field-594c3346805a8').hide();
			$('.acf-field-594c34c4805a9').hide();
			$('.acf-field-5940343b8fab8').hide();
		} else if ($(this).val() === 'slider') {
			$('.acf-field').show();
			$('.acf-field-593ec173437f2').hide();
			$('.acf-field-593ec263437f3').hide();
			$('.acf-field-593ed342a9ba0').hide();
			$('.acf-field-5931b7574ea13').hide();
			$('.acf-field-593825bebc0bb').hide();
			$('.acf-field-5924aaf852c2d').hide();
			$('.acf-field-59246ad140f13').hide();
			$('.acf-field-59246b6966665').hide();
			$('.acf-field-59249d29a5510').hide();
			$('.acf-field-594032598fab4').hide();
			$('.acf-field-59443c9e3b126').hide();
			$('.acf-field-59443c943b125').hide();
			$('.acf-field-594032ed8fab5').hide();
			$('.acf-field-59e4ec2c4bbcd').hide();
			$('.acf-field-594033168fab6').hide();
			$('.acf-field-594c32e3805a6').hide();
			$('.acf-field-594c3335805a7').hide();
			$('.acf-field-594c3346805a8').hide();
			$('.acf-field-594c34c4805a9').hide();
			$('.acf-field-5940343b8fab8').hide();
		} else if ($(this).val() === 'half') {
			$('.acf-field').show();
			$('.acf-field-5931b7574ea13').hide();
			$('.acf-field-5924aaf852c2d').hide();
			$('.acf-field-59246ad140f13').hide();
			$('.acf-field-59246b6966665').hide();
			$('.acf-field-59249d29a5510').hide();
			$('.acf-field-592db5811364b').hide();
			$('.acf-field-592db75d1364c').hide();
			$('.acf-field-592dcb3b8bd1c').hide();
			$('.acf-field-594032598fab4').hide();
			$('.acf-field-59443c9e3b126').hide();
			$('.acf-field-59443c943b125').hide();
			$('.acf-field-594032ed8fab5').hide();
			$('.acf-field-59e4ec2c4bbcd').hide();
			$('.acf-field-594033168fab6').hide();
			$('.acf-field-594c32e3805a6').hide();
			$('.acf-field-594c3335805a7').hide();
			$('.acf-field-594c3346805a8').hide();
			$('.acf-field-594c34c4805a9').hide();
			$('.acf-field-5940343b8fab8').hide();
		} else if ($(this).val() === 'full') {
			$('.acf-field').show();
			$('.acf-field-593ec173437f2').hide();
			$('.acf-field-5940343b8fab8').hide();
			$('.acf-field-593ec263437f3').hide();
			$('.acf-field-593ed342a9ba0').hide();
			$('.acf-field-5931b7574ea13').hide();
			$('.acf-field-593825bebc0bb').hide();
			$('.acf-field-5924aaf852c2d').hide();
			$('.acf-field-59246ad140f13').hide();
			$('.acf-field-59246b6966665').hide();
			$('.acf-field-59249d29a5510').hide();
			$('.acf-field-592db5811364b').hide();
			$('.acf-field-592db75d1364c').hide();
			$('.acf-field-592dcb3b8bd1c').hide();
			$('.acf-field-594032598fab4').hide();
			$('.acf-field-59443c9e3b126').hide();
			$('.acf-field-59443c943b125').hide();
			$('.acf-field-594032ed8fab5').hide();
			$('.acf-field-59e4ec2c4bbcd').hide();
			$('.acf-field-594033168fab6').hide();
			$('.acf-field-594c32e3805a6').hide();
			$('.acf-field-594c3335805a7').hide();
			$('.acf-field-594c3346805a8').hide();
			$('.acf-field-594c34c4805a9').hide();
		} else if ($(this).val() === 'cta') {
			$('.acf-field').show();
			$('.acf-field-593ec173437f2').hide();
			$('.acf-field-5940343b8fab8').hide();
			$('.acf-field-593ec263437f3').hide();
			$('.acf-field-593ed342a9ba0').hide();
			$('.acf-field-5931b7574ea13').hide();
			$('.acf-field-5924aaf852c2d').hide();
			$('.acf-field-59246ad140f13').hide();
			$('.acf-field-59246b6966665').hide();
			$('.acf-field-59249d29a5510').hide();
			$('.acf-field-592db5811364b').hide();
			$('.acf-field-592db75d1364c').hide();
			$('.acf-field-592dcb3b8bd1c').hide();
			$('.acf-field-594032598fab4').hide();
			$('.acf-field-59443c9e3b126').hide();
			$('.acf-field-59443c943b125').hide();
			$('.acf-field-594032ed8fab5').hide();
			$('.acf-field-59e4ec2c4bbcd').hide();
			$('.acf-field-594033168fab6').hide();
			$('.acf-field-594c32e3805a6').hide();
			$('.acf-field-594c3335805a7').hide();
			$('.acf-field-594c3346805a8').hide();
			$('.acf-field-594c34c4805a9').hide();
		} else if ($(this).val() === 'map') {
			$('.acf-field').show();
			$('.acf-field-59387dfe68d79').hide();
			$('.acf-field-5a021f1733871').hide();
			$('.acf-field-593ec173437f2').hide();
			$('.acf-field-5940343b8fab8').hide();
			$('.acf-field-593ec263437f3').hide();
			$('.acf-field-593ed342a9ba0').hide();
			$('.acf-field-5931b7574ea13').hide();
			$('.acf-field-593825bebc0bb').hide();
			$('.acf-field-5924aaf852c2d').hide();
			$('.acf-field-59246ad140f13').hide();
			$('.acf-field-59246b6966665').hide();
			$('.acf-field-59249d29a5510').hide();
			$('.acf-field-592db5811364b').hide();
			$('.acf-field-592db75d1364c').hide();
			$('.acf-field-592dcb3b8bd1c').hide();
		}
	});

});