
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
$sample = isset($_POST['sample']) ? $_POST['sample']: "";
?>

<form class="form-basic"  method="post" >

<div class="form-row">
  <label>
    <span>Sample No.</span>
    <input type="text" name="sampno" value='<?php echo  $sample; ?>'>
  </label>
</div>

<input name="next" type="Submit"  value="next" />

</form>

<?php

    if(isset($_POST["next"])){

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



    $sql = "INSERT INTO temp (id,sample) VALUES ('1','".$_POST["sampno"]."')";

    if ($conn->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('New record created successfully'); window.location.href='nitrogen.php';
    </script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }

    $conn->close();
    }
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
