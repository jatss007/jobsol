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
				<span>Challenge</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
            
			
	<div class="content-main">		
			<div class="container">
			
            
            
            
            <table class="table  table-bordered table-hover">
			    <thead class="thead-dark" >
			        <tr>
			            <th>Question_Id</th>
			            <th>Question</th>
			            <th>Option 1</th>
			            <th>Option 2</th>
			            <th>Option 3</th>
			            <th>Option 4</th>
			        </tr>
			    </thead>
			    
			    <tbody>
			    
			    <?php
                    $id1=1;
                    $query="SELECT * FROM challenge1";
            
            $result=mysqli_query($connection,$query);
            
            if(!$result)
            {
                die("Query failed".mysqli_error($connection));
            }
            
                    
                    while($row=mysqli_fetch_assoc($result)){
                        
                    $q_id=$row['q_id'];
                    $question=$row['question'];
                    $option1=$row['option1'];
                    $option2=$row['option2'];
                    $option3=$row['option3'];
                    $option4=$row['option4'];    
                    echo "<tr>";
                    echo "<td>$id1</td>";
                    echo "<td>$question</td>";
                    echo "<td>$option1</td>";
                    echo "<td>$option2</td>";
                    echo "<td>$option3</td>";
                    echo "<td>$option4</td>";
                    /*
                    echo "<th><a href=details.php?role={$val}&id={$id}&value=delete>Delete</a></th>";*/
                    echo "</tr>";
                    
                    
                    $id1=$id1+1;    
                        
                        
                    }
                    
                    
                
                    
                ?>
			    
			    
			   </tbody>
                
			</table>
			</div>
			
			
			<div class="col-md-8 content-top-2">
            <br><br><br><br><br>
            				
            								
            												
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
