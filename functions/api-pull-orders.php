<?php 
// require orders puller 
require('woocommerce-api/getter.php') ; 

//insert The New Orders Into orders table In Database 
# 1 Get The Last Order Id From orders Table
# 2 If The returned id is smaller than the order from api then insert new order

// require connection with database 
require('connect.php') ; 

// get The Last Record id in orders table

$stmt = $conn->prepare('select order_id_api from orders');
$stmt->execute(); 
$result = $stmt->fetchAll(); 
$last_id_inrow = $result[0]['order_id_api'] ;
echo '<pre>';
print_r($get_orders_list);
echo '</pre>';
foreach (array_reverse($get_orders_list) as $key => $value) {
    

// date   
 $date              = date_format(date_create($value->date_created),"Y-m-d h:m:s");
// order id in  api 
 $api_id            = $value->id ;
// customer phone
 $customer_phone    = $value->billing ->phone; 
// customer name 
 $customer_name    = $value->billing ->first_name; 
// product name 
 $customer_adress    = $value->billing ->city; 
// product name 
 $product           = $value->line_items[0] -> name; 
 // quantity
 $quantity           = $value->line_items[0] -> quantity; 
 // TOTAL
 $order_total           = $value->line_items[0] -> total; 


    if($value->id > $last_id_inrow){
        $stmt = $conn->prepare('INSERT INTO `orders` (`order_date`, `order_status`, `order_customer_name`, `order_total`, `order_quantity`, `order_customer_phone`, `order_product`, `order_tranche`, `order_id_api`)
         VALUES ("'. $date .'", 1, "'. $customer_name .'", '. $order_total  .','. $quantity  .',"'. $customer_phone .'","'. $product  .'", 1, '. $api_id .' );');
       $stmt->execute(); 
        
       
    }
 
}

