<?php include "../includes/db.php"; ?>


<?php

if(isset($_POST['submit']))
{
    
    $email=$_POST['email'];
    $query="Select * from user where user_name='{$email}'";
    
    
    $res=mysqli_query($connection,$query);
    
    if(mysqli_num_rows($res)>0)
    {
        
        header("Location: ../register/signup.php");
    }
    else
    {
        
    $email=$_POST['email'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $role=$_POST['role'];
    $number=$_POST['number'];
    $password=$_POST['password'];
    
    $query="";
    $query ="INSERT INTO user(user_name,";
    $query.="user_password,user_firstname,";
 $query.="user_lastname,user_role,user_number) ";
 
    $query.="VALUES ('$email','$password','$firstname',";
    $query.="'$lastname','$role','$number')";
    
    
    $result=mysqli_query($connection,$query);
    
    if(!$result)
    {
        die(" Query failed ".mysqli_error());
    }
    else
    {?>
       
       <script type="text/javascript">
           alert("Successfully Registered");
           window.location.href = "../login/login.php";
        </script>
       
       <?php
        
        
     /*
        $query="SELECT * from user where user_name='{$email}' and user_role='{$role}' ";
    $select_user_query=mysqli_query($connection,$query);

    
    $result=mysqli_fetch_array($select_user_query);
    
    if(!$result)
    {
        die(" Query failed ".mysqli_error());
    }    
        
    $db_id=$result['user_id'];
        
    $name= "Hiring";
    $value=$db_id;
    $expiration=time()+(60*60*24*10);
    
    setcookie($name,$value, $expiration, '/', $_SERVER['SERVER_NAME'] );
    
    
        
        $_SESSION['username']=$result['user_name'];
        $_SESSION['firstname']=$result['user_firstname'];
        $_SESSION['lastname']=$result['user_lastname'];
        $_SESSION['role']=$result['user_role'];
         $_SESSION['image']=$result['user_image'];
        header("Location: ../admin/user.php");
    }*/
    }
    }
    
    
}


?>