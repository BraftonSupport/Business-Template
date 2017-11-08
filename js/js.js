jQuery(document).ready(function($){
	if ($( "#ssbutton" ).prop( "checked" )) {
		$(".ss").show();
	}
	$( "#ssbutton" ).click(function() {
		$(".ss").toggle("slow");
	});
	if(($'#page_template').val() == 'subsection.php'){
		var text = $('#postimagediv').text();
		$(this).text(text.replace('featured', 'background')); 
	}
});