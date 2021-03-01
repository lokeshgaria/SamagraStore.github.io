<?php
 session_start();
  class add_cart
{
  public function add_to_cart($pid, $qty)
  {
    $_SESSION['cart'][$pid]['qty'] = $qty;
    
    
  }
  function update_cart($pid, $qty)
  {
    if (isset($_SESSION['cart'][$pid])) {
      $_SESSION['cart'][$pid]['qty'] = $qty;
    }
  }
  function remove_fromCart($pid)
  {
    if (isset($_SESSION['cart'][$pid])) {
      unset($_SESSION['cart'][$pid]);
    }
  }
  function  empty_cart()
  {
    unset($_SESSION['cart']);
  }
  function  totalProduct()
  {

    if (isset($_SESSION['cart'])) {
        return count($_SESSION['cart']);
      } else {
      return "0";
    }
  }
}
