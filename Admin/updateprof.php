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


if(isset($_SESSION['id']))
{
    $query="Select * from user WHERE user_id={$_SESSION['id']}";
    $result=mysqli_query($connection,$query);
    $row=mysqli_fetch_array($result);

    $email=$row['user_name'];
    $password=$row['user_password'];
    $firstname=$row['user_firstname'];
    $lastname=$row['user_lastname'];
    $role=$row['user_role'];
    $mobile=$row['user_number'];
    $image=$row['user_image'];

    if(isset($_POST['submit'])){

    $id=$_SESSION['id'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];

    $mobile=$_POST['number'];
    $image=$_FILES['image']['name'];
    $image_temp=$_FILES['image']['tmp_name'];

    move_uploaded_file($image_temp,"../images/$image");



    if(empty($image)){

        $query="Select user_image from user where user_id=$id";
        $select_image=mysqli_query($connection,$query);
      $row=mysqli_fetch_array($select_image);

      $image=$row['user_image'];


    }

    $_SESSION['image']=$image;

    $query="UPDATE user SET ";
    $query.="user_firstname='{$firstname}', ";
    $query.="user_lastname='{$lastname}', ";
    $query.="user_password='{$password}', ";

    $query.="user_number='{$mobile}', ";
    $query.="user_image='{$image}' ";
    $query.="WHERE user_id={$id}";


    echo $update_post=mysqli_query($connection,$query);

    if(!$update_post){

        die("Query failed ".mysqli_error($connection));

    }
    else
    {
        header("Location: updateprof.php");

    }


    }




}
?>




        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

  		<!--banner-->
		    <div class="banner">

				<h2>
				<a href="user.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Profile</span>
				</h2>
		    </div>
		<!--//banner-->

		<div class="banner">
		<form action="updateprof.php" method="post" enctype="multipart/form-data">

		    <div class="form_group">
		        <label for="firstname">First Name</label>
		        <input type="text" class="form-control" name="firstname" value="<?php echo $firstname;?>" required>
		   <br>
		     </div>
		    <div class="form_group">
		        <label for="lastname">Last Name</label>
		        <input type="text" class="form-control" name="lastname" value="<?php echo $lastname;?>" required>
		   <br>
           </div>
            <div class="form_group">
		        <label for="number">Mobile Number</label>
		        <input type="number" class="form-control" name="number" value="<?php echo $mobile;?>" required>
		   <br>
           </div>


            <div class="form_group">
		        <label for="password">Password</label>
		        <input type="password" class="form-control" name="password" value="<?php echo $password;?>" required>
		   <br>
           </div>
            <div class="form_group">
		        <label for="email">Email_id</label>
		        <input type="email" class="form-control" disabled="disabled" name="email" value="<?php echo $email;?>"  required>
		        <br>
		    </div>


            <div class="form_group">
		        <img width="100" src="../images/<?php echo $image;?>" alt="">
		   </div>

           <div class="form_group">
		        <label for="image"></label>

            <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
		        <input type="file" value="1048576" name="image">
		        <h7 style="color:red;">Image size must be less than 500kb</h7>
		          <br>
           </div>
            <div class="form_group">
		        <input type="submit" class="btn btn-primary" name="submit" value="submit">
		    </div>



		</form>
		</div>
		<br><br>


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
