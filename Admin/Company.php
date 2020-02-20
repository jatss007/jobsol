<?php ob_start(); ?>


<?php include "includes/header.php"; ?>
<?php include "includes/function.php";?>
<?php
if($_SESSION['role']!='company'){

  header("Location: 404.php");

}

?>
<?php
global $connection;

$connection=mysqli_connect("localhost","root","","onlinejob1");


if(isset($_POST['userid'])||isset($_POST['category'])||isset($_POST['percentage']))
{

  $userid=$_POST['userid'];
  $category=$_POST['category'];
  $percentage=$_POST['percentage'];
  if(empty($category)&&empty($percentage)){

    $query="Select * from contest_solved";



  }
  else
  {
    $query;
    if(empty($category)&&!empty($percentage)){

      $query="Select * from contest_solved where percentage >= '{$percentage}'";
    }
    else
    if(!empty($category)&&empty($percentage)){
      $query="Select * from contest_solved where category = '{$category}'";
    }
    else
    {
      $query="Select * from contest_solved where category = '{$category}' and percentage >= '{$percentage}'";
    }



  }
}
else
{
  $query="Select * from contest_solved";


}
$result=mysqli_query($connection,$query);
if(!$result){

  die("Query error".mysqli_error($connection));
}



?>



<?php include "includes/sidebar_company.php";?>


<div id="page-wrapper" class="gray-bg dashbard-1">
  <div class="content-main">

    <div class="banner">

      <h2>
        <a href="student.php">Home</a>
        <i class="fa fa-angle-right"></i>
        <span>Dashboard</span>
      </h2>

    </div>

    <!--//banner-->
    <!--content-->
    <div class="content-main">

      <div class="banner">

        <form action="company.php" method="post">
          <table>
            <tr>
              <td >Category:</td>
              <td class="col-md-3">
                <input class="form-control" name="category" type="text" placeholder="">
              </td>

              <td >Cutoff(%):</td>
              <td class="col-md-3">
                <input class="form-control" name="percentage" type="text" >
              </td>
              <td class="col-md-3">


                <input class="form-control" type="text"  name="userid" placeholder="User Id">
                <td>
                  <span class="input-group-btn">
                    <input class="btn btn-success" type="submit"><i class="fa fa-search"></i>
                  </span>
                </td>
              </tr>

            </table>
          </form>

        </div>


        <br>


        <div class="banner">


          <table class="table">
            <tbody>

              <?php
              while($row=mysqli_fetch_assoc($result))
              {

                $id=$row['user_id'];
                $query="Select * from user where user_id='{$id}'";

                $result1=mysqli_query($connection,$query);
                if(!$result1){

                  die("Query error".mysqli_error($connection));
                }
                else
                {
                  $userdetails=mysqli_fetch_array($result1);
                  $username=$userdetails['user_firstname']." ". $userdetails['user_lastname'];
                  $useremail=$userdetails['user_name'];
                  $usernumber=$userdetails['user_number'];
                  $userimage=$userdetails['user_image'];


                  ?>
                  <tr class="table-row">
                    <td class="table-img">
                      <img width="50" src="../images/<?php echo $userimage; ?>" alt="" />

                    </td>
                    <td class="table-text">
                      <h6> <?php echo $username;  ?></h6>
                      <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                    </td>
                    <td>
                      <span class="fam"><?php echo $useremail;  ?></span>
                    </td>
                    <td class="march">
                      <?php echo $usernumber;  ?>
                    </td>
                    <?php
                    if(isset($_GET['send'])){
                      /*
                      $to="jatinsnh4@gmail.com";
                      $subject=wordwrap("Job letter",70);
                      $body="Job letter from amazon" ;
                      $header=$useremail;
                      mail($to,$subject,$body,$header);*/
                    }
                    ?>
                    <td ><a href="Company.php">Send Job letter</a>
                    </td>
                  </tr>

                  <?php

                }


              }
              ?>
            </tbody>
          </table>
        </div>
      </div>


      <br><br>




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
