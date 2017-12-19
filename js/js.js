jQuery(document).ready(function($){
	if ($( "#ssbutton" ).prop( "checked" )) {
		$(".ss").show();
	}
	$( "#ssbutton" ).click(function() {
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


	$("td.template:contains('subsection')").parent().addClass('subsection').hide();
	$("td.template:contains('Parent')").parent().addClass('parent');
	$("td.template:empty").parent().addClass('default');

	$("td.template:contains('subsection')").each(function( index ) {
		var number = $( this ).children('.number').text();
		$( this ).parent().addClass('parent-'+number);
	});

	$("td.template a").click(function() {
		$(this).children('span').toggleClass('open');
		var tr = $(this).parents('tr');
		var parent = tr.attr('id');
		var parentid = parent.replace('post-', '');

		$('tr.parent-'+parentid).toggle('slide');
	});
});