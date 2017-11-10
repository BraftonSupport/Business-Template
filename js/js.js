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

	// $( "td.template:contains('parent')" ).css( "background", "red" );

	$("td.template:contains('parent')").parent().addClass('parent');
	$("td.template:not(:empty):not(:contains('parent'))").parent().addClass('subsection').hide();
	$("td.template:empty").parent().addClass('default');

	$("td.template .dashicons").click(function() {
		console.log( $(this).parents('tr') );
		$(this).parents('tr').nextUntil('tr.parent, tr.default').toggle();
	});
});