<?php
include('mainnav.php');
 ?>
<div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>Farmers of Bucal
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>

            </div>
        </div>
    </div>
</section>






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

$sql = "SELECT dateee, name, area, crop FROM tblfarmer WHERE brgy = 'Bucal'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<section class="section-table cid-qx39np6mRN" id="table1-b" data-rv-view="146">
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
              </thead>';    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td >" . $row["dateee"]. "</td><td>" . $row["name"]. "</td><td> " . $row["area"]. "</td><td> " . $row["crop"]. "</td></tr>";
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


<?php
include('footer.php');
 ?>
