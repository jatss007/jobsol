<?php ob_start(); ?>

<?php include "includes/header.php"; ?>
<?php include "includes/function.php";?>
	  
        
<?php include "includes/sidebar_student.php";?>
<?php
$cid;
$other=0;
if(isset($_GET['other'])){
    
    $other=$_GET['other'];
    
}
if(isset($_GET['cid']))
{
     $cid=  $_GET['cid'];
    $first=0;
    if(isset($_GET['first'])){
        $first=$_GET['first'];
        
    }
    $connection=mysqli_connect("localhost","root","","onlinejob1");
    $query="Select * from challange where c_id='{$cid}'";

    $result=mysqli_query($connection,$query);
    
    $row=mysqli_fetch_array($result);
    
    if(!$result){

    die("Query incorrect ".mysqli_error($connection));
    
    }
    else
    {
        $name=$row['c_name'];
        $category=$row['c_category'];
        $sdate=$row['c_startdate'];
        $edate=$row['c_enddate'];
    }
    
        $date=date("y-m-d");
        $user_id=$_SESSION['id'];
        $query="Select * from contest_solved where chg_id={$cid} and user_id={$user_id}";
        $result1=mysqli_query($connection,$query);
        
        if(!$result1){

        die("Query incorrect ".mysqli_error($connection));
    
        }
    else
    {

            $numberrows=mysqli_num_rows($result1);
    }
    
    
    
    
}


?>
        
        

   
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="student.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		
		
		<div class=" profile">

		<div class="profile-bottom">
			<h3>Contest Details:</h3>
			<div class="profile-bottom-top">
			
			<div class="col-md-9 profile-text">
				
				<table>
				<?php
                if($first==0)
                {
				if($numberrows>0)
				{?>
				<tr><p style="color:red;">Already Attempted</p>
				</tr>
				<?php } ?>
				<tr>
				<td>Name</td>
				<td> :</td>
				<td><?php echo $name; ?></td>
				</tr>
				<tr>
				<td>Start date</td>
				<td> :</td>
				<td> <?php echo $sdate; ?></td>
				</tr>
				<tr>
				<td>End date</td>
				<td> :</td>
				<td> <?php echo $edate; ?></td>
				</tr>
				<tr>
				<td>Category</td>
				<td> :</td>
				<td> <?php echo $category; ?></td>
				</tr>
               
                <tr>
				<td>Content</td>
				<td> :</td>
				<td> djfalksjdfsdfaskdjflj lsdjflkjas ldjfljsadljfjasd;lfj ;lsjadlfjsdfasdfsdafsadfhsdkjfhasd
				fsdkfhadsfhkadhskfhs dfjkasdhf hskdahfkhsadf
				sasdfashdhfadfhjsdhakjfhs kdsfhasdhfhsaldhflhs khdfsadhfkhlafhfsdlhfsadhfkjhsd </td>
				</tr>
				
                
                   
               <?php       
                }
                else
                if($other!=1)
                {
                ?>
                    <tr><p style="color:red;padding: 10px;">Your Score is:</p>
				</tr>
                    <?php
                    
                    
                }
                    
                ?>   
                
                   <?php 
                     
        
            if($numberrows>0)
            {
                $row=mysqli_fetch_array($result1);
                $marks=$row['marks'];
                $totalmarks=$row['totalmarks'];
                ?>
                <tr>
				<td>Marks Obtained</td>
				<td> :</td>
				<td> <?php echo $marks; ?> </td>
                    </tr>
                    <tr>
				<td>Total Marks</td>
				<td> :</td>
				<td> <?php echo $totalmarks; ?> </td>
				</tr>
           <?php
            }
        
                    else               
                    if(strtotime($sdate) > strtotime($date))
                    {
                    }
                    else{
                    ?>
                    
                    <tr><td><br><br></td></tr>
                    
				<tr>
               <td>
                <form method='post' action='starttest.php?cid=<?php echo $cid; ?>'>
                <input type="submit" class="btn btn-primary"  value="Start Test" >
                </form>
                    </td>
                      </tr>
                   <?php }
        
				    ?>
				</table>
				
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
		
		
		
		
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
