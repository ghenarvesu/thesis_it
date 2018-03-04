
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
<!---
     <?php
     /*
     $con = mysql_connect("localhost","root","");

     if (!$con)
     {
     die('Could not connect: ' . mysql_error());
     }

     mysql_select_db("db_ccasd", $con);

     $con = mysql_connect("localhost","root","");

     if (!$con)
     {
     die('Could not connect: ' . mysql_error());
     }

     mysql_select_db("db_ccasd ", $con);

     //INSERT INTO tblresults(sample,res_n,res_n_val,res_p,res_p_val,res_k,res_k_val,res_ph,resp_ph_val)

     $select = "SELECT sample,res_n,res_n_val,res_p,res_p_val,res_k,res_k_val,res_ph,resp_ph_val FROM temp WHERE 1";
     $results = mysql_query($select);

     while($rowval = mysql_fetch_array($results))
      {
     $sample= $rowval['sample'];
     $res_n= $rowval['res_n'];
     $res_n_val= $rowval['res_n_val'];
     $res_p= $rowval['res_p'];
     $res_p_val= $rowval['res_p_val'];
     $res_k= $rowval['res_k'];
     $res_k_val= $rowval['res_k_val'];
     $res_ph= $rowval['res_ph'];
     $resp_ph_val= $rowval['resp_ph_val'];
     }

     mysql_close($con);


     ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_ccasd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM systemcred ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<section class="section-table cid-qx39np6mRN" id="table1-b" data-rv-view="146">
    <div class="container container-table">
          <div class="table-wrapper">
          <div class="container scroll">
            <table class="table isSearch" cellspacing="0">
              <thead>
                <tr class="table-heads ">
                <th class="head-item mbr-fonts-style display-7">id</th>
                <th class="head-item mbr-fonts-style display-7">First Name</th>
                <th class="head-item mbr-fonts-style display-7">Middle Name</th>
                <th class="head-item mbr-fonts-style display-7">Last Name</th>
                <th class="head-item mbr-fonts-style display-7">Username</th>
                <th class="head-item mbr-fonts-style display-7">Password</th>
                <th class="head-item mbr-fonts-style display-7">Position</th></tr>
              </thead>';    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <tr>
        <td ><?php echo $row["id"]; ?> </td>
        <td><?php echo $row["fname"]?> </td>
        <td><?php echo $row["mname"]?> </td>
        <td><?php echo $row["lname"]?> </td>
        <td><?php echo $row["username"]?> </td>
        <td><?php echo $row["password"]?> </td>
        <td><?php echo $row["position"]?> </td>
        <td><a href="update.php?id=<?php echo $row['id']; ?>" class="glyphicon glyphicon-edit btn btn-default btn-sm "></a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>"  class="glyphicon glyphicon-remove btn btn-default btn-sm "></a></td>
        </tr>
      <?php
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
*/
?>

-->



</body>
</html>
