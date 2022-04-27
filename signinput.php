<?php

    $dbconnect = pg_connect("host=localhost dbname=textcode user=postgres password=1234");

    if($_POST)
    {
        $UserName=$_POST['name'];
        $password=$_POST['password'];
        $Email=$_POST['email'];

        $res4= pg_query($dbconnect,"INSERT INTO userlogin(username,passwords,email)VALUES('$UserName','$password','$Email')");

        $resid=pg_query($connect,"select max(id) from userlogin");
        $result=pg_fetch_array($resid);
        $useId=$result[0];

        $_SESSION['userid']=$useId;
        
        if($res4)
        {
            header('location:welcome.php');
        }
        else 
           {
              echo '<script>alert("4 Not inserted")</script>';
           }
    }
?>
