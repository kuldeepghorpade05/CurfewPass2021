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

$eid=$_GET['editid'];
$sql="update tblmarriagepass set FullName=:fname,Address=:address,ContactNumber=:cnum,Email=:email,Side=:side,IdentityType=:itype,IdentityCardno=:icnum,FromLocation=:floc,ToLocation=:tloc,FromDate=:fdate,ToDate=:tdate where ID=:eid";
$query=$dbh->prepare($sql);

$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':cnum',$cnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':side',$side,PDO::PARAM_STR);
$query->bindParam(':itype',$itype,PDO::PARAM_STR);
$query->bindParam(':icnum',$icnum,PDO::PARAM_STR);
$query->bindParam(':floc',$floc,PDO::PARAM_STR);
$query->bindParam(':tloc',$tloc,PDO::PARAM_STR);
$query->bindParam(':fdate',$fdate,PDO::PARAM_STR);
$query->bindParam(':tdate',$tdate,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
 $query->execute();

  
         echo '<script>alert("Pass Detail has been updated")</script>';
 

  

}
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Curfew Pass Management System | Edit Marriage Pass</title>
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
                    <h1 class="page-header">Edit Marriage Pass</h1>
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
                                    <?php
$eid=$_GET['editid'];
$sql="SELECT * from  tblmarriagepass where ID=$eid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?> 
<table border="1" class="table" > 
<tr align="center">
<td colspan="2" style="font-size:20px;color:Red">Marriage Attending Pass</td>
<td colspan="3" style="font-size:20px;color:blue"> Pass ID: <?php  echo ($row->PassNumber);?></td>
</tr> 
</table>
    <div class="form-group"> <label for="exampleInputEmail1">Full Name</label> <input type="text" name="fullname" value="<?php  echo $row->FullName;?>" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Full Address</label> <input type="text" name="address" value="<?php  echo $row->Address;?>" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Contact Number</label> <input type="text" name="cnumber" value="<?php  echo $row->ContactNumber;?>" class="form-control" required='true' maxlength="10" pattern="[0-9]+"> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Email Address</label> <input type="email" name="email" value="<?php  echo $row->Email;?>" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Which Side you From?</label><select type="text" name="side" value="" class="form-control" required='true'>
<option value="<?php  echo $row->Side;?>"><?php  echo $row->Side;?></option>
<option value="Bride Side">Bride Side</option>
<option value="Groom Side">Groom Side</option>
     </select></div>
	<div class="form-group"> <label for="exampleInputEmail1">Identity Type</label><select type="text" name="identitytype" value="" class="form-control" required='true'>
<option value="<?php  echo $row->IdentityType;?>"><?php  echo $row->IdentityType;?></option>
<option value="Voter Card">Voter Card</option>
<option value="PAN Card">PAN Card</option>
<option value="Adhar Card">Adhar Card</option>
<option value="Student Card">Student Card</option>
<option value="Driving License">Driving License</option>
<option value="Passport">Passport</option>
<option value="Any Official Card">Any Official Card</option>
<option value="Any Other Govt Issued Doc">Any Other Govt Issued Doc</option>
     </select></div>
<div class="form-group"> <label for="exampleInputEmail1">Identity Card No.</label> <input type="text" name="icnum" value="<?php  echo $row->IdentityCardno;?>" class="form-control" required='true'> </div>
<div class="form-group"> <label for="exampleInputEmail1">From Location</label> <input type="text" name="floc" value="<?php  echo $row->FromLocation;?>" class="form-control" required='true'> </div>
<div class="form-group"> <label for="exampleInputEmail1">To Location</label> <input type="text" name="tloc" value="<?php  echo $row->ToLocation;?>" class="form-control" required='true'> </div>
<div class="form-group"> <label for="exampleInputEmail1">From Date</label> <input type="date" name="fromdate" value="<?php  echo $row->FromDate;?>" class="form-control" required='true'> </div>
<div class="form-group"> <label for="exampleInputEmail1">To Date</label> <input type="date" name="todate" value="<?php  echo $row->ToDate;?>" class="form-control" required='true'> </div>
<div class="form-group"> <label for="exampleInputEmail1">Pass Creation Date</label> <input type="text" value="<?php  echo $row->PasscreationDate;?>" class="form-control" readonly='true'> </div>
<?php $cnt=$cnt+1;}} ?> 
     <p style="padding-left: 450px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Update</button></p> </form>
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