<?php ob_start(); ?>
<?php include "includes/header.php"; ?>
<?php include "includes/function.php";?>
	  
      <?php 
if(isset($_SESSION['role']))
{$role=$_SESSION['role'];
    if($role=='student')
    {
        ?>
        <?php include "includes/sidebar_student.php";?>
        <?php
    }
    else
    if($role=='company'){
            ?>
        <?php include "includes/sidebar_company.php";?>
        <?php
    }
    else{
        
            ?>
        <?php include "includes/sidebar.php";?>
        <?php
    
        
    }
}
    ?>   
<?php

if(isset($_GET['value']))
{
    
    if($_GET['value']=="delete")
    {
        
        $cid=$_GET['cid'];
    
            $query="Delete FROM challange where c_id={$cid}";
            $result=mysqli_query($connection,$queory);
    
            if(!$result)
            {
                die("Query failed".mysqli_error($connection));
            }
     
        header("Location: challenges.php");
    
    }
        
}

    
?>
        
<?php include "includes/sidebar.php";?>
        
        

   
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
			
            
            
			
			
			<div class="banner">
			
            
            
            
            <table class="table">
			    <thead  >
			        <tr>
			            <th>Id</th>
			            <th>Challange name</th>
			            <th>Category</th>
			            <th>Start Date</th>
			            <th>End Date</th>
			            <th>Delete</th>
			            <th>Insert</th>
			        </tr>
			    </thead>
			    
			    <tbody>
			    
			    <?php
                    $id1=1;
                    $query="SELECT * FROM challange";
            
            $result=mysqli_query($connection,$query);
            
            if(!$result)
            {
                die("Query failed".mysqli_error($connection));
            }
            
                    
                    while($row=mysqli_fetch_assoc($result)){
                        
                    $cid=$row['c_id'];
                    $name=$row['c_name'];
                    $startdate=$row['c_startdate'];
                    $enddate=$row['c_enddate'];
                    $category=$row['c_category'];
                        
                    
                        ?>
                    <tr class="table-row">
                           
                           <td><?php echo $id1; ?> 
                           </td>
                           
                            <td class="table-text">
                            	<h6><a href='add.php?cid=<?php echo  $cid;?>'> <?php echo $name ?>
                           </a></h6>
                            </td>
                            
                           
                            <td>
                            	<span class="fam"><?php echo $category;  ?></span>
                            </td>
                            <td>
                            	<?php echo $startdate;  ?>
                            
                            </td>
                            <td>
                                <?php echo $enddate;  ?>
                                </td>
                            	<td><a href='challenges.php?cid=<?php echo $cid?>&value=delete'>delete</a></td>
                                
                                
 <td><a href='question.php?value=insert&cid=<?php echo $cid;?>'>Insert</a></td>
                        
                                
                        </tr>
                        
                                
                        
                        <?php
                    $id1=$id1+1;    
                        
                    }
                    
                    
                ?>
			    
			    
			   </tbody>
                
			</table>
			</div>
			
			<br><br>
			
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
