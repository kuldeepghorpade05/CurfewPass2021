<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cpmsaid']==0)) {
  header('location:logout.php');
  } else{
    
  ?>
<!DOCTYPE html>
<html>

<head>
    
    <title>Curfew Pass Admin | Dashboard</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

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
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--end page header -->
            </div>

            <div class="row">
                <!--quick info section -->
                <div class="col-lg-4">
                     
                    <div class="alert alert-danger text-center">
                        <?php 
$sql ="SELECT ID from tblcategory ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalcat=$query->rowCount();
?><div class="panel-body green">
                        <i class="fa fa-pencil-square-o fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;<h4><a href="manage-category.php">Total Purpose Category = </a> <b><?php echo htmlentities($totalcat);?> </b></h4>
</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    
                    <div class="alert alert-danger text-center">
                        <?php 
$sql ="SELECT ID from tblpass";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalpass=$query->rowCount();
?><div class="panel-body green">
                        <i class="fa  fa-pencil-square-o fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4><a href="manage-pass.php"> Total General Purpose Pass = </a><b><?php echo htmlentities($totalpass);?></b></h4>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="alert alert-danger text-center">
 <?php 
//todays Pass Generated
 

$sql ="SELECT ID from tblmarriagepass ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$today_pass=$query->rowCount();
?>
 <div class="panel-body green">
                        <i class="fa fa-pencil-square-o fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4><a href="manage-marriage-pass.php">Total Marriage Pass =</a><b><?php echo htmlentities($today_pass);?></b> </h4>
</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="alert alert-danger text-center">
                       <?php 
//Yesterday Pass Generated
 

$sql ="SELECT ID from tblhospital";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$yes_pass=$query->rowCount();
?><div class="panel-body green">
                        <i class="fa  fa-pencil-square-o fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4><a href="Manage-hospital.php">Total Hospital = </a><b><?php echo htmlentities($yes_pass);?></b> </h4>
                    </div>
                    </div>
                </div>
                  <div class="col-lg-4">
                    <div class="alert alert-danger text-center">
                       <?php 
//7 days Pass Generated
 

$sql ="SELECT ID from tblhospitalpass";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$seven_pass=$query->rowCount();
?><div class="panel-body green">
                        <i class="fa  fa-pencil-square-o fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4><a href="manage-hospital-pass.php">Total Hospital Visit Pass = </a><b><?php echo htmlentities($seven_pass);?></b> </h4>
</div>
                    </div>
                </div>
				
				 <div class="col-lg-4">
                    <div class="alert alert-danger text-center">
                       <?php 
//7 days Pass Generated
 

$sql ="SELECT ID from tblEmployeepass";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$seven_pass=$query->rowCount();
?><div class="panel-body green">
                        <i class="fa  fa-pencil-square-o fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4><a href="manage-employee-pass.php">Total Employee Movement Pass = </a><b><?php echo htmlentities($seven_pass);?></b> </h4>
</div>
                    </div>
                </div>
                <!--end quick info section -->
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