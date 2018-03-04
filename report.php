<?php
session_start();
include('mainnav.php');
if(isset($_SESSION['login_user']) == null) {
  header("location: login.php");
}
 ?>

  <link rel="stylesheet" href="report.css" type="text/css">

<div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                <br><br>  <br>
                Republic of the Philippines<br>
                Province of Laguna<br>
                CITY OF CALAMBA</br>

                </h3>


            </div>
        </div>
    </div>


<section class="section-table cid-qx39np6mRN" id="table1-b" data-rv-view="146">
  <div class="container container-table">
  <div class="tab">

  <button class="tablinks" onclick="openCity(event, 'summary')" id="defaultOpen">Summary</button>
  <button class="tablinks" onclick="openCity(event, 'breakdown')">Breakdown</button>
  <button class="tablinks" onclick="openCity(event, 'prog')">Crop Development</button>
</div>

<div id="summary" class="tabcontent">

      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
		Summary
      </h2>
  <?php
include('sum.php');
 ?>

</div>

<div id="breakdown" class="tabcontent">
 <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
		Breakdown
</h2>
  <?php
include('breakdown.php');
 ?>
</div>

<div id="prog" class="tabcontent">
     <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
		Crop Development
      </h2>
  <?php
include('CD.php');
 ?>
</div>
      </div>
    </div>
</section>
<script>
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>

<?php
include('footer.php');
 ?>
