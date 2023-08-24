<footer class="footer-area section-gap">
        <div class="container">
             <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
  
          <div id="page-wrapper">
           

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
?><div class="panel-body blue">
                        <i class="fa fa-calendar fa-6x"></i>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo htmlentities($totalcat);?> </b>Total Category</a> 
</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    
                    <div class="alert alert-success text-center">
                        <?php 
$sql ="SELECT ID from tblpass";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalpass=$query->rowCount();
?><div class="panel-body yellow">
                        <i class="fa  fa-beer fa-6x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo htmlentities($totalpass);?></b> Total Pass</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="alert alert-info text-center">
 <?php 
//todays Pass Generated
 

$sql ="SELECT ID from tblpass where date(PasscreationDate)=CURDATE()";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$today_pass=$query->rowCount();
?>
 <div class="panel-body red">
                        <i class="fa fa-pencil-square-o fa-6x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo htmlentities($today_pass);?></b> <a href="todays-pass.php">Pass Created Today</a>
</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="alert alert-warning text-center">
                       <?php 
//Yesterday Pass Generated
 

$sql ="SELECT ID from tblpass where date(PasscreationDate)=CURDATE()-1";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$yes_pass=$query->rowCount();
?><div class="panel-body yellow">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo htmlentities($yes_pass);?></b>Pass Created Yesterday </a>
                    </div>
                    </div>
                </div>
                  <div class="col-lg-4">
                    <div class="alert alert-info text-center">
                       <?php 
//7 days Pass Generated
 

$sql ="SELECT ID from tblpass where date(PasscreationDate)>=(DATE(NOW()) - INTERVAL 7 DAY)";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$seven_pass=$query->rowCount();
?><div class="panel-body yellow">
                        <i class="fa  fa-pencil fa-6x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo htmlentities($seven_pass);?></b>Pass Created in Seven Days</a>
</div>
                    </div>
                </div>
                <!--end quick info section -->
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
	


<div style=" display:flex; justify-content: center;padding:100px " class="container ">

<div class="row>
<div class="col"> 

<div class=" Level site-stats">
<div class="site-stats-count">
		<ul style="display:flex">
		<li style="flex-direction:column" class="bg-blue">
		
		</li>
		<li class="bg-green">
		
		</li>								
		
		
		
		</ul>
		
	</div>
	
</div>
 </div>
 
 
 
<div class="col">





	

</div>


  </div>

 </div>

<section class="cstat">
<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12 col-xl-12 col-lg-6 " style="z-index:9;padding:2px 1px;">


</div>



<div class="col-md-6 col-sm-12 col-xs-12 col-xl-12 col-lg-6 " style="z-index:9;padding:2px 1px;">




<div class=" Level site-stats">




</div>
</section>

	

</div>	
	
	
<div style="padding:50px" class="container-fluid bg-white">
  <div class="row">
    <div class="col-sm">
    <h2 style="text-align:center">INDIA</h2>
	<div class="container">
  <div class="row">
    <div style="padding:5px; margin:2px; border-radius:20px" class="col-sm bg-warning">
     <img src="https://covid19.karnataka.gov.in/frontend/opt1/images/covid/icon-active.png" alt="Active Status">
		<strong class="text-white">545318</strong>
		<span class="text-white">Active Cases</span>
    </div>
    <div style="padding:5px; margin:2px; border-radius:20px" class="col-sm bg-info">
      <img src="https://covid19.karnataka.gov.in/frontend/opt1/images/covid/icon-inactive.png" alt="Inactive Status">
		<strong id="ind-recover">6184</strong>
		<span class="hidden-sm hidden-xs">Cured / Discharged </span>
		<span class="mob-show hidden-lg hidden-md">Cured/ </span>
		<span class="mob-show hidden-lg hidden-md">Discharged </span>
    </div>
    <div style="padding:5px; margin:2px; border-radius:20px" class="col-sm bg-danger">
      <li class="bg-red">
		<img src="https://covid19.karnataka.gov.in/frontend/opt1/images/covid/icon-death.png" alt="Death Status">
		<strong class="text-white">35747</strong>
		<span  class="text-white">Deaths</span>
		</li>
    </div>
	
	<div style="padding:5px; margin:2px; border-radius:20px" class="col-sm bg-success">
      
		<img src="https://covid19.karnataka.gov.in/frontend/opt1/images/covid/icon-active.png" alt="Inactive Status">
		<strong class="text-white">1</strong>
		<span  class="text-white">Migrated</span>
		
    </div>
  </div>
</div>
    </div>
    <div  class="col-sm ">
     <h2 style="text-align:center" >KARNATAKA</h2>
	 
	<div class="container">
  <div class="row">
    <div style="padding:5px; margin:2px; border-radius:20px" class="col-sm bg-warning">
     <img src="https://covid19.karnataka.gov.in/frontend/opt1/images/covid/icon-active.png" alt="Active Status">
		<strong class="text-white">545318</strong>
		<span class="text-white">Active Cases</span>
    </div>
    <div style="padding:5px; margin:2px; border-radius:20px" class="col-sm bg-info">
      <img src="https://covid19.karnataka.gov.in/frontend/opt1/images/covid/icon-inactive.png" alt="Inactive Status">
		<strong id="ind-recover">6184</strong>
		<span class="hidden-sm hidden-xs">Cured / Discharged </span>
		<span class="mob-show hidden-lg hidden-md">Cured/ </span>
		<span class="mob-show hidden-lg hidden-md">Discharged </span>
    </div>
    <div style="padding:5px; margin:2px; border-radius:20px" class="col-sm bg-danger">
      <li class="bg-red">
		<img src="https://covid19.karnataka.gov.in/frontend/opt1/images/covid/icon-death.png" alt="Death Status">
		<strong class="text-white">35747</strong>
		<span  class="text-white">Deaths</span>
		</li>
    </div>
	
	<div style="padding:5px; margin:2px; border-radius:20px" class="col-sm bg-success">
      
		<img src="https://covid19.karnataka.gov.in/frontend/opt1/images/covid/icon-active.png" alt="Inactive Status">
		<strong class="text-white">1</strong>
		<span  class="text-white">Migrated</span>
		
    </div>
  </div>
    </div>
    
  </div>
</div>
	
	
	
	
	
	
	
    <!-- end wrapper -->
            <div class="footer-bottom row align-items-center text-center text-lg-left">
                <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<center>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  by <a href="http://rcsinfo.in/" target="_blank">Intern Teams</a></center
</p>
            </div>
        </div>
    </footer>