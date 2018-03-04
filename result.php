
<?php
include('mainnav.php');
 ?>

<link rel="stylesheet" href="assets/processing/foundation.min.css">
<link rel="stylesheet" href="assets/processing/img.min.css">
<link rel="stylesheet" href="assets/css/form-basic.css">

<script type="text/javascript" src="script/jquery-1.8.2.min.js"></script>

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

    <form class="form-basic"  method="post" enctype="multipart/form-data">
      <table align="center">
        <tr>
          <td>  <span>Sample No.</span></td>
          <td>  <input type="text" name="samp_no" placeholder="Sample No." readonly value='<?php echo  $sampno; ?>'></td>
        <tr>
        <tr>
        <td> <label for="middle-label" class="text-right middle smalltext">Level:</label></td>
        <td><input type="text" id="level"  name="nitro" placeholder="Level" readonly value='<?php echo  $level; ?>'/></td>
        </tr>
        <tr>
          <td> <label for="middle-label" class="text-right middle smalltext">Color code:</label></td>
          <td><input type="text" name="pixcolor" style="height:40px;" placeholder="Color Hex Value" value='<?php echo  $pixcolor; ?>' readonly/></td>
        </tr>
        <tr>
          <td colspan="2"><input name="Next" type="Submit" value="Next" /></td>
        </table>
    </form>

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



    $sql = "INSERT INTO tblresults (res_n,res_n_val) VALUES ('".$_POST["nitro"]."','".$_POST["pixcolor"]."') WHERE sample='".$sampno."'";

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

</div>

<script src="assets/processing/jquery.min.js.download"></script>
<script src="assets/processing/img.min.js.download"></script>
<script src="assets/processing/foundation.min.js.download"></script>
<script>
  $(document).foundation();
</script>

<?php
include('footer.php');
?>
