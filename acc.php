
<?php
include('mainnav.php');
 ?>
 <?php
 error_reporting(0);
 $host = "localhost";
 $user = "root";
 $password = "";
 $datbase = "db_ccasd";
 mysql_connect($host,$user,$password);
 mysql_select_db($datbase);

 // delete condition
 if(isset($_GET['delete_id']))
 {
 	$sql_query="DELETE FROM systemcred WHERE id=".$_GET['delete_id'];
 	mysql_query($sql_query);
 	header("Location: $_SERVER[PHP_SELF]");
 }
 // delete condition
 ?>
 <script type="text/javascript">
 function edt_id(id)
 {
 	if(confirm('Sure to edit ?'))
 	{
 		window.location.href='edit_data.php?edit_id='+id;
 	}
 }
 function delete_id(id)
 {
 	if(confirm('Sure to Delete ?'))
 	{
 		window.location.href='acc.php?delete_id='+id;
 	}
 }
 </script>
 <link rel="stylesheet" href="style.css" type="text/css" />

  <div class="container">
          <div class="media-container-row">
              <div class="title col-12 col-md-8">
                  <h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>Accounts
                  </h2>
                  <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>

              </div>
          </div>
      </div>

     <div class="main-content">
       <center>
       <table align="center">
           <tr>
           <th colspan="8"><a href="add_data.php"><button type="button" class="btn btn-primary btn-block"> ADD NEW USER</button></a></th>
         </tr>
         <tr>
           <th colspan="8"><a href="userlog.php"><button type="button" class="btn btn-primary btn-block"> User Log</button></a></th>
           </tr>
           <th>First Name</th>
           <th>Middle Name</th>
           <th>Last Name</th>
           <th>Username</th>
           <th>Password</th>
           <th>Position</th>
           <th colspan="2">Operations</th>
           </tr>
           <?php
       	$sql_query="SELECT * FROM systemcred";
       	$result_set=mysql_query($sql_query);
       	if(mysql_num_rows($result_set)>0)
       	{
               while($row=mysql_fetch_row($result_set))
       		{
       		?>
                   <tr>
                   <td><?php echo $row[1]; ?></td>
                   <td><?php echo $row[2]; ?></td>
                   <td><?php echo $row[3]; ?></td>
                   <td><?php echo $row[4]; ?></td>
                   <td><?php echo $row[5]; ?></td>
                   <td><?php echo $row[6]; ?></td>
                   <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="edit.png" align="EDIT" /></a></td>
                   <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="garbage.png" align="DELETE" /></a></td>
                   </tr>
               <?php
       		}
       	}
       	else
       	{
       		?>
               <tr>
               <td colspan="5">No Data Found !</td>
               </tr>
               <?php
       	}
       	?>
           </table>
<center>

</body>
</html>
