<?php include ('head.php');?>
<body>
    <!-- comment kpama k-->
    <div class="container">
        <div class="row">

		<center><h3>Automated Voting Sytem</h3></center>
            <div class="col-md-4 col-md-offset-4">

                <div class="login-panel panel panel-default">

                    <div class="panel-heading">
                        <center><h3 class="panel-title"> Log In</h3></center>
                    </div>
                    <div class="panel-body">

                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>

                  <div class="form-group">
                  <label for = "username" >Course Name.</label>
                  <input class="form-control" placeholder="Please Enter Voter's Course" name="lastname" type="text" required = "required" autofocus>
                  </div>

                                <div class="form-group">
									<label for = "username" >ID No.</label>
										<input class="form-control" placeholder="Please Enter Voter's ID Number" name="idno" type="text" required = "required" autofocus>
                                </div>

                                <div class="form-group">
                  <label for = "username" >First Name</label>
                    <input class="form-control" placeholder="firstname" name="firstname" type="text" required = "required">
                               </div>

                                <div class="form-group">
                  <label for = "username" >Password</label>
                    <input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>


<!--
<style>
.btn-livestream {
color: white;
background-color: white;
}
</style>
-->
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>

                            </fieldset>
<a class="btn-livestream" href="includes/livestream.php">Live Results</a>
									<?php include ('login_query.php');?>
                        </form>
                        <h4><b>Note:</b> <i>One voter can only vote/login one time!!</i> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
