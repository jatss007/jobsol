
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
global $connection;

    $connection=mysqli_connect("localhost","root","","onlinejob1");

                
        $query="Select * from user where user_role='company' ";
            
        $result=mysqli_query($connection,$query);
            if(!$result){
                
                die("Query error".mysqli_error($connection));
        }

?>


<?php ob_start(); ?>
        
        
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
		<div class="content-main">
			
		
		
		
  <div class="banner">
         	
               
                <table class="table">
                    <tbody>
                     
                      <?php
                        while($row=mysqli_fetch_assoc($result))
                       {
                            $userid=$row['user_id'];
                            
                               $username=strtoupper($row['user_firstname'])." ". strtoupper($row['user_lastname']);
                               $useremail=$row['user_name'];
                               $usernumber=$row['user_number'];
                               $userimage=$row['user_image'];
                               
                        
                        ?>
                        <tr class="table-row">
                            <td class="table-img">
                               <img width="50" src="../images/<?php echo $userimage; ?>" alt="" />
           
                            </td>
                            <td class="table-text">
                            	<h6><a href="profile_company.php?id=<?php echo $userid;?>"> <?php echo $username;  ?></a></h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="fam"><?php echo $useremail;  ?></span>
                            </td>
                            <td class="march">
                               <?php echo $usernumber;  ?>
                            </td>
                          
                             <td >
                             
                                
                            </td>
                        </tr>
                        
                        <?php
                               
                           
                        
                           
                       }
                               ?>
                    </tbody>
                </table>
            </div>
</div>

    
    <br><br>
		
		
		
		
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
