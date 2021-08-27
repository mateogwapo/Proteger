<!DOCTYPE html>
<html>
<head>
	 <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          id
                      </th>
                      <th style="width: 10%">
                          DonorName
                      </th>
                      <th style="width: 10%"class="text-center" >
                          DonateID
                      </th>
                      <th style="width: 10%" class="text-center">
                         Goods
                      </th>
                      <th style="width: 10%" class="text-center">
                          Quantity
                      </th>
                      <th style="width: 1%">
                          id
                      </th>
                      <th style="width: 10%">
                          OrganizationName
                      </th>
                      <th style="width: 10%" class="text-center">
                         Goods
                      </th>
                      <th style="width: 10%" class="text-center">
                          Quantity
                      </th>
                      
                      
                      
                  </tr>
              </thead>

<?php
$con=mysqli_connect("localhost","root","","db_system");
$query="SELECT distinct a.*, b.*
from (select distinct aa.id, aa.donorName, ab.donateID, ab.goods, ab.quantit
	from tbldonor aa, tbldonated ab
	where aa.id = ab.donateID
	and aa.donorID = 9
	and ab.donateID = 2) a,
(select distinct ac.id, ac.organizationName, ad.goods, ad.quantity
from tblorganization ac, tblrequest ad
where ac.id = ad.requestID
) b
where a.goods = b.goods
and a.quantit <= b.quantity
";
$run=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($run))
                  {
                  	$id=$row['donateID'];
                    $donorid=$row['donateID'];
                    $donor=$row['donorName'];
                    $donorid=$row['donateID'];
                    $good=$row['goods'];
                    $quantit=$row['quantit'];

                    $id2=$row['id'];
                    $org=$row['organizationName'];
                    $goods=$row['goods'];
                    $quantity=$row['quantity'];
                    

                    ?>
      <tbody>
                  <tr>
                  	<td>
                          <?php echo $id; ?>
                      </td>                      
                      <td>                  
                          <?php echo $donor; ?>
                      </td>
                      <td>
                          <?php echo $donorid; ?>
                      </td>
                      <td>                  
                          <?php echo $good; ?>
                      </td>
                      <td>                  
                          <?php echo $quantit; ?>
                      </td>
                      <td>
                          <?php echo $id2; ?>
                      </td>
                      <td>                  
                          <?php echo $org; ?>
                      </td>
                      <td>                  
                          <?php echo $goods; ?>
                      </td>
                      <td>                  
                          <?php echo $quantity; ?>
                      </td>
                  </tr>
              </tbody>
               <?php } ?>
          </table>
      </head>
      </html>
