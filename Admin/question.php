<?php ob_start(); ?>
<?php include "includes/header.php"; ?>
<?php include "includes/function.php";?>

	          
        
        
<?php 

if(isset($_GET['cid'])){
    
 
$cid=$_GET['cid'];   
    
}
else
{
    header("Location: 404.php");
}

$question="";
$option1="";
$option2="";
$option3="";
$option4="";
$coption="";

    if(isset($_POST['submit'])){
        
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $coption=$_POST['Coption'];
    $query="Insert into question(question,option1,option2,option3,option4,correctoption,c_idk) values('{$question}','{$option1}','{$option2}','{$option3}','{$option4}','{$coption}','{$cid}')";
                   
    
    
    $insert_post=mysqli_query($connection,$query);             
                               
    if(!$insert_post){
        
        die("Query failed ".mysqli_error($connection));
        
    }                           
    else
    {
        ?>
    <script type="text/javascript">
alert("Question added");
window.location.href = "question.php?cid=<?php echo $cid;?>";
</script><?php
        
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
				<span>Add Question</span>
				</h2>
		    </div>
		<!--//banner-->
		
		
		
		<div class="banner">
		<form action="question.php?cid=<?php echo $cid;?>" method="post" enctype="multipart/form-data">
		    
		    <div class="form_group">
		        <label for="question">Question</label>
		        <br>
                <textarea class="form-control" name="question" rows="5" cols="40" required><?php echo $question;?></textarea>
     
		   <br>  
		     </div>
		    <div class="form_group">
		        <label for="option1">Option 1</label>
		        <input type="text" class="form-control" name="option1" value="<?php echo $option1;?>" required>      
		   <br>   
           </div>
            <div class="form_group">
		        <label for="option2">Option 2</label>
		        <input type="text" class="form-control" name="option2" value="<?php echo $option2;?>" required>      
		   <br>   
           </div>
            <div class="form_group">
		        <label for="option3">Option 3</label>
		        <input type="text" class="form-control" name="option3" value="<?php echo $option3;?>" required>      
		   <br>   
           </div>
            <div class="form_group">
		        <label for="option4">Option 4</label>
		        <input type="text" class="form-control" name="option4" value="<?php echo $option4;?>" required>      
		   <br>   
           </div>
           
            <div class="form_group">
		        <label for="Coption">Correct option</label>
		        <input type="number" class="form-control" name="Coption" value="<?php echo $coption;?>"required>      
		   <br>   
           </div>
           
            <div class="form_group">
		        <input type="submit" class="btn btn-primary" name="submit" value="submit">      
		    </div>
		  
		    
		          
		</form>
		</div>
		
		
		
		
		
		<!--content-->
	
  


	 
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





