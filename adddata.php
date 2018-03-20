
<?php
include('mainnav.php');
 ?>
 <?php
// Remove below comments from header If  you are making calls from another server
	$dbPassword = "";
	$dbUsername = "root";
	$dbServer = "localhost";
	$dbDatabase = "db_ccasd";
	$q = $_GET['q'];
if(isset($q) && !empty($q)) {
	$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbDatabase);
    $query = "SELECT ID, crop FROM tblcrops WHERE crop LIKE '$q%'";
    $result = mysqli_query($conn, $query);
    $res = array();
    while($resultSet = mysqli_fetch_assoc($result)) {
     $res[$resultSet['ID']] = $resultSet['crop'];
    }
    if(!$res) {
        $res[0] = 'Not found!';
    }
    echo json_encode($res);
}
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/form-basic.css">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
 <style>
  .ui-autocomplete-loading {
    background: white url("img/ui-anim_basic_16x16.gif") right center no-repeat;
  }
  </style>
</head>
<body>

<div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>Farmer's Information
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>

            </div>
        </div>
    </div>

   <div class="main-content" id="login">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="#">
			 <div class="form-row">
                <label>
                    <span>Date</span>
                    <input type="date" name="datee" id="date" required="required" placeholder="Enter the date today"/><br /><br />
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Farmer's Name</span>
                    <input type="text" name="name" id="name" required="required" placeholder="Enter full name"/><br/><br />
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Baranggay</span>
					<select name="brgy">
						<option value="please choose tour barangay">Choose your Barangay</option>
						<option value="bagong kalsada">Bagong Kalsada</option>
						<option value="banlic">Banlic</option>
						<option value="barandal">Barandal</option>
						<option value="1">Barangay 1 (Poblacion)</option>
						<option value="2">Barangay 2 (Poblacion)</option>
						<option value="3">Barangay 3 (Poblacion)</option>
						<option value="4">Barangay 4 (Poblacion)</option>
						<option value="5">Barangay 5 (Poblacion)</option>
						<option value="6">Barangay 6 (Poblacion)</option>
						<option value="7">Barangay 7 (Poblacion)</option>
						<option value="batino">Batino</option>
						<option value="bañadero">Bañadero</option>
						<option value="bubuyan">Bubuyan</option>
						<option value="bucal">Bucal</option>
						<option value="bunggo">Bunggo</option>
						<option value="burol">Burol</option>
						<option value="camaligan">Camaligan</option>
						<option value="canlubang">Canlubang</option>
						<option value="halang">Halang</option>
						<option value="hornalan">Hornalan</option>
						<option value="kay-anlog">Kay-Anlog</option>
						<option value="la mesa">La Mesa</option>
						<option value="laguerta">Laguerta</option>
						<option value="lawa">Lawa</option>
						<option value="lecheria">Lecheria</option>
						<option value="lingga">Lingga</option>
						<option value="looc">Looc</option>
						<option value="mabato">Mabato</option>
						<option value="majada labas">Majada Labas</option>
						<option value="makiling">Makiling</option>
						<option value="mapagong">Mapagong</option>
						<option value="masili">Masili</option>
						<option value="maunong">Maunong</option>
						<option value="mayapa">Mayapa</option>
						<option value="milagrosa">Milagrosa</option>
						<option value="paciano rizal">Paciano Rizal</option>
						<option value="palingon">Palingon</option>
						<option value="palo-alto">Palo-Alto</option>
						<option value="pansol">Pansol</option>
						<option value="parian">Parian</option>
						<option value="prinza">Prinza</option>
						<option value="punta">Punta</option>
						<option value="puting lupa">Puting Lupa</option>
						<option value="real">Real</option>
						<option value="saimsim">Saimsim</option>
						<option value="sampiruhan">Sampiruhan</option>
						<option value="san cristobal">San Cristobal</option>
						<option value="san jose">San Jose</option>
						<option value="san juan">San Juan</option>
						<option value="sirang lupa">Sirang Lupa</option>
						<option value="sucol">Sucol</option>
						<option value="turbina">Turbina</option>
						<option value="ulango">Ulango</option>
						<option value="uwisan">Uwisan</option>
					</select>
                    <!--<input type="text" name="brgy" id="brgy" required="required" placeholder="Please enter your barangay"/><br/><br/>-->
                </label>
            </div>

         	<div class="form-row">
                <label>
                    <span>Plantation Area<br> (in has.)</span>
                    <input type="number" name="area" id="area" required="required" placeholder="Enter your plantation area"/><br/><br />
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Crop</span>
                    <input type="text" name="crop" id="crop" required="required" placeholder="Enter your crop"/><br/><br />

                </label>
            </div>
<input type="submit" value=" Submit " name="submit" /><br />

</form>
</div>

<?php
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

$datee = $_POST['datee'];
$name = $_POST['name'];
$brgy = $_POST['brgy'];
$area = $_POST['area'];
$crop = $_POST['crop'];

$sql = "UPDATE temp SET datee='$datee',name='$name',brgy='$brgy',area='$area',crop='$crop'  WHERE 1";
if ($conn->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('New record created successfully'); window.location.href='add.php';</script>";
}else {echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";}


$conn->close();
}


?>

<?php
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL

} // Closingif

 ?>

</body>
</html>

<?php
include('footer.php');
?>


<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
   $( "#crop" ).autocomplete({
      source: function( request, response ) {
        $.ajax({
          url: "crequest.php",
          dataType: "json",
          data: {
            q: request.term
          },
          success: function( data ) {
            response( data );
          }
        });
      },
      minLength: 1,
      select: function( event, ui ) {
            // Do something on select event
        console.log(ui.item); // ui.item is  responded json from server
      },
      open: function() {
                 // Do something on open event.
      },
      close: function() {
               // Do something on close event
      }
    });
  });
  </script>
