<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
  // Get form information and store within variable
  $username = ($_POST["username"]);
  $password = ($_POST["password"]);

    // Include helper functions
  include("./data_model/model.php");

  $model = new Database_Reader;

    // If valid user, insert information into database
  if ($model->valid_user($username, $password) === true){
    echo "<script> updateInfoFunction(); </script>";
  };

  echo "ERROR: Information Not Valid!";
  echo "<script> updateInfoFunction(); </script>";
};
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Login Form for Able Sail</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button onclick="loginFunction()" type="button" class="close" data-dismiss="modal" aria-hidden="true"></button >
          <h1  class="text-center">Login for Able Sail</h1>
      </div>
      <div class="modal-body">
          <form action="index.php" method="get" id="form" onsubit="return textFilled(username, password);" class="form col-md-12 center-block">
            <div class="form-group">
              <input onKeyUp="updateLength('username', 'usernameLength');" onblur="checkTextField(this);" type="text" class="form-control input-lg" placeholder="Username" id="username">
            </div>
            <div class="form-group">
              <input type="password" id="password" class="form-control input-lg" placeholder="Password" name="password" maxlength="50" onKeyUp="updateLength('password', 'passwordLength');">
            </div>
            <div class="form-group">
              <button onclick="textfilled(username, password);" type="button" id="goButton" class="btn btn-primary btn-lg btn-block"><a href="updateInfoFunction();">Sign In</a></button>
              <span class="pull-left"><a href="createAccount.php">Register new Account </a></span>&nbsp | &nbsp<span><a href="http://www.kingstonyachtclub.com/contact">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true"><a href="http://www.kingstonyachtclub.com/ablesail">Cancel</a></button>
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="loginScript.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>