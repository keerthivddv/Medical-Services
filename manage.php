<?php

session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['add'])){
        if(isset($_SESSION['cart'])){
            $myitems=array_column($_SESSION['cart'],'item_name');
            if(in_array($_POST['item_name'],$myitems)){
                echo"<script>
                        
                
                           window.location.href='shop.php';
                         </script>";
            }
         $count=count($_SESSION['cart']);
         $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
         
                 }
      else{
        $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
        echo"<script>
        window.location.href='shop.php';
      </script>";
            }
    
    }

    if(isset($_POST['remove'])){
        foreach($_SESSION['cart'] as $key =>$value){
            if($value['item_name']==$_POST['item_name']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"<script>
                           window.location.href='mycart.php';
                         </script>";
            }
        }
    }
}
?>
