<?php 
   require 'connect.php';
   $query = "select * from hoa_don_chi_tiet";
   $result = mysqli_query($connect,$query);
 ?>
 <table>
     <tr>
       <td>mahd</td>
       <td>masp</td>
       <td>soluong</td>
       <td>gia</td>
     </tr>
     <?php 
         while ($row=mysqli_fetch_array($result)) 
         {
      ?>
      <tr>
      	<td><?php echo $row['order_id'] ?></td>
      	<td><?php echo $row['id_san_pham'] ?></td>
      	<td><?php echo $row['so_luong'] ?></td>
      	<td><?php echo $row['gia_ban'] ?></td>
      </tr>
      <?php
		}
	?>
 </table>
 <?php
		mysqli_close($connect);	
	?>