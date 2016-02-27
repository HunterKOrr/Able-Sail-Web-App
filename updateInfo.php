<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("/data_model/model.php");
$model = new Database_Reader;

$registration = $model->get_registrations($ID);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Update info for Able Sail</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button onclick="loginFunction()" type="button" class="close" data-dismiss="modal" aria-hidden="true">Where is this?</button >
          <h1  class="text-center">Is your registration information up to date?</h1>
      </div>
      <div class="modal-body">
      <div id="registrationsarea">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Emergency Contact</th>
            <th>Has Contacts</th>
            <th>Has Power Wheelchair</th>
            <th>Has Manual Wheelchair</th>
            <th>Has Scooter</th>
            <th>Has Cane</th>
            <th>Has Walker</th>
            <th>Other Assistive Devices</th>
            <th>Needs Transfer Assistance</th>
            <th>Other Disabilities</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td><?php echo $registration{"ID"}; ?></td>
              <td><?php echo $registration{"first_name"}; ?></td>
              <td><?php echo $registration{"last_name"}; ?></td>
              <td><?php echo $registration{"address"}; ?></td>
              <td><a href="tel:<?php echo $registration{"phone"}; ?>"><?php echo $registration{"phone"}; ?></a></td>
              <td>
                <a href="mailto:<?php echo $registration{"email"}; ?>"><?php echo $registration{"email"}; ?></a>
              </td>
              <td><a href="tel:<?php echo $registration{"emergency_contact"}; ?>"><?php echo $r{"emergency_contact"}; ?></a></td>
              <td>
                <?php 
                if($registration{"lenses"}) {
                  echo "Yes";
                }
                else {
                  echo "No";
                } ?>
              </td>
              <td><?php 
                if($registration{"wheelchair_power"}) {
                  echo "Yes";
                }
                else {
                  echo "No";
                } ?></td>
                <td><?php 
                  if($registration{"wheelchair_manual"}) {
                    echo "Yes";
                  }
                  else {
                    echo "No";
                  } ?></td>
                  <td><?php 
                    if($registration{"scooter"}) {
                      echo "Yes";
                    }
                    else {
                      echo "No";
                    } ?></td>
                    <td>
                      <?php 
                      if($registration{"cane"}) {
                        echo "Yes";
                      }
                      else {
                        echo "No";
                      } ?>
                    </td>
                    <td>
                      <?php 
                      if($registration{"walker"}) {
                        echo "Yes";
                      }
                      else {
                        echo "No";
                      } ?>
                    </td>
                    <td>
                      <?php echo $registration{"other"}; ?>
                    </td>
                    <td><?php echo $registration{"transfer_assistance"}; ?></td>
                    <td><?php echo $registration{"disabilities"}; ?></td>
                  </tr>
              </tbody>
            </table>
            </div>
            <div class="form-group">
              <button type="button" id="goButton" onclick="textFilled(username, password);" class="btn btn-primary btn-lg btn-block"><a href="fixRegistryFunction($registration);">Yes</button>
            </div>
            <div class="form-group">
              <button type="button" id="goButton" onclick="textFilled(username, password);" class="btn btn-primary btn-lg btn-block"><a href="serviceFunction();">No</button>
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