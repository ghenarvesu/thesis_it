
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
        </div>
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

$select = "SELECT sample,res_n,res_n_val,res_p,res_p_val,res_k,res_k_val,res_ph,resp_ph_val,datee, name, brgy, area, crop FROM temp WHERE 1";
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
$datee = $rowval['datee'];
$name = $rowval['name'];
$brgy = $rowval['brgy'];
$area = $rowval['area'];
$crop = $rowval['crop'];
}

mysql_close($con);


?>


<form class="form-basic"  method="post">

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

  <div class="form-row">
           <label>
               <span>Date</span>
               <input type="date" name="datee" id="date" required="required" placeholder="Please enter the date today" value='<?php echo  $datee; ?>'/><br /><br />
           </label>
       </div>
       <div class="form-row">
           <label>
               <span>Farmer's Name</span>
               <input type="text" name="name" id="name" required="required" placeholder="Please enter your full name" value='<?php echo  $name; ?>'/><br/><br />
           </label>
       </div>
       <div class="form-row">
           <label>
               <span>Baranggay</span>
               <select name="brgy">
               <option value="please choose tour barangay">Please choose your barangay</option>
               <option value="bagong kalsada"  <?php if ($brgy=='bagong kalsada') { echo "SELECTED"; } ?>>Bagong Kalsada</option>
               <option value="banlic" <?php if ($brgy=='banlic') { echo "SELECTED"; } ?>>Banlic</option>
               <option value="barandal" <?php if ($brgy=='barandal') { echo "SELECTED"; } ?>>Barandal</option>
               <option value="1" <?php if ($brgy=='1') { echo "SELECTED"; } ?>>Barangay 1 (Poblacion)</option>
               <option value="2"<?php if ($brgy=='2') { echo "SELECTED"; } ?>>Barangay 2 (Poblacion)</option>
               <option value="3"<?php if ($brgy=='3') { echo "SELECTED"; } ?>>Barangay 3 (Poblacion)</option>
               <option value="4"<?php if ($brgy=='4') { echo "SELECTED"; } ?>>Barangay 4 (Poblacion)</option>
               <option value="5"<?php if ($brgy=='5') { echo "SELECTED"; } ?>>Barangay 5 (Poblacion)</option>
               <option value="6"<?php if ($brgy=='6') { echo "SELECTED"; } ?>>Barangay 6 (Poblacion)</option>
               <option value="7"<?php if ($brgy=='7') { echo "SELECTED"; } ?>>Barangay 7 (Poblacion)</option>
               <option value="batino"<?php if ($brgy=='batino') { echo "SELECTED"; } ?>>Batino</option>
               <option value="bañadero"<?php if ($brgy=='bañadero') { echo "SELECTED"; } ?>>Bañadero</option>
               <option value="bubuyan"<?php if ($brgy=='bubuyan') { echo "SELECTED"; } ?>>Bubuyan</option>
               <option value="bucal"<?php if ($brgy=='bucal') { echo "SELECTED"; } ?>>Bucal</option>
               <option value="bunggo"<?php if ($brgy=='bunggo') { echo "SELECTED"; } ?>>Bunggo</option>
               <option value="burol"<?php if ($brgy=='burol') { echo "SELECTED"; } ?>>Burol</option>
               <option value="camaligan"<?php if ($brgy=='camaligan') { echo "SELECTED"; } ?>>Camaligan</option>
               <option value="canlubang"<?php if ($brgy=='canlubang') { echo "SELECTED"; } ?>>Canlubang</option>
               <option value="halang"<?php if ($brgy=='halang') { echo "SELECTED"; } ?>>Halang</option>
               <option value="hornalan"<?php if ($brgy=='hornalan') { echo "SELECTED"; } ?>>Hornalan</option>
               <option value="kay-anlog"<?php if ($brgy=='kay-anlog') { echo "SELECTED"; } ?>>Kay-Anlog</option>
               <option value="la mesa"<?php if ($brgy=='la mesa') { echo "SELECTED"; } ?>>La Mesa</option>
               <option value="laguerta"<?php if ($brgy=='laguerta') { echo "SELECTED"; } ?>>Laguerta</option>
               <option value="lawa"<?php if ($brgy=='lawa') { echo "SELECTED"; } ?>>Lawa</option>
               <option value="lecheria"<?php if ($brgy=='lecheria') { echo "SELECTED"; } ?>>Lecheria</option>
               <option value="lingga"<?php if ($brgy=='lingga') { echo "SELECTED"; } ?>>Lingga</option>
               <option value="looc"<?php if ($brgy=='looc') { echo "SELECTED"; } ?>>Looc</option>
               <option value="mabato"<?php if ($brgy=='mabato') { echo "SELECTED"; } ?>>Mabato</option>
               <option value="majada labas"<?php if ($brgy=='majada labas') { echo "SELECTED"; } ?>>Majada Labas</option>
               <option value="makiling"<?php if ($brgy=='makiling') { echo "SELECTED"; } ?>>Makiling</option>
               <option value="mapagong"<?php if ($brgy=='mapagong') { echo "SELECTED"; } ?>>Mapagong</option>
               <option value="masili"<?php if ($brgy=='masili') { echo "SELECTED"; } ?>>Masili</option>
               <option value="maunong"<?php if ($brgy=='maunong') { echo "SELECTED"; } ?>>Maunong</option>
               <option value="mayapa"<?php if ($brgy=='mayapa') { echo "SELECTED"; } ?>>Mayapa</option>
               <option value="milagrosa"<?php if ($brgy=='milagrosa') { echo "SELECTED"; } ?>>Milagrosa</option>
               <option value="paciano rizal"<?php if ($brgy=='paciano rizal') { echo "SELECTED"; } ?>>Paciano Rizal</option>
               <option value="palingon"<?php if ($brgy=='palingon') { echo "SELECTED"; } ?>>Palingon</option>
               <option value="palo-alto"<?php if ($brgy=='palo-alto') { echo "SELECTED"; } ?>>Palo-Alto</option>
               <option value="pansol"<?php if ($brgy=='pansol') { echo "SELECTED"; } ?>>Pansol</option>
               <option value="parian"<?php if ($brgy=='parian') { echo "SELECTED"; } ?>>Parian</option>
               <option value="prinza"<?php if ($brgy=='prinza') { echo "SELECTED"; } ?>>Prinza</option>
               <option value="punta"<?php if ($brgy=='punta') { echo "SELECTED"; } ?>>Punta</option>
               <option value="puting lupa"<?php if ($brgy=='puting lupa') { echo "SELECTED"; } ?>>Puting Lupa</option>
               <option value="real"<?php if ($brgy=='real') { echo "SELECTED"; } ?>>Real</option>
               <option value="saimsim"<?php if ($brgy=='saimsim') { echo "SELECTED"; } ?>>Saimsim</option>
               <option value="sampiruhan"<?php if ($brgy=='sampiruhan') { echo "SELECTED"; } ?>>Sampiruhan</option>
               <option value="san cristobal"<?php if ($brgy=='san cristobal') { echo "SELECTED"; } ?>>San Cristobal</option>
               <option value="san jose"<?php if ($brgy=='san jose') { echo "SELECTED"; } ?>>San Jose</option>
               <option value="san juan"<?php if ($brgy=='san juan') { echo "SELECTED"; } ?>>San Juan</option>
               <option value="sirang lupa"<?php if ($brgy=='sirang lupa') { echo "SELECTED"; } ?>>Sirang Lupa</option>
               <option value="sucol"<?php if ($brgy=='sucol') { echo "SELECTED"; } ?>>Sucol</option>
               <option value="turbina"<?php if ($brgy=='turbina') { echo "SELECTED"; } ?>>Turbina</option>
               <option value="ulango"<?php if ($brgy=='ulango') { echo "SELECTED"; } ?>>Ulango</option>
               <option value="uwisan"<?php if ($brgy=='uwisan') { echo "SELECTED"; } ?>>Uwisan</option>
             </select>
               <!--<input type="text" name="brgy" id="brgy" required="required" placeholder="Please enter your barangay"/><br/><br/>-->
           </label>
       </div>

     <div class="form-row">
           <label>
               <span>Plantation Area</span>
               <input type="number" name="area" id="area" required="required" placeholder="Please enter your plantation area" value='<?php echo  $area; ?>'/><br/><br />
           </label>
       </div>
       <div class="form-row">
           <label>
               <span>Crop</span>
               <input type="text" name="crop" id="crop" required="required" placeholder="Please enter your crop" value='<?php echo  $crop; ?>'/><br/><br />

           </label>
       </div>

<input name="submit" type="submit"  value="submit" />
</form>

<?php

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL

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
    $sql = "INSERT INTO tblresults(sample,res_n,res_n_val,res_p,res_p_val,res_k,res_k_val,res_ph,resp_ph_val,datee,name,brgy,area,crop) select sample,res_n,res_n_val,res_p,res_p_val,res_k,res_k_val,res_ph,resp_ph_val,datee,name,brgy,area,crop from temp WHERE id='1'";

    if ($conn->query($sql) === TRUE) {
   echo "<script type= 'text/javascript'>alert('New record created successfully'); window.location.href='fertreco.php';
  </script>";

    } else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }

    $conn->close();
    }
?>


<?php
include('footer.php');
?>
