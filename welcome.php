<?php
include 'header.php'; 
?>
<br>
<?php
 if(isset($_SESSION['userid']))
 {
    $dbconnect = pg_connect("host=localhost dbname=textcode user=postgres password=1234");
    
    
    $usid=$_SESSION['userid'];

    $userLogin = pg_query($dbconnect,"SELECT * FROM userlogin where usid='$usid'" );
    $id=pg_fetch_array($userLogin);

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
              <h6><?php echo $id[2]; ?> </h6>
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
 }
 else{

 ?>
 <section>
      <div className="pt-5 ">
        <div class="container col-lg-4 pt-5 mt-3 border ps-4">
          <div class="row ">
            <div class="col">
              <div class="p-3 ">
                <h1 class="text-danger ">Sorry you are Logout </h1>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
<?php
 }
include 'footer.php'; 
?>