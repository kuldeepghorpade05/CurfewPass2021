<?php

error_reporting(0);

include('includes/dbconnection.php');
?>
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <?php
$aid=$_SESSION['cpmsaid'];
$sql="SELECT AdminName from  tbladmin where ID=:aid";
$query = $dbh -> prepare($sql);
$query->bindParam(':aid',$aid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                <div><strong><?php  echo $row->AdminName;?></strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                            <?php $cnt=$cnt+1;}} ?>
                        </div>
                        
                        <!--end user image section-->
                    </li>

                    <li class="selected">
                        <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> General Purpose Pass<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" id="sub-side-menu">
                            <li>
                                <a href="add-category.php">Add Category</a>
                            </li>
                            <li>
                                <a href="manage-category.php">Manage Category</a>
                            </li>
							
							 <li>
                                <a href="add-pass.php">Generate Pass</a>
                            </li>
                            <li>
                                <a href="manage-pass.php">Manage Pass</a>
                            </li>
						<li>
                        <a href="search-pass.php"><i class="fa fa-search"></i>  Search<span class="fa arrow"></span></a>
                        
                        </li>
                        <!--<li>
                        <a href="pass-bwdates-report.php"><i class="fa fa-folder"></i>  Report of Pass<span class="fa arrow"></span></a>
                        
                        </li>-->
							
							
                        </ul>
                        <!-- second-level-items -->
                    </li>
					<li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Pass For Hospital Visit<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" id="sub-side-menu">
                            <li>
                                <a href="add-hospital.php">Add Hospital</a>
                            </li>
                            <li>
                                <a href="manage-hospital.php">Manage Hospital</a>
                            </li>
							
							 <li>
                                <a href="add-hospital-pass.php">Generate Pass</a>
                            </li>
                            <li>
                                <a href="manage-hospital-pass.php">Manage Pass</a>
                            </li>
						<li>
                        <a href="search-hospital-pass.php"><i class="fa fa-search"></i>  Search<span class="fa arrow"></span></a>
                        
                        </li>
                        <!--<li>
                        <a href="pass-bwdates-report.php"><i class="fa fa-folder"></i>  Report of Pass<span class="fa arrow"></span></a>
                        
                        </li>-->
							
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Pass For Marriage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" id="sub-side-menu">
                            <li>
                                <a href="add-marriage-pass.php">generate Pass</a>
                            </li>
                            <li>
                                <a href="manage-marriage-pass.php">Manage Pass</a>
                            </li>
                    <li>
                        <a href="search-marriage-pass.php"><i class="fa fa-search"></i>  Search<span class="fa arrow"></span></a>
                        
                        </li>
                        <!--<li>
                        <a href="pass-bwdates-report.php"><i class="fa fa-folder"></i>  Report of Pass<span class="fa arrow"></span></a>
                        
                        </li>	-->						
                        </ul>
                        <!-- second-level-items -->
                    </li>
					<li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Pass for Employees<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" id="sub-side-menu">
                            <li>
                                <a href="add-employee-pass.php">generate Pass</a>
                            </li>
                            <li>
                                <a href="manage-employee-pass.php">Manage Pass</a>
                            </li>			

                    <li>
                        <a href="search-employee-pass.php"><i class="fa fa-search"></i>  Search<span class="fa arrow"></span></a>
                        
                        </li>
                        <!--<li>
                        <a href="pass-bwdates-report.php"><i class="fa fa-folder"></i>  Report of Pass<span class="fa arrow"></span></a>
                        
                        </li>	-->						
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    
                        <!-- second-level-items -->



                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>