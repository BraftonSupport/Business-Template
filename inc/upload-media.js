jQuery(document).ready(function($){
    $('.upload_image_button').click(function(e) {
        jQuery.data(document.body, 'prevElement', $(this).prev());
        jQuery.data(document.body, 'nextElement', $(this).next());
        // jQuery.data(document.body, 'previewImage', $(this).attr('data-target'));
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            // console.log(uploaded_image.toJSON());
            var image_id = uploaded_image.toJSON().id;
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            var showImage = jQuery.data(document.body, 'prevElement');
            var inputText = jQuery.data(document.body, 'nextElement');
            // var imgPreview = $('#'+jQuery.data(document.body, 'previewImage'));
            // console.log(imgPreview);
            if(inputText != undefined && inputText != '')
            {
                inputText.val(image_id);
                showImage.attr('src', image_url);
                // imgPreview.attr('src', image_url);
                // inputText.val(image_url);           
            }
        });
    });
});