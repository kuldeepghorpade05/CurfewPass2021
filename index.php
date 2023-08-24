<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Curfew e-Pass Portal - Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!--================ Header Menu Area start =================-->
 <?php include_once('includes/header.php');?>
  <!--================Header Menu Area =================-->


  <!--================ Banner Section start =================-->
  <section class="hero-banner text-center">
    <div class="container">
      <!--<h1>Curfew e-Pass Portal</h1>-->
 
    </div>
  </section>
  <!--================ Banner Section end =================-->


  <!--================ Domain Search section start =================-->
  <section class="bg-gray domain-search">
    <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col-md-12 col-lg-3 text-center  mb-3 mb-md-0">
          <h3>Search General Pass!</h3>

          <form class="form flex-nowrap form-domainSearch" method="post">
            <div class="form-group">
              <label for="staticDomainSearch" class="sr-only">Search</label>
              <input id="searchdata" type="text" name="searchdata" required="true" class="form-control" placeholder="Enter Your Pass ID"> 
            </div>
            <button type="submit" class="button rounded-0" name="search1" id="submit">Search</button>
          </form>
           <?php
if(isset($_POST['search1']))
{ 
$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>

     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <?php
$sql="SELECT * from tblpass where PassNumber like '%$sdata%'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
      <tr align="center"><td colspan="4" style="font-size:20px;color:Red">General  Purpose Pass</td>
<td colspan="2" style="font-size:20px;color:blue">
 Pass ID: <?php  echo ($row->PassNumber);?></td></tr>

  <tr>
    <th scope>Full Name</th>
    <td><?php  echo ($row->FullName);?></td>
    <th scope>Mobile Number</th>
    <td><?php  echo ($row->ContactNumber);?></td>
    <th scope>Email</th>
    <td><?php  echo ($row->Email);?></td>
  </tr>
<tr>
    <th scope>Identity Type</th>
    <td><?php  echo ($row->IdentityType);?></td>
    <th scope>Identity Card Number</th>
    <td><?php  echo ($row->IdentityCardno);?></td>
    <th scope>Purpose</th>
    <td><?php  echo ($row->Category);?></td>
  </tr>
<tr>
    <th scope>From Date</th>
    <td><?php  echo ($row->FromDate);?></td>
    <th scope>To Date</th>
    <td><?php  echo ($row->ToDate);?></td>
    <th scope>Pass Creation Date</th>
    <td><?php  echo ($row->PasscreationDate);?></td>
  </tr>
                                    
    <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?> 
     </table>

        </div>
		<div class="col-md-12 col-lg-3 pl-1 text-center  ">
		<h3>Search Hospital Pass!</h3>

          <form class="form flex-nowrap form-domainSearch" method="post">
            <div class="form-group">
              <label for="staticDomainSearch" class="sr-only">Search</label>
              <input id="searchdata" type="text" name="searchdata" required="true" class="form-control" placeholder="Enter Your Pass ID"> 
            </div>
            <button type="submit" class="button rounded-0" name="search2" id="submit">Search</button>
          </form>
           <?php
if(isset($_POST['search2']))
{ 
$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>

     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <?php
$sql="SELECT * from tblhospitalpass where PassNumber like '%$sdata%'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
      <tr align="center"><td colspan="2" style="font-size:20px;color:Red">Hospital Visiting Pass</td>
<td colspan="2" style="font-size:20px;color:blue">
 Pass ID: <?php  echo ($row->PassNumber);?></td></tr>

  <tr>
    <th scope>Full Name</th>
    <td><?php  echo ($row->FullName);?></td>	
    <th scope>Pass Creation Date</th>
    <td><?php  echo ($row->PasscreationDate);?></td>
  </tr>
  <tr>
    <th scope>Mobile Number</th>
    <td><?php  echo ($row->ContactNumber);?></td>
    <th scope>Email</th>
    <td><?php  echo ($row->Email);?></td>
  </tr>
<tr>
    <th scope>Identity Type</th>
    <td><?php  echo ($row->IdentityType);?></td>
    <th scope>Identity Card Number</th>
    <td><?php  echo ($row->IdentityCardno);?></td>
  </tr>
  <tr>
    <th scope>Hospital Name</th>
    <td><?php  echo ($row->HospitalName);?></td>
    <th scope>Reason</th>
    <td><?php  echo ($row->Reason);?></td>
  </tr>
<tr>
    <th scope>From Date</th>
    <td><?php  echo ($row->FromDate);?></td>
    <th scope>To Date</th>
    <td><?php  echo ($row->ToDate);?></td>
  </tr>
                                    
    <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?> 
     </table>
		</div>       

			<div class="col-md-12 col-lg-3 pl-1 text-center ">
			<h3>Search Marriage Pass!</h3>

          <form class="form flex-nowrap form-domainSearch" method="post">
            <div class="form-group">
              <label for="staticDomainSearch" class="sr-only">Search</label>
              <input id="searchdata" type="text" name="searchdata" required="true" class="form-control" placeholder="Enter Your Pass ID"> 
            </div>
            <button type="submit" class="button rounded-0" name="search3" id="submit">Search</button>
          </form>
           <?php
if(isset($_POST['search3']))
{ 
$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>

     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <?php
$sql="SELECT * from tblmarriagepass where PassNumber like '%$sdata%'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
      <tr align="center"> <td colspan="2" style="font-size:20px;color:Red">Marriage Attending Pass</td>
<td colspan="2" style="font-size:20px;color:blue">
 Pass ID: <?php  echo ($row->PassNumber);?></td></tr>

  <tr>
    <th>Full Name</th>
    <td><?php  echo ($row->FullName);?></td>
    <th>Full Address</th>
    <td><?php  echo ($row->Address);?></td>
  </tr>
    <tr>
    <th>Mobile Number</th>
    <td><?php  echo ($row->ContactNumber);?></td>
    <th>Email</th>
    <td><?php  echo ($row->Email);?></td>
  </tr>
<tr>
    <th>Identity Type</th>
    <td><?php  echo ($row->IdentityType);?></td>
    <th>Identity Card Number</th>
    <td><?php  echo ($row->IdentityCardno);?></td>
  </tr>
  <tr>
    <th>From Location</th>
    <td><?php  echo ($row->FromLocation);?></td>
    <th>To Location</th>
    <td><?php  echo ($row->ToLocation);?></td>
  </tr>
<tr>
    <th>From Date</th>
    <td><?php  echo ($row->FromDate);?></td>
    <th>To Date</th>
    <td><?php  echo ($row->ToDate);?></td>
  </tr>
  
  <tr>
    <th>Side</th>
    <td><?php  echo ($row->Side);?></td>
    <th>Pass Creation Date</th>
    <td><?php  echo ($row->PasscreationDate);?></td>
  </tr>
                                    
    <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?> 
     </table>
		</div>  
		
		<div class="col-md-12 col-lg-3 pl-1 text-center ">
		<h3>Search Employee Pass!</h3>

          <form class="form flex-nowrap form-domainSearch" method="post">
            <div class="form-group">
              <label for="staticDomainSearch" class="sr-only">Search</label>
              <input id="searchdata" type="text" name="searchdata" required="true" class="form-control" placeholder="Enter Your Pass ID"> 
            </div>
            <button type="submit" class="button rounded-0" name="search4" id="submit">Search</button>
          </form>
           <?php
if(isset($_POST['search4']))
{ 
$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>

     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <?php
$sql="SELECT * from tblemployeepass where PassNumber like '%$sdata%'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
      <tr align="center"><td colspan="2" style="font-size:20px;color:Red">Employee Movement Pass</td>
<td colspan="6" style="font-size:20px;color:blue">
 Pass ID: <?php  echo ($row->PassNumber);?></td></tr>

  <tr>
    <th scope>Full Name</th>
    <td><?php  echo ($row->FullName);?></td>
    <th scope>Mobile Number</th>
    <td><?php  echo ($row->ContactNumber);?></td>
    <th scope>Email</th>
    <td><?php  echo ($row->Email);?></td>
  </tr>
<tr>
    <th scope>Identity Type</th>
    <td><?php  echo ($row->IdentityType);?></td>
    <th scope>Identity Card Number</th>
    <td><?php  echo ($row->IdentityCardno);?></td>
    <th scope>Category</th>
    <td><?php  echo ($row->Category);?></td>
  </tr>
<tr>
    <th scope>From Date</th>
    <td><?php  echo ($row->FromDate);?></td>
    <th scope>To Date</th>
    <td><?php  echo ($row->ToDate);?></td>
    <th scope>Pass Creation Date</th>
    <td><?php  echo ($row->PasscreationDate);?></td>
  </tr>
                                    
    <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?> 
     </table>
		</div>  
		
      </div>
    </div>
  </section>
  <!--================ Domain Search section end =================-->
   
   




  <!-- ================ start footer Area ================= -->
   <?php include_once('includes/footer.php');?>
  <!-- ================ End footer Area ================= -->




  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>