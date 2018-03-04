<?php
include_once 'server.php';
if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM systemcred WHERE id=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$fname = $_POST['fname'];
	$mname= $_POST['mname'];
	$lname = $_POST['lname'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $position = $_POST['position'];
	// variables for input data

	// sql query for update data into database
	$sql_query = "UPDATE systemcred SET fname='$fname',mname='$mname',lname='$lname',username='$username',password='$password',password='$password' WHERE id=".$_GET['edit_id'];
	// sql query for update data into database

	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='acc.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while updating data');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: acc.php");
}
?>
<link rel="stylesheet" href="assets/css/form-basic.css">

<div class="container">
				<div class="media-container-row">
						<div class="title col-12 col-md-8">
								<h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>Register
								</h2>
								<h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>

						</div>
				</div>
		</div>

	 <div class="main-content">
<form class="form-basic" method="post" action="#">
	<center>
<table align="center">
<tr>
	<td><input type="text" name="fname" placeholder="First Name"></td>
</tr>
<tr>
	<td> <input type="text" name="mname" placeholder="Middle Name"></td>
</tr>
<tr>
	<td> <input type="text" name="lname" placeholder="Last name"></td>
</tr>
<tr>
	<td><input type="text" name="username" placeholder="Username"></td>
</tr>
<tr>
	<td><input type="password" name="password" placeholder="Password"></td>
</tr>

<tr>
	<td>   <select name="position">
						<option value="Choose Position">Choose Member Type</option>
						<option value="admin">Admin</option>
						<option value="epmloyee">Employee</option>
					</select>
</td>
<tr>
	<td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
</tr>
	</center>
    </table>
    </form>
</div>
</center>
</body>
</html>
