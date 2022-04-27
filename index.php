
<?php

include 'header.php'; ?>

<section>
            <br>
            <br>
            <div className="pt-3 ">
              <div class="container col-lg-4 pt-5 mt-3 border ps-4">
                <div class="row ">
                  <div class="col">
                    <div class="p-3 ">
                      <h1 class="text-primary col col-lg-2 ">Login </h1>
                    </div>
                    <hr>
                    <div class="pt-3">
                    <form action="loginput.php" method="post">
                        <div>
                            <div class="mb-3">
                                <label  class="form-label">Email :</label>
                                <input type="text" name="email" class="form-control" placeholder="text@gmail.com" id="Email" rows="3">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="********" id="pasword" rows="3">
                            </div>
                            <center>
                                <div class="mb-3">
                                    <input type="Submit" name="ok" value="Submit"class="btn btn-success" id="ok" >
                                    <input type="reset" name="cancel" value="cancel"class="btn btn-warning" id="canl" >
                                </div>
                            </center>
                        </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <br>
          <br>
          <br>


<?php include 'footer.php';
?>
