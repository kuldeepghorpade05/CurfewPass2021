<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {


$fname=$_POST['fullname'];
$address=$_POST['address'];
$cnum=$_POST['cnumber'];
$email=$_POST['email'];
$side=$_POST['side'];
$itype=$_POST['identitytype'];
$icnum=$_POST['icnum'];
$floc=$_POST['floc'];
$tloc=$_POST['tloc'];
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];
$passnum=mt_rand(100000000, 999999999);

$sql="insert into tblmarriagepass(PassNumber,FullName,Address,ContactNumber,Email,Side,IdentityType,IdentityCardno,FromLocation,ToLocation,FromDate,ToDate)
values('$passnum','$fname','$address','$cnum','$email','$side','$itype','$icnum','$floc','$tloc','$fdate','$tdate')";
 $query=mysqli_query($con,$sql);
	if($query)
	{
    echo '<script>alert("Pass detail has been added.")</script>';
	echo "<script>window.location.href ='add-marriage-pass.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
  

}
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Curfew Pass Management System | Add Marriage Pass</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />



</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
      <?php include_once('includes/header.php');?>
        <!-- end navbar top -->

        <!-- navbar side -->
        <?php include_once('includes/sidebar.php');?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Generate Marriage Attending Pass</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" enctype="multipart/form-data"> 
                                    
    <div class="form-group"> <label for="exampleInputEmail1">Full Name</label> <input type="text" name="fullname" value="" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Full Address</label> <input type="text" name="address" value="" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Contact Number</label> <input type="text" name="cnumber" value="" class="form-control" required='true' maxlength="10" pattern="[0-9]+"> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Email Address</label> <input type="email" name="email" value="" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Which Side you From?</label><select type="text" name="side" value="" class="form-control" required='true'>
<option value="">-- Choose Your Side -- </option>
<option value="Bride Side">Bride Side</option>
<option value="Groom Side">Groom Side</option>
     </select></div>
	<div class="form-group"> <label for="exampleInputEmail1">Identity Type</label><select type="text" name="identitytype" value="" class="form-control" required='true'>
<option value="">-- Choose Identity Type -- </option>
<option value="Voter Card">Voter Card</option>
<option value="PAN Card">PAN Card</option>
<option value="Adhar Card">Adhar Card</option>
<option value="Student Card">Student Card</option>
<option value="Driving License">Driving License</option>
<option value="Passport">Passport</option>
<option value="Any Official Card">Any Official Card</option>
<option value="Any Other Govt Issued Doc">Any Other Govt Issued Doc</option>
     </select></div>
    <div class="form-group"> <label for="exampleInputEmail1">Identity Card No.</label> <input type="text" name="icnum" value="" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">From Location</label> <input type="text" name="floc" value="" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">To Location</label> <input type="text" name="tloc" value="" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">From Date</label> <input type="date" name="fromdate" value="" class="form-control" required='true'> </div>
	<div class="form-group"> <label for="exampleInputEmail1">To Date</label> <input type="date" name="todate" value="" class="form-control" required='true'> </div>

     <p style="padding-left: 450px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Add</button></p> </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
<?php }  ?>