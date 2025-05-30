<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['did']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['did'])){
		$id=$_SESSION['did'];
		$sql = "SELECT * FROM docter WHERE did='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | My Profile"; ?>
<?php require 'head.php';?>
<style>
    body{
    background: url(jastimage/bb18.jpg) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 650px;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
<body>
	<?php require 'header.php'; ?>

	<div class="container cont">

		<?php require 'message.php'; ?>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-4 col-sm-6 mb-5">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/hospital.png" alt="profile" class="rounded-circle" width="70" height="60">
					</div>
					<div class="card-body">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Docter Name</label>
						<input type="text" name="dname" value="<?php echo $row['dname']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Docter Email</label>
						<input type="email" name="demail" value="<?php echo $row['demail']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Docter Password</label>
						<input type="text" name="dpassword" value="<?php echo $row['dpassword']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Docter Phone Number</label>
						<input type="text" name="dphone" value="<?php echo $row['dphone']; ?>" class="form-control mb-3">
						<!-- <label class="text-muted font-weight-bold">Hospital City</label>
						<input type="text" name="dcity" value="<?php echo $row['dcity']; ?>" class="form-control mb-3"> -->
						<input type="submit" name="update" class="btn btn-block btn-primary" value="Update">
					   </form>
					</div>
					<a href="docterpage.html" class="text-center">Cancel</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>