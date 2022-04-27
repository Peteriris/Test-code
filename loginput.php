<?php
                            $dbconnect = pg_connect("host=localhost dbname=textcode user=postgres password=1234");
                            if ($_POST)
                            {
                                $email = $_POST['email'];
                                $ps = $_POST['password'];

                                $res = pg_query( $dbconnect,"SELECT * FROM userlogin WHERE email = '$email' AND passwords = '$ps'");
                                $id=pg_fetch_array($res);
                                $userLogin = pg_query($dbconnect,"SELECT max(usid) FROM userlogin " );
                                $idof=pg_fetch_array($userLogin);

                                $userid=$idof[0];
        
                                $_SESSION['userid']=$userid;

                                if (pg_num_rows($res) > 0) 
                                {
                                    header('location:welcome.php');
                                } else
                                {
                                    echo '<script>alert("invalid user name and password")</script>';
                                }
                                
                            header ("refresh:5;url=index.php");
                            }
                            ?>