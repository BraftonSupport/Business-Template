jQuery(document).ready(function($){
	if ($( "#ssbutton" ).prop( "checked" )) {
		$(".ss").show();
	}
	$( "#ssbutton" ).click(function() {
		$(".ss").toggle("slow");
	});

	$("td.template:not(:empty):not(:contains('Parent'))").parent().addClass('subsection');
	$("td.template:contains('Parent')").parent().addClass('parent');
	$("td.template:empty").parent().addClass('default');

	$("td.template a").click(function() {
		$(this).children('span').toggleClass('open');
		$(this).parents('tr').nextUntil('tr.parent, tr.default').toggle('slide');
	});
});