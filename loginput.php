<?php

session_start();
 
                            $dbconnect = pg_connect("host=localhost dbname=textcode user=postgres password=1234");
                            
                            if ($_POST)
                            {
                                $email = $_POST['email'];
                                $ps = $_POST['password'];

                                $res = pg_query( $dbconnect,"SELECT * FROM userlogin WHERE email = '$email' AND passwords = '$ps'");

                                if($res==0)
                                {
                                $id=pg_fetch_array($res);

                                $userid=$id[0];
        
                                $_SESSION['userid']=$userid;
                                }
                                if (pg_num_rows($res) > 0) 
                                {
                                    header('location:welcome.php');
                                } else
                                {
                                    echo '<script>alert("invalid user name and password")</script>';
                                }
                                
                            header ("refresh:0;url=index.php");
                            }
?>