<?php session_start(); ?>
<?php 

if(isset($_POST['submit']))
{
        
    if(isset($_GET['category'])){
        
        $category=$_GET['category'];
        
    }
    if(isset($_GET['cid']))
    {
    $cid=$_GET['cid'];
    $user_id=$_SESSION['id'];
    
    $connection=mysqli_connect("localhost","root","","onlinejob1");
    $query="Select * from question where c_idk='{$cid}'";

    $result=mysqli_query($connection,$query);
    $totalmarks=mysqli_num_rows($result);
        
    if(!$result){
    die("Query incorrect ".mysqli_error($connection));
    }
    else
    {    
        $count=0;
        while($row=mysqli_fetch_array($result))
        {
        $qid=$row['q_id'];
        $coption=$row['correctoption'];
        if(isset($_POST['a'.$qid]))
        {
        if($_POST['a'.$qid])
        {
            $value=$_POST['a'.$qid];
            if($coption==$value)
            {
                $count++;
            }
        }
        }
        
        }
        $percentage=($count*100)/$totalmarks;
        $query="Insert into contest_solved(user_id,chg_id,marks,totalmarks,category,percentage) values('{$user_id}','{$cid}','{$count}','{$totalmarks}','{$category}','{$percentage}')";
        $result1=mysqli_query($connection,$query);
        
        if(!$result1){
            
            die("Query incorrect ".mysqli_error($connection));
        
        }
        echo $count;
        header("Location: contestdetail.php?cid={$cid}&first=1");
    }
       
        
        
    }

}
?>