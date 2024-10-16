$(document).ready(function(){
    $('#file').change(function(){
        if (this.files.length > 0){
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#upload-form').submit(function(e){
        e.preventDefault();
        console.log('Form submit diklik');
        var formData = new FormData(this);
         $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                console.log('Respons Sukses: ', response);
                $('#status').html(response);
            },
            error: function(){
                console.log('Error: ' + error);
                $('#status').html('Terjadi kesalahan saar mengunggah file.');
            }
        });
    });
});