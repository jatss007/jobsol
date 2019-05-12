<?php ob_start(); ?>
<?php include "includes/header.php"; ?>
<?php include "includes/function.php";?>

<?php 

if($_SESSION['role']!='student'){
    
    header("Location: 404.php");
    
}

?>
<?php include "includes/sidebar_student.php";?>
        
        
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		    <div class="banner">
		   
				<h2>
				<a href="student.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		
		
		
                   <br><br>
  <div class="banner">
         	
               <h4>Live Contest</h4> 
            <?php
      
                $date="20".date("y/m/d");
      
             $query="Select * from challange where c_startdate <= '{$date}' and '{$date}' <= c_enddate ORDER BY c_startdate ";
                
            $get_result=mysqli_query($connection,$query);
               
               
            if(!$get_result){
                
                echo "Not";
                
            } 
            ?>
            
                <table class="table">
                   <thead>
                       
                       
                       <tr>
			            <th>Id</th>
			            <th>Contest name</th>
			            <th>Category</th>
			            <th>Start-Date</th>
			            <th>End-Date</th>
			        </tr>
                       
                   </thead>
                   
                   
                    <tbody>
                     
                       <?php
                    $id1=1;
                    while($row=mysqli_fetch_assoc($get_result)){
                        
                    $cid=$row['c_id'];
                    $name=$row['c_name'];
                    $category=$row['c_category'];
                    $sdate=$row['c_startdate'];
                    $edate=$row['c_enddate'];
                    ?>
                       
                       
                        <tr class="table-row">
                           
                            <td class="table-text">
                            	<h6> <?php echo $id1 ?></h6>
                            </td>
                            
                           
                            <td class="table-text">
                            	<h6> <a href='contestdetail.php?cid=<?php echo $cid; ?>'><?php echo $name;?></a></h6>
                            </td>
                            <td>
                            	<span class="fam"><?php echo $category;  ?></span>
                            </td>
                            <td class="march">
                               <?php echo $sdate;  ?>
                            </td>
                          
                            <td class="march">
                               <?php echo $edate;  ?>
                            </td>
                            
                        </tr>
                        
                        <?php
                        
                    
                    
                    $id1=$id1+1;    
                        
                        
                    }
                    
                    
                
                    
                ?>
			    
                        
                        
                        
                    </tbody>
                </table>
                
                    </div>
                   <br><br>               
                       <div class="banner">
            <h4>Upcoming Contest</h4> 
            <?php
      
                $date="20".date("y/m/d");
             $query="Select * from challange where c_startdate > '{$date}' ORDER BY c_startdate";
                
            $get_result=mysqli_query($connection,$query);
               
               
            if(!$get_result){
                
                echo "Not";
                
            } 
            ?>
            
                <table class="table">
                   <thead>
                       
                       
                       <tr>
			            <th>Id</th>
			            <th>Contest name</th>
			            <th>Category</th>
			            <th>Start-Date</th>
			            <th>End-Date</th>
			        </tr>
                       
                   </thead>
                   
                   
                    <tbody>
                     
                       <?php
                    $id1=1;
                    while($row=mysqli_fetch_assoc($get_result)){
                        
                    $cid=$row['c_id'];
                    $name=$row['c_name'];
                    $category=$row['c_category'];
                    $sdate=$row['c_startdate'];
                    $edate=$row['c_enddate'];
                    ?>
                       
                       
                        <tr class="table-row">
                           
                            <td class="table-text">
                            	<h6> <?php echo $id1 ?></h6>
                            </td>
                            
                           
                            <td class="table-text">
                            	<h6> <a href='contestdetail.php?cid=<?php echo $cid; ?>'><?php echo $name;?></a></h6>
                            </td>
                            <td>
                            	<span class="fam"><?php echo $category;  ?></span>
                            </td>
                            <td class="march">
                               <?php echo $sdate;  ?>
                            </td>
                          
                            <td class="march">
                               <?php echo $edate;  ?>
                            </td>
                            
                        </tr>
                        
                        <?php
                        
                    
                    
                    $id1=$id1+1;    
                        
                        
                    }
                    
                    
                
                    
                ?>
                        
                    </tbody>
                </table>
                
                
                
                    </div>
                   <br><br>
                           <div class="banner">
                
                   
            <h4>Past Contest</h4> 
            <?php
      
                $date="20".date("y/m/d");
             $query="Select * from challange where c_enddate < '{$date}' ORDER BY c_startdate";
                
            $get_result=mysqli_query($connection,$query);
               
               
            if(!$get_result){
                
                echo "Not";
                
            } 
            ?>
            
                <table class="table">
                   <thead>
                       
                       
                       <tr>
			            <th>Id</th>
			            <th>Contest name</th>
			            <th>Category</th>
			            <th>Start-Date</th>
			            <th>End-Date</th>
			        </tr>
                       
                   </thead>
                   
                   
                    <tbody>
                     
                       <?php
                    $id1=1;
                    while($row=mysqli_fetch_assoc($get_result)){
                        
                    $cid=$row['c_id'];
                    $name=$row['c_name'];
                    $category=$row['c_category'];
                    $sdate=$row['c_startdate'];
                    $edate=$row['c_enddate'];
                    ?>
                       
                       
                        <tr class="table-row">
                           
                            <td class="table-text">
                            	<h6> <?php echo $id1 ?></h6>
                            </td>
                            
                           
                            <td class="table-text">
                            	<h6> <a href='contestdetail.php?cid=<?php echo $cid; ?>'><?php echo $name;?></a></h6>
                            </td>
                            <td>
                            	<span class="fam"><?php echo $category;  ?></span>
                            </td>
                            <td class="march">
                               <?php echo $sdate;  ?>
                            </td>
                          
                            <td class="march">
                               <?php echo $edate;  ?>
                            </td>
                            
                        </tr>
                        
                        <?php
                        
                    
                    
                    $id1=$id1+1;    
                        
                        
                    }
                        
                        
                        ?>
                        
                        
                        
                    </tbody>
                </table>
                
                
                
                
                
            </div>
		
		<div class="clearfix"> </div>
		
		<br><br><br>
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
