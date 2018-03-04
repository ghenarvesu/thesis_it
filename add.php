
<?php
include('mainnav.php');
session_start();
 ?>
<link rel="stylesheet" href="assets/css/form-basic.css">

<div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>Soil Test
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>

            </div>
        </div>  ws
    </div>

<div class="main-content">
<!-- You only need this form and the form-basic.css -->

<?php
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
<form class="form-basic"  method="post" >

<div class="form-row">
  <label>
    <span>Sample No.</span>
    <input type="text" name="samp_no" value='<?php echo  $sample; ?>'>
  </label>
</div>

<div class="form-row">
  <label>
    <span>Nitrogen</span>
    <input type="text" name="resn" value='<?php echo  $res_n; ?>'/>
    <span> </span>
    <input type="text" name="resnval" value='<?php echo  $res_n_val; ?>'/>

  </label>
</div>

<div class="form-row">
  <label>
    <span>Phosporus</span>
    <input type="text" name="resp" value='<?php echo  $res_p; ?>'/>
    <span> </span>
    <input type="text" name="respval" value='<?php echo  $res_p_val; ?>'/>

  </label>
</div>

<div class="form-row">
  <label>
    <span>Potassium</span>
    <input type="text" name="resk" value='<?php echo  $res_k; ?>'/>
    <span> </span>
    <input type="text" name="reskval" value='<?php echo  $res_k_val; ?>'/>

  </label>
</div>

<div class="form-row">
  <label>
  <span>pH</span>
  <input type="text" name="resph" value='<?php echo  $res_ph; ?>'/>
  <span> </span>
  <input type="text" name="resphval" value='<?php echo  $resp_ph_val; ?>'/>
  </label>
</div>
<input name="submit" type="Submit"  value="submit" />

</form>

<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("db_ccasd", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL


$samp_no=$_POST['samp_no'];
$resn=$_POST['resn'];
$resnval= $_POST['resnval'];
$resp= $_POST['resp'];
$respval= $_POST['respval'];
$resk=  $_POST['resk'];
$reskval=$_POST['reskval'];
$resph= $_POST['resph'];
$respphval= $_POST['resphval'];


//echo "<script type= 'text/javascript'>alert('New record created successfully'); window.location.href='potassium.php';</script>";
//if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("INSERT INTO tblresults (sample,res_n,res_n_val,res_p,res_p_val,res_k,res_k_val,res_ph,resp_ph_val )
VALUES ('$samp_no','$resn','$resnval','$resp','$respval','$resk','$reskval','$resph','$respphval')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
$query = mysql_query("DELETE FROM temp WHERE 1");


if(!$query)
{
  die(mysqli_error());
//else{
//echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}else{
  echo "<script type= 'text/javascript'>alert('New record created successfully'); window.location.href='fertreco.php';</script>";
}
//}
mysql_close($connection);
} // Closing Connection with Server
/*
if(isset($_POST["submit"])){

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



$sql = "INSERT INTO tblresults (sample,res_n,res_n_val,res_p,res_p_val,res_k,res_k_val,res_ph,resp_ph_val )
VALUES (".$_POST["sampno"]."','".$_POST["resn"]."','".$_POST["resnval"]."','".$_POST["resp"]."','".$_POST["respval"]."','".$_POST["resk"]."'
,'".$_POST["reskval"]."','".$_POST["resph"]."','".$_POST["respphval"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully'); window.location.href='phosporus.php';
</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
*/
?>


</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
include('footer.php');
?>
