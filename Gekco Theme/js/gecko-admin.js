jQuery(document).ready(function($){

    var mediaUploader;

    $('#upload-button').on('click',function(e){
        e.preventDefault();
        if(mediaUploader){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Chose Logo Image',
            button: {
                test: 'Chose Image'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            attchment = mediaUploader.state().get('selection').first().toJSON();
            $('#logo-image').val(attchment.url);
        });
        mediaUploader.open();

    });
    $('#remove-logo').on('click', function(e){
      e.preventDefault();
      var confirDelete = confirm('Are you sure you want to remove the logo?');
      if(confirDelete == true){
        $('#logo-image').val('');
        $('.gecko-general-form').submit();
      }
      return;
    });

});
