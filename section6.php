<?php
session_start();
$_SESSION['advisor'] = false;
$_SESSION['student'] = false;
$_SESSION['rotaractor'] = false;
echo("<script>console.log('Initial attempt');</script>");

if(isset($_POST['submit'])){
  echo("<script>console.log('Post attempt');</script>");
  $_SESSION['section6GroupName'] = $_POST['groupName'];
  $_SESSION['section6ContactName'] = $_POST['primaryContactName'];
  $_SESSION['section6ContactEmail'] = $_POST['primaryContactEmail'];
  $_SESSION['section6ContactPhone'] = $_POST['primaryContactPhone'];

    if($_POST['advisorRadio'] == "Yes"){
      echo("<script>console.log('Set attempt');</script>");
      $_SESSION['advisor'] = true;
    }
    if($_POST['studentRadio'] == "Yes") {
      echo("<script>console.log('Set attempt');</script>");
      $_SESSION['student'] = true;
    }
    if($_POST['rotaractorRadio'] == "Yes") {
      echo("<script>console.log('Set attempt');</script>");
      $_SESSION['rotaractor'] = true;
    }

    if($_SESSION['advisor'] == true){
      echo("<script>console.log('Advisor attempt');</script>");
      echo("<script>window.location = 'section7.php';</script>");
    }
    else if($_SESSION['student'] == true){
      echo("<script>console.log('Student attempt');</script>");
      echo("<script>window.location = 'section8.php';</script>");
    }
    else if($_SESSION['rotaractor'] == true){
      echo("<script>console.log('Rotaractor attempt');</script>");
      echo("<script>window.location = 'section9.php';</script>");
    }



    }
?>
<!DOCTYPE html>

<head>

<title>Group Registration</title>

<!-- CSS assets -->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->

<!-- JS assets -->

<script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>

</head>

<body>


<div class="container">

<div class="jumbotron">

  <div id="center">

      <h2>Group Registration</h2>

      <form name="Contact" method="POST">

      <div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1">Group Name</span>
<input type="text" name="groupName" class="form-control" placeholder="I.e. ASU Rotaract Club, Phoeix Squaw Peak Rotary Club, Mohave High School Interact Club" aria-describedby="sizing-addon1" required>
      </div>

      <br>

      <div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1">Primary Contact Name</span>
<input type="text" name="primaryContactName" class="form-control" placeholder="I.e. Jim Smith, Jane Doe" aria-describedby="sizing-addon1" required>
      </div>

      <br>

      <div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1">Primary Contact Email Address</span>
<input type="email" name="primaryContactEmail" class="form-control" placeholder="In proper user@example.com format" aria-describedby="sizing-addon1" required>
      </div>

      <br>

      <div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1">Primary Contact Phone Number</span>
<input type="tel" name="primaryContactPhone" class="form-control" placeholder="In proper 123-456-7890 format" aria-describedby="sizing-addon1" required>
      </div>

      <br>

      <div class="radio">
        <p>Are you registering any Faculty or Rotarian Advisors?</p>
        <label><input type="radio" name="advisorRadio" value="Yes" required>Yes</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="advisorRadio" value="No">No</label>
      </div>
      <br>

      <div class="radio">
        <p>Are you registering any high school or middle school students?</p>
        <label><input type="radio" name="studentRadio" value="Yes" required>Yes</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="studentRadio" value="No">No</label>
      </div>
      <br>

      <div class="radio">
        <p>Are you registering any Rotaractors?</p>
        <label><input type="radio" name="rotaractorRadio" value="Yes" required>Yes</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="rotaractorRadio"value="No">No</label>
      </div>
      <br>
</div>

      <p><input class="btn btn-primary btn-lg" type="submit" name="submit" role="button"></p>

      </form>

  </div>

</div>

</div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
