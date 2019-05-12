<?php ob_start();?>
<?php include "includes/header.php"; ?>
<?php include "includes/function.php";?>
	  
        
<?php include "includes/sidebar.php";?>
<?php 


if(isset($_POST['submit']))
{
    
    $connection=mysqli_connect("localhost","root","","onlinejob1");

    $name=$_POST['Name'];
    $sdate=$_POST['SDate'];
    $edate=$_POST['EDate'];
    $cat=$_POST['Cat'];
    
    
    $query="Insert into challange(c_name,c_startdate,c_enddate,c_category) values('{$name}','{$sdate}','{$edate}','{$cat}')";
    $res=mysqli_query($connection,$query);

    
    if(!$res)
    {
        die(" Query failed ".mysqli_error($connection));
    }
    else
    {
        
        
        $query="Select c_id From challange where c_name='{$name}' and c_startdate='{$sdate}' and c_enddate='{$edate}' and c_category='{$cat}'";
        $res=mysqli_query($connection,$query);

        $select_id=mysqli_fetch_array($res);
        $cid=$select_id['c_id'];
        
        header("Location: question.php?cid={$cid}");

    
    }
    
    
    
}


?>


        
        

   
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="user.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Challanges</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="content-top">
		
			<br>
			
			<div class="col-md-4">
            
            <form action="addchallenge.php" method="post">
                
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" autocomplete="off" class="form-control" name="Name" required>
                </div>
                 <div class="form-group">
                    <label for="date">Start-Date</label>
                    <input type="date" class="form-control" name="SDate" required>
                </div>
                
                 <div class="form-group">
                    <label for="date">End-Date</label>
                    <input type="date" class="form-control" name="EDate" required>
                </div>
                <div class="form-group">
                    <label for="Cat">Category</label>
                    <input type="text" autocomplete="off" class="form-control" name="Cat" required>
                </div>
                
               
            <input type="submit" class="btn btn-primary" name="submit"> 
                
            </form>
            
            
            
            
            </div>
			
			
			<div class="col-md-8 content-top-2">
				<!---start-chart---->
				<!----->
		</div>
		<div class="clearfix"> </div>
		</div>
		<!---->
		<!---->
	
  


	 
		<!---->
<div class="copy">
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
