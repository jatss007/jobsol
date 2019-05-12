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



    $id=$_GET['id'];

    $query="Select * from user WHERE user_id={$id}";
    $result=mysqli_query($connection,$query);

    $row=mysqli_fetch_array($result);

                    $email=$row['user_name'];
                    $password=$row['user_password'];
                    $firstname=$row['user_firstname'];
                    $lastname=$row['user_lastname'];
                    $role=$row['user_role'];
                    $mobile=$row['user_number'];
                    $image=$row['user_image'];


?>	  

        
        

   
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="user.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
		<!--//banner-->
		
		<div class=" profile">

		<div class="profile-bottom">
			<h3><i class="fa fa-user"></i>Profile</h3>
			<div class="profile-bottom-top">
			<div class="col-md-3 profile-bottom-img">
			<img class="img-responsive " width="100" height="100" src="../images/<?php echo $image ;?>" alt="<?php echo $image; ?>">
			</div>
			<div class="col-md-9 profile-text">
				<h6><?php echo strtoupper($firstname)." ".strtoupper($lastname) ;?>
                    </h6>
				<table>
				
				<tr>
				<td>Email</td>
				<td> :</td>
				<td><?php echo $email; ?></td>
				</tr>
				<tr>
				<td>Skills</td>
				<td> :</td>
				<td> HTML, CSS,Jquery, Bootstrap</td>
				</tr>
				<tr>
				<td>Contact Number </td>
				<td>:</td>
				<td> <?php echo $mobile ?></td>
                    </tr><tr>
                    <td>Contest Solved</td>
                    <td>:</td>
                    
                    <td>
                <?php
                $query="Select * from contest_solved WHERE user_id={$id}";
                 $result=mysqli_query($connection,$query);

                while($row=mysqli_fetch_array($result))
                {
                    $Category=$row['category'];
                    $contest_id=$row['id'];
                    $cid=$row['chg_id'];
                    echo "$Category &nbsp;";
                    
                    
                }
                
                ?></td>
				    </tr>
                </table>
				
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
		<!--content-->
	
  


	 
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





