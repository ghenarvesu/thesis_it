<!DOCTYPE html>
<html lang="en">


<form method="post" action="#"  enctype="multipart/form-data">
  <table class="table1">
    <tr>
      <td><label style="color:#3a87ad; font-size:18px;">FirstName</label></td>
      <td width="30"></td>
      <td><input type="text" name="first_name" placeholder="FirstName" required /></td>
    </tr>

    <tr>
      <td><label style="color:#3a87ad; font-size:18px;">Select your Image</label></td>
      <td width="30"></td>
      <td><input type="file" name="image"></td>
    </tr>
  </table>
</div>
<div class="modal-footer">
  <button type="submit" name="Submit" class="btn btn-primary">Upload</button>
</div>
</form>
  <?php

  $conn = new PDO('mysql:host=localhost; dbname=db_ccasd','root', '');

  if (isset($_POST['Submit'])) {

  move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);
  $location=$_FILES["image"]["name"];
  $fname=$_POST['first_name'];

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO tbl_image (first_name, image_location)
  VALUES ('$fname', '$location')";

  $conn->exec($sql);
  echo "<script>alert('Successfully Added!!!'); window.location='index.php'</script>";
  // }
  }
  // }
  ?>


</html>
