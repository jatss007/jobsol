<?php ob_start(); ?>
<?php include "includes/header.php"; ?>
<?php include "includes/function.php";?>
	  
       
<?php
if(isset($_GET['cid']))
{
    $cid=$_GET['cid'];
}
else
{
    header("Location: 404.php");
}
if(isset($_GET['value']))
{
    
    if($_GET['value']=="delete")
    {
        
$qid=$_GET['qid'];
            $query="Delete FROM question where q_id={$qid}";
            $result=mysqli_query($connection,$query);
    
            if(!$result)
            {
                die("Query failed".mysqli_error($connection));
            }
     
        header("Location: add.php?cid={$cid}");
    
    }
        
}
    
?>
        
<?php include "includes/sidebar_company.php";?>
        
        

   
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
			
            
            
            
            <table class="table ">
			    <thead  >
			        <tr>
			            <th>Id</th>
			            <th>Question</th>
			            <th>Correct Ans</th>
			        </tr>
			    </thead>
			    
			    <tbody>
			    
			    <?php
                    $id1=1;
                    $query="SELECT * FROM question where c_idk={$cid}";
            
            $result=mysqli_query($connection,$query);
            
            if(!$result)
            {
                die("Query failed".mysqli_error($connection));
            }
            
                    
                    while($row=mysqli_fetch_assoc($result)){
                        
                    $qid=$row['q_id'];
                    $q_name=$row['question'];
                    $option1=$row['option1'];
                    $option2=$row['option2'];
                    $option3=$row['option3'];
                    $option4=$row['option4'];
                    $coption=$row['correctoption'];

                        ?>
                    <tr class="table-row">
                           
                            <td class="table-text">
                            	<h6> <?php echo $id1; ?></h6>
                            </td>
                            
                           
                            <td class="table-text">
                            	<h6> <?php echo $q_name;?></h6>
                                <h7>1.<?php echo  $option1;?></h7><br>
                                <h7>2.<?php echo  $option2;?></h7><br>
                                <h7>3.<?php echo  $option3;?></h7><br>
                                <h7>4.<?php echo  $option4;?></h7><br>
                                
                            </td>
                            <td>
                            	<?php echo $coption;  ?>
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
