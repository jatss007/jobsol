<?php ob_start(); ?>
<?php include "includes/header.php"; ?>
<?php include "includes/function.php";?>

	          
        
        
<?php 

$cid=$_GET['cid'];
$qid=$_GET['qid'];
$question="";
$option1="";
$option2="";
$option3="";
$option4="";
$coption="";

if(isset($_GET['value'])){
    
   $query="Select * from question where q_id='{$qid}'";
                                
    
    $select_post=mysqli_query($connection,$query);             
        if(!$select_post){
        die("Query failed ".mysqli_error($connection));
    }                           
    else
    {
        $row=mysqli_fetch_assoc($select_post);
        $question=$row['question'];
        $option1=$row['option1'];
        $option2=$row['option2'];
        $option3=$row['option3'];
        $option4=$row['option4'];
        
        $coption=$row['correctoption'];
        
    }  
    
    
}


    if(isset($_POST['submit'])){
        
        
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $coption=$_POST['Coption'];
    $query="Update question set question='{$question}',option1='{$option1}',option2='{$option2}',option3='{$option3}',option4='{$option4}',correctoption='{$coption}' WHERE q_id={$qid}";
                                
    
    $insert_post=mysqli_query($connection,$query);             
                               
    if(!$insert_post){
        
        die("Query failed ".mysqli_error($connection));
        
    }                           
    else
    {
        
        echo "Query Added sccessfully!!";
        header("Location: question.php?cid={$cid}");
        
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
		<form action="updatequestion.php?cid=<?php echo $cid;?>&value=update&qid=<?php echo $qid;?>" method="post" enctype="multipart/form-data">
		    
		    <div class="form_group">
		        <label for="question">Question</label>
		        <br>
                <textarea class="form-control" name="question" rows="5" cols="40"><?php echo $question;?></textarea>
     
		   <br>  
		     </div>
		    <div class="form_group">
		        <label for="option1">Option 1</label>
		        <input type="text" class="form-control" name="option1" value="<?php echo $option1;?>">      
		   <br>   
           </div>
            <div class="form_group">
		        <label for="option2">Option 2</label>
		        <input type="text" class="form-control" name="option2" value="<?php echo $option2;?>">      
		   <br>   
           </div>
            <div class="form_group">
		        <label for="option3">Option 3</label>
		        <input type="text" class="form-control" name="option3" value="<?php echo $option3;?>">      
		   <br>   
           </div>
            <div class="form_group">
		        <label for="option4">Option 4</label>
		        <input type="text" class="form-control" name="option4" value="<?php echo $option4;?>">      
		   <br>   
           </div>
           
            <div class="form_group">
		        <label for="Coption">Correct option</label>
		        <input type="number" class="form-control" name="Coption" value="<?php echo $coption;?>">      
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





