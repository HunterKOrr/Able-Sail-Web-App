<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        //get inforation stored within variables
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //include helper functions
        include("./data_model/model.php");
        
        $model = new Database_Reader;

        //if valid user, contiune to next page
        if($model->valid_user($username, $password) === true){
            header('Location: updateInfo.html');
        };
            echo "Username and Password not found";
            header("Location: loginCreate.html");
        }

    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Able Sail Web App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
    <section class="container">
        <h1>Sign In!</h1>
    </section>

    <form action="loginForm.php" method='POST'>
      <div class="form-group">
        <label for="username">Username address</label>
        <input type="username" class="form-control" id="username" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="exPass">Password</label>
        <input type="password" class="form-control" id="exPass" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

</body>
</html>