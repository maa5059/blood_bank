<?php 
  require 'file/connection.php';
  session_start();
  if(!isset($_SESSION['rid']))
  {
  header('location:login.php');
  }
  else {
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Add blood samples"; ?>
<?php require 'head.php'; ?>
<style>
    * {
        margin:0;
        padding:0;
      }
    body{
    background: url(image/p2.png) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 100%;
     font-family: "Dosis", sans-serif;
        background-color: black;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
  .navbar{
        width:300px;
        height:100%;
        background-color:black;
        position:fixed;
        top:0;
        right:-300px;
        display:flex;
        justify-content: center;
        align-items: center;
        border-radius:20% 0 0 40%;
        transition: right 0.8s cubic-bezier(1, 0, 0, 1);
      }
      .change{
        right:0;
      }

      .hamburger-menu{
        width:35px;
        height:30px;  
        position:fixed;
        top:20px;
        right:50px;
        cursor:pointer;
        display:flex;
        flex-direction: column;
        justify-content: space-around;
      }

      .line{
        width:100%;
        height:3px;
        background-color:white;
        transition: all 0.8s;

      }

      .change .line-1{
        transform:rotateZ(-405deg) translate(-8px, 6px);
      }
      .change .line-2{
        opacity:0;
      }
       .change .line-3{
        transform:rotateZ(405deg) translate(-8px, -6px);
      }

      .nav-list{
        text-align:left;

      }

      .nav-item{
        list-style: none;
        margin:25px;
      }

      .nav-link{
        text-decoration: none;
        font-size: 22px;
        color: #eee;
        font-weight:500;
        letter-spacing: 1px;
        text-transform: uppercase;
        position:relative;
        padding:3px 0;
      }

      .nav-link::before,
      .nav-link::after{
        content: "";
        width:100%;
        height:2px;
        background-color:red;
        position:absolute;
        right:0;
        transform:scalex(0);
        transition:transform 0.5s;
      }
      .nav-link::after{
        bottom:0;
        transform-origin:right;
      }
      .nav-link::before{
        top:0;
        transform-origin:left;
      }
      .nav-link:hover::before,
      .nav-link:hover::after{
        transform: scalex(1);
      }
</style>
<body>
  <div class="container">
      <nav class="navbar">
        <div class="hamburger-menu">
          <div class="line line-1"></div>
          <div class="line line-2"></div>
          <div class="line line-3"></div>
        </div>

        <ul class="nav-list">
          <li class="nav-item">
            <a href="rprofile.php" class="nav-link">My Account</a>
          </li>
          <li class="nav-item">
            <a href="blooddinfo.php" class="nav-link">Blood info</a>
          </li>
           <li class="nav-item">
            <a href="abs.php" class="nav-link">Blood available</a>
          </li>
           <li class="nav-item">
            <a href="sentrequest.php" class="nav-link">Status of request</a>
          </li>
          
           <li class="nav-item">
            <a href="blooddonate.php" class="nav-link">Blood donation request</a>
          </li>
           <li class="nav-item">
            <a href="logout.php" class="nav-link">LogOut</a>
          </li>
        </ul>
     </nav>
    </div>
  <?php require 'header.php'; ?>

    <div class="container cont">

      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
          
         <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card">
            <div class="card-header title">Add blood group available in your known community</div>
        <div class="card-body">
        <form action="file/infoAddd.php" method="post">
          <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" title="click to see">Term & conditions. </a><br>
          <div class="collapse" id="collapseExample">
          If you or your Friends/Family have the mentioned(below) blood then only add Blood group(No spam).So,that the hospital can contact you with your given details if they are in need of you or your friends/family blood.You should have a blood sample tested by your doctor’s, nurse, or trained phlebotomist , at a pathology collection centre, clinic or hospital. Blood samples are most commonly taken from the inside of the elbow where the veins are usually closer to the surface.Make sure you have been eating healthy diet(No Smoking/Drinking)atleast for a week before you have to decided to donate Blood.By clicking tick mark you are promising that you are promising that you have read and accepted the above instructions and also willing to donate blood volunteerly.<br><br>
        </div>
          <input type="checkbox" name="condition" value="agree" required> Agree<br><br>
          <select class="form-control" name="bg" required="">
                
                <option>A-</option>
                <option>A+</option>
                <option>B-</option>
                <option>B+</option>
                <option>AB-</option>
                <option>AB+</option>
                <option>O-</option>
                <option>O+</option>
          </select><br>
          <input type="submit" name="add" value="Add" class="btn btn-primary btn-block"><br>
          <a href="Userpage.html" class="float-right" title="click here">Cancel</a>
        </form>
         </div>
       </div>
     </div>

<?php   if(isset($_SESSION['rid'])){
    $rid=$_SESSION['rid'];
    $sql = "SELECT * from blooddinfo where rid='$rid'";
    $result = mysqli_query($conn, $sql);
  }
  ?>
    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <table class="table table-striped table-responsive">
            <th colspan="4" class="title">User</th>
            <tr>
              <th>#</th>

              <th>User</th>
              <th>Action</th>
            </tr>
            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
            }
            ?>
            </div>
            <?php while($row = mysqli_fetch_array($result)) { ?>
            <tr>
              <td><?php echo ++$counter; ?></td>

              <td><?php echo $row['bg'];?></td>
              <td><a href="file/deleted.php?bdid=<?php echo $row['bdid'];?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php } ?>
          </table>
      </div>

   </div>
</div>
<?php require 'footer.php' ?>
<script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<?php } ?>