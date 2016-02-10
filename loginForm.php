<?php
 
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        session_start();
        $user = $_POST['username'];
        $password = $_POST['exPass'];
        
        $dbname = 'propheis_ablesail';
        $server = 'kevinzuern.com';
        $dbUser = 'propheis_able';
        $dbPass = 'Ablesail';


        mysql_connect($server, $dbUser, $dbPass) or DIE('Connection to host isailed, perhaps the service is down!');
        mysql_select_db($dbname) or DIE('Database name is not available!');

        $user=mysql_real_escape_string($_POST['username']); 
        $password=md5(mysql_real_escape_string($_POST['exPass'])); 
        
        //checks if user is in database
        $query = "SELECT ID FROM user WHERE username='$user' and password='$password'";
        $res = mysql_query($query);
        $rows = mysql_num_rows($res);
        if ($rows==1){
            $_SESSION['username'] = $_POST['username'];
            header("Location: updateInfo.html");
        }

        else{
            echo "Username and Password not found";
            header("Location: loginCreate.html");
            // TODO - replace message with redirection to login page
            //  header("Location: securedpage.php");
        }

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