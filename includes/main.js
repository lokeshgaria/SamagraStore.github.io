 //manage cart function
    function manage_cart(pid, type) {
        var qty = $('#qty').val();
      
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
 //
///sort product
 function sortProduct(pid) {
      var sortTo = $('#filter').val();
   
          window.location.replace("categories.php?id="+pid+"&sort="+sortTo);
        

 }
 