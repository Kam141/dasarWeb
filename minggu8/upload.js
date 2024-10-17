$(document).ready(function() {
    $('#upload-form').suubmit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajaz({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response);
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.')
            }
        });
    });
});