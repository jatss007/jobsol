<?php include "../includes/db.php"; ?>

<?php session_start(); ?>



<?php

    if(isset($_POST['login']))
    {

        $username=$_POST['username'];
        $password=$_POST['password'];

    }

   $username=mysqli_real_escape_string($connection,$username);

    $password=mysqli_real_escape_string($connection,$password);



    $query="SELECT * from user where user_name='{$username}' ";
    $select_user_query=mysqli_query($connection,$query);

    echo $username;
    echo $password;
    if(!$select_user_query)
    {
        die("Query Failed".mysqli_error($select_user_query));
    }
    while($row=mysqli_fetch_array($select_user_query)){
        $db_id=$row['user_id'];
        $db_username=$row['user_name'];
        $db_userpass=$row['user_password'];
        $db_userfirstname=$row['user_firstname'];
        $db_userlastname=$row['user_lastname'];
        $db_userrole=$row['user_role'];
        $db_userimage=$row['user_image'];
    }
if($username === $db_username && $password===$db_userpass)
{
    $name= "Hiring";
    $value=$db_id;
    $expiration=time()+(60*60*24*10);

    setcookie($name,$value, $expiration, '/', $_SERVER['SERVER_NAME'] );


     $_SESSION['id']=$db_id;
     $_SESSION['username']=$db_username;
     $_SESSION['firstname']=$db_userfirstname;
     $_SESSION['lastname']=$db_userlast;#8d4545name;
     $_SESSION['role']=$db_userrole;
     $_SESSION['image']=$db_userimage;

    if(strcmp($db_userrole,"admin")==0){
            header("Location: ../admin/user.php?dbuser={$db_userrole}");
    }
    else
    if(strcmp($db_userrole,"student")==0){
            header("Location: ../admin/student.php");
    }
    else{
            header("Location: ../admin/Company.php?dbuser={$db_userrole}");
    }
}
else
{
    ?>

    <script type="text/javascript">
alert("Incorrect email or password");
window.location.href = "login.php";
</script>

    <?php


}


?>
