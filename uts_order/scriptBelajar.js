$(document).ready(function() {
    function loadOrders() {
        $.ajax({
            url: 'processBelajar.php',
            type: 'POST',
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
    }

    function deleteOrder(index) {
        $.ajax({
            url: 'processBelajar.php',
            type: 'POST',
            data: { delete_order: index }, // Kirim data indeks pesanan untuk dihapus
            success: function(response) {
                loadOrders(); // Refresh tabel pesanan setelah penghapusan
            },
            error: function() {
                $('#message').html('Failed to delete order. Please try again.');
            }
        });
    }

    $('#orderForm').submit(function(event) {
        event.preventDefault(); 
        var formData = $(this).serialize(); 

        $.ajax({
            url: 'processBelajar.php',
            type: 'POST',
            data: formData,
            success: function(response) {
                $('#message').html(response);
                $('#orderForm')[0].reset(); 
                loadOrders(); // Refresh tabel pesanan
            },
            error: function() {
                $('#message').html('Something went wrong. Please try again.');
            }
        });
    });

    // Load orders on page load
    loadOrders();
});
