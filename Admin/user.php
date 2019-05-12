<?php ob_start(); ?>
<?php include "includes/header.php"; ?>
<?php include "includes/function.php";?>
	  
        
<?php include "includes/sidebar.php";?>
        
        

   
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="user.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="content-top">
			<?php
            
            $num_student=getval("student");
            $num_company=getval("company");
            $num_admin=getval("admin");
            
            
            ?>
			
			<div class="col-md-4 ">
				<div  class="content-top-1">
				<a  href="details.php?role=student&value=null">
				<div class=" col-md-6 top-content">
					<h5>Candidate</h5>
					<label><?php echo $num_student ;?></label>
				</div>
				 <div class="clearfix"> </div>
				
				</a>
				</div>
				<div class="content-top-1">
				<a href="details.php?role=company&value=null">
				<div class="col-md-6 top-content">
					<h5>Company</h5>
					<label><?php echo $num_company ;?></label>
				</div>
				
				 <div class="clearfix"> </div>
                    </a>
				</div>
				<div class="content-top-1">
				<a href="details.php?role=admin&value=null">
				
				<div class="col-md-6 top-content">
					<h5>Admin</h5>
					<label><?php echo $num_admin ;?></label>
				</div>
				 <div class="clearfix"> </div>
                    </a>
				</div>
			</div>
			<div class="col-md-8 content-top-2">
				<!---start-chart---->
				<!----->
		</div>
		<div class="clearfix"> </div>
		</div>
		<!---->
	
  


	 
		<!---->
<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	    </div>
		</div>
		<div class="clearfix"> </div>
       </div>
     </div>
     </nav>
    </div>
<!---->
<!--scrolling js-->
<?php include "includes/footer.php"; ?>
