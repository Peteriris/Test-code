<?php
include 'header.php'; 
?>
<br>
<br>
<?php
    $dbconnect = pg_connect("host=localhost dbname=textcode user=postgres password=1234");
    
    $userLogin = pg_query($dbconnect,"SELECT * FROM userlogin" );
    $id=pg_fetch_array($userLogin);

    $usid=$_SESSION['userid']

?>
    <section>
      <div className="pt-5 ">
        <div class="container col-lg-4 pt-5 mt-3 border ps-4">
          <div class="row ">
            <div class="col">
              <div class="p-3 ">
                <h1 class="text-primary col col-lg-2 ">Welcome </h1>
              </div>
              <div>
                <p>Your are scussfully Login </p>
              <h4><?php echo $id[1]; ?> </h4>
              <h4><?php echo $usid; ?> </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>
<?php
include 'footer.php'; 
?>