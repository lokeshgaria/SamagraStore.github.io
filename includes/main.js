 
    function manage_cart(pid, type) {
        var qty = $('#qty').val();
        console.log(qty);
        $.ajax({
            url: "manageCart.php",
            type: "POST",
            data: {
                qty: qty,
                id: pid,
                type: type
            },
            success: function(params) {
                
                $('#cartNotification').html(params);
            }
        })
    }
 