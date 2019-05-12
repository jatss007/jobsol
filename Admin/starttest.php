<?php ob_start(); ?>

<?php
$cid;
if(isset($_GET['cid']))
{
     $cid=$_GET['cid'];
    
    $connection=mysqli_connect("localhost","root","","onlinejob1");
    $query="Select * from question where c_idk='{$cid}'";

    $query1="Select * from challange where c_id='{$cid}'";
    $result=mysqli_query($connection,$query);
    $result1=mysqli_query($connection,$query1);
    
    
    if(!$result||!$result1){

    die("Query incorrect ".mysqli_error($connection));
    
    }
    $row2=mysqli_num_rows($result);
    $row1=mysqli_fetch_array($result1);
    $name=$row1['c_name'];
    $category=$row1['c_category'];
    
    
}


?>


      

<?php session_start();?>

<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>
    html{
        
        width:100%;
        height:100%;
        background-color:#f3f3f4; 
        
    }
    .header 
    {
        width: 100%;
        background-color: #f3f3f4;
        position: fixed;
        
        -webkit-box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);
      -moz-box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);
      box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);
    }
    .nav
    {
        padding-left: 10px;
        
    }
    #container
    {
        padding-top: 5px;
        width: 900px;
        margin-right: auto;
        font-size: 28px;
        margin-left: auto;
        margin-top: auto;
        
    }
    li
    {
        list-style: none;
    }
    .question
    {
        font-size: 14px;
        color: gray;
    }
    #header1{
        
        
        height: auto;
        margin-right: auto;
        margin-left: auto;
        padding: 20px;
    }
    #submit
    {
        float: right;
    }
    </style>


</head>
<body>

<div class="header">
    <div id="container">
    
        <div class="nav">
        
        <ul>
        <li>    
        <?php echo strtoupper($name); ?>: &nbsp;
        <?php echo strtoupper($category); ?>
            </li>
        <li class="question">
        <?php echo $row2;?> questions 
        </li>
        </ul>
        </div>
    </div>
    
    
    
</div>


<div id="container">
    
    <div id="header1">
        
        <form action="checktest.php?cid=<?php echo $cid; ?>&category=<?php echo $category;?>" method="post">
            
            <br>
            <br>
        
        <?php
            $x=1;
    while($row=mysqli_fetch_array($result))
    {   
        $qid=$row['q_id'];
        $question=$row['question'];
        $option1=$row['option1'];
        $option2=$row['option2'];
        $option3=$row['option3'];
        $option4=$row['option4'];
        $coption=$row['correctoption'];
        ?>
           <br>
            <h4>Q.<?php echo $x;?>&nbsp;&nbsp;<?php echo $question?></h4>
            <br>
             <table>
             <tr><td>
                 <p><input type="radio" name="a<?php echo $qid;?>" value=1><?php echo $option1?></p></td>
            
                 <tr><td><p><input type="radio" name="a<?php echo $qid;?>" value=2><?php echo $option2?></p></td>
            
                 <tr><td><p><input type="radio" name="a<?php echo $qid;?>" value=3><?php echo $option3?></p></td>
            
                 <tr><td><p><input type="radio" name="a<?php echo $qid;?>" value=4><?php echo $option4?></p></td>
                 </tr>
                             </table>
                             
                            <hr>
        <?php
            $x=$x+1;
        
    }
        ?>
        <br>
        <input id="submit" class="btn btn-primary " type="submit" name="submit" value="Submit Quiz">
        
        </form>
        <br><br><br>
        
        
    </div>
    

</div>

<!---->
<!--scrolling js-->

	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.min.js"> </script>
</body>
</html>

