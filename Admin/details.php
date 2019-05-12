

<?php ob_start(); ?>
<?php include "includes/header.php"; ?>
<?php include "includes/function.php";?>

<?php include "includes/sidebar.php";?>

        

<?php


global $connection;
    
if($_GET['role'])
{
$val=$_GET['role'];
}
else
{
    header("Location: 404.php");
}
if($_GET['value']=='delete')
{
$id=$_GET['id'];
    
    $query="Delete FROM user WHERE user_id={$id}";
    $result=mysqli_query($connection,$query);
    
            if(!$result)
            {
                die("Query failed".mysqli_error($connection));
            }
     
    header("Location: details.php?role={$val}&value=null");
    
}


$query="SELECT * FROM user WHERE user_role='{$val}'";
            
            $result=mysqli_query($connection,$query);
            
            if(!$result)
            {
                die("Query failed".mysqli_error($connection));
            }
            
?>
	  	  	  


   
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
		<br><br>
		<div class="banner">
			
			<div class="container">
			<table class="table ">
			    <thead >
			        <tr>
			            <th>Id</th>
			            <th></th>
			            <th>Username</th>
			            <th>Password</th>
			            <th>Firstname</th>
			            <th>Lastname</th>
			            <th>Role</th>
                        <th>Mobile Number</th>
			            <th>Delete</th>
			        </tr>
			    </thead>
			    
			    <tbody>
			    
			    <?php
                    $id1=1;
                    while($row=mysqli_fetch_assoc($result)){
                        
                    $id=$row['user_id'];
                    $email=$row['user_name'];
                    $password=$row['user_password'];
                   $firstname=$row['user_firstname'];
                    $lastname=$row['user_lastname'];
                    $role=$row['user_role'];
                    $mobile=$row['user_number'];
                    $userimage=$row['user_image'];
                    
                        ?>
                       
                        <tr class="table-row">
                           
                            <td class="table-text">
                            	<h6> <?php echo $id1 ?></h6>
                            </td>
                            <td class="table-img">
                               <img width="50" src="../images/<?php echo $userimage; ?>" alt="" />
           
                            </td>
                           
                            <td class="table-text">
                            
                            
                            <?php 
                        $Go="profile";
                                if($val=='company')
                                { 
                                    
                                    $Go="profile_company";
                                }
                        
                                
                                ?>
                            	<h6> <a href='<?php echo $Go;?>.php?id=<?php echo $id; ?>'><?php echo $email;?></a></h6>
                            </td>
                            <td>
                            	<?php echo $password;  ?>
                            </td>
                            <td><?php echo $firstname;  ?>
                            </td>
                            <td><?php echo $lastname;  ?>
                            </td>
                            <td><?php echo $role;  ?>
                            </td>
                            <td><?php echo $mobile;  ?>
                            </td>
                            <td class="march">
                               <a href=details.php?role=<?php echo $val;?>&id=<?php echo $id?>&value=delete>Delete</a> 
                            </td>
                          
                            
                        </tr> 
                        
                        <?php
                    
                    $id1=$id1+1;    
                        
                        
                    }
                    
                    
                
                    
                ?>
			    
			    
			   </tbody>
                
			</table>
			</div>
			
			
			
			<div class="col-md-8 content-top-2">
				<!---start-chart---->
				<!----->
				
		</div>
		
		<div class="clearfix"> </div>
		</div>
		<!---->
	<br>
			<br>
  


	 
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