<?php
include('mainnav.php');
$brgy123 = (isset($_GET["brgy"]) && $_GET['brgy'] != "") ? $_GET['brgy'] : "";

 ?>
<div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>  <?php
                  echo $brgy123;
                  ?>

                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>

            </div>
        </div>
    </div>
</section>
<div class="container container-table">
<div class="table-wrapper">


      <div class="container scroll">
        <table class="table isSearch" cellspacing="0">
          <thead>
            <tr class="table-heads ">
        <th class="head-item mbr-fonts-style display-7">Date</th>
        <th class="head-item mbr-fonts-style display-7">Name</th>
        <th class="head-item mbr-fonts-style display-7">Area(hectares)</th>
        <th class="head-item mbr-fonts-style display-7">Date</th></tr>
        </tr>
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

$sql = "SELECT * FROM tblresults WHERE brgy = '$brgy123'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td >" . $row["datee"]. "</td><td>" . $row["name"]. "</td><td> " . $row["area"]. "</td><td> " . $row["crop"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
          </table>
        </div>

        </div>
      </div>
    </div>
</section>

</div>
<?php
include('footer.php');
 ?>
