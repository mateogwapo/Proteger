<?php  
 //sort.php  
 $connect = mysqli_connect("localhost", "root", "", "testing"); 
                    $id=$row['id'];
                    $itemid=$row['itemID'];
                    $itemcategory=$row['itemCategory'];
                    $itemname=$row['itemName'];
                    $itemdescription=$row['itemDescription'];
                    $itemstock=$row['item_stock'];
                    $Date=$row['date']; 
 $output = '';  
 $order = $_POST["order"];  
 if($order == 'desc')  
 {  
      $order = 'asc';  
 }  
 else  
 {  
      $order = 'desc';  
 }  
 $query = "SELECT * FROM tblitems ORDER BY ".$_POST["column_name"]." ".$_POST["order"]."";  
 $result = mysqli_query($connect, $query);  
 $output .= '  
 <table class="table table-bordered">  
      <tr>  
           <th><a class="column_sort" id="name" data-order="'.$order.'" href="#">Name</a></th>  
           <th><a class="column_sort" id="category" data-order="'.$order.'" href="#">Item Category</a></th>  
           <th><a class="column_sort" id="stock" data-order="'.$order.'" href="#">Stock</a></th>  
      </tr>  
 ';  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
      <tr>  
           <td>' . $itemid . '</td>  
           <td>' . $itemname . '</td>  
           <td>' . $Date . '</td>  
           <td>' . $itemcategory . '</td>  
           <td>' . $itemdescription . '</td>
           <td>' .  $itemstock . '</td>  
      </tr>  
      ';  
 }  
 $output .= '</table>';  
 echo $output;  
 ?>  