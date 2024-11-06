$(document).ready(function() {
    $('#delete_order').submit(function(event) {
        event.preventDefault(); 
        var formData = $(this).data('id_pesanan'); 
        $.ajax({ 
            url: 'pocessBelajar.php',
            type: 'POST',
            data: {delete_order: formData},
            success: function(response) {
                $('#orderTable').html(response);
                $('#message').html('Pesanan berhasil dihapus');
        
            },
            error: function() {
                $('#message').html('Something went wrong. Please try again.');
            }
        });
    });

    $('#orderForm').submit(function(event) {
        event.preventDefault(); 
        var formData = $(this).serialize(); 

        $.ajax({ 
            url: 'processBelajar.php',
            type: 'POST',
            data: formData,
            success: function(response) {
                $('#message').html('');
                $('#orderTable').html(response);
            
                $('.delete-btn').click(function() {
                    var orderIndex = $(this).data('index');
                    deleteOrder(orderIndex); // Panggil fungsi delete order
                });
            },
            error: function() {
                $('#message').html('Something went wrong. Please try again.');
            }
        });       
    });
   
});
