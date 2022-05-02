<?php

session_start();
 
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <title>Test Code</title>
    </head>
    <body >
        <header >
            <nav class="navbar navbar-light border bg-light">
                <div class="container-fluid">
                    <b class="navbar-brand fs-3">CODETEXT</b>
                  <form class="d-flex">
                      <?php
						if(isset($_SESSION['userid']))
						{
						?>
                    <a href="logout.php" class="" >Logout</a>
                    <?php
                    }
                    else
                    {
                    ?>
                    <a href="index.php" class="" >Login</a>
                    <a href="signup.php" class="" >/Signup</a>
                    <?php
                    }
                    ?>
                  </form>
                </div>
            </nav>
        </header>