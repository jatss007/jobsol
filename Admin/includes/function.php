<?php include "../includes/db.php"?>
<?php

function getval($value)
{
    global $connection;

    $query="SELECT user_id FROM user WHERE user_role='{$value}'";
            
            $result=mysqli_query($connection,$query);
            
            if(!$result)
            {
                die("Query failed".mysqli_error($connection));
            }
            $num_student=mysqli_num_rows($result);
            

    return $num_student;
}

?>