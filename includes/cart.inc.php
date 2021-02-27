<?php 

Class add_cart(){
    function add_to_cart($pid,$qty){
      $_SESSION['cart']['pid'][$qty] = $qty; 
    }
    function update_cart($pid,$qty){
        if (isset($_SESSION['cart'][$qty])) {
            $_SESSION['cart']['pid'][$qty] = $qty;   
        }
        $_SESSION['cart']['pid'][$qty] = $qty; 
      }
      function remove_fromCart($pid,$qty){
        if (isset($_SESSION['cart'][$qty])) {
           unset($_SESSION['cart']['pid'][$qty]);   
        } 
      }
      function  empty_cart($pid,$qty){
        $_SESSION['cart']['pid'][$qty] = $qty; 
      }  
}
?>