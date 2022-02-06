<?php
require_once('../database/Database.php');
require_once('../interface/icart.php');
class Cart extends Database implements icart {
    public function add_toCart($item_id, $qty, $stock_id, $user_id, $uniqid)
    {
        $sql="INSERT INTO cart(item_id. cart_qty, cart_stock_id, cart_uniqueid)
        VALUES(?,?,?,?,?)";
        return $this->insertRow($sql, [$item_id, $qty, $stock_id, $user_id, $uniqid]);
    }//end add_tocart

    public function all_cartDatas($user_id)
    {
        $sql = "SELECT * 
        FROM cart c
        INNER JOIN item i
        ON c.item_id = i.item_id
        WHERE user_id = ?
        ORDER BY cart_id ASC";
        return $this->getRows($sql, [$user_id]);
    }//end all_cartDatas
    public function delCart($cart_id){
        
        $sql = "DELETE FROM cart 
        WHERE cart_id = ?";
        return $this->deleteRow($sql, [$cart_id]);
        }//end delCart
    public function dellAllCart()
        {
            $sql = "DELETE FROM cart";
            return $this->deleteRow($sql);
        }//end dellAllCart
    public function allCart(){
        $sql = "SELECT * 
        FROM cart c
        INNER JOIN item i
        ON s.item_id = i.item_id
        INNER JOIN item_type it
        ON it.item_type_id=i.item_type_id";
        return $this->getRows($sql);
    }//end all Cart
}//end class cart
    $cart =new Cart();
    //end of file cart.php

?>