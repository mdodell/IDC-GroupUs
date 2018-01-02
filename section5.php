<?php
session_start();
echo("<script>console.log('Initial attempt');</script>");
if(isset($_POST['submit'])){
    echo("<script>console.log('Finished attempt');</script>");
    $_SESSION['section5Name'] = $_POST['name'];
    $_SESSION['section5ClubName'] = $_POST['rotaryClubName'];
    $_SESSION['section5Email'] = $_POST['email'];
    $_SESSION['section5Phone'] = $_POST['phone'];
    $_SESSION['section5Gender'] = $_POST['gender'];
    if ($_POST['other'] != null){
        $_SESSION['section5OtherGender'] = $_POST['other'];
    }
    $_SESSION['section5AdvisorType'] = $_POST['advisorType'];
    $_SESSION['section5Diet'] = $_POST['diet'];
    if ($_POST['otherDiet'] != null){
        $_SESSION['section5OtherDiet'] = $_POST['otherDiet'];
    }
    echo("<script>window.location = 'section10.php';</script>");
}
?>
<!DOCTYPE html>

<head>

<title>Rotarian Individual Registration</title>

<!-- CSS assets -->

<link href="bootstrap.min.css" rel="stylesheet">

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

      <h2>Rotarian Individual Registration</h2>

      <br>

      <form name="Contact" method="POST">

      <div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1">Name</span>
<input type="text" name="name" class="form-control" placeholder="Your first/last name" aria-describedby="sizing-addon1" required>
      </div>

      <br>

      <div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1">Rotary Club Name</span>
<input type="text" name="rotaryClubName" class="form-control" placeholder="I.e. Phoenix Squaw Peak Rotary Club, Rotary eClub of the SouthWest USA, etc." aria-describedby="sizing-addon1" required>
      </div>

      <br>

      <div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1">E-mail</span>
<input type="email" name="email" class="form-control" placeholder="In proper user@example.com format" aria-describedby="sizing-addon1" required>
      </div>

      <br>

      <div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1">Phone Number</span>
<input type="tel" name="phone" class="form-control" placeholder="In proper 123-456-7890 format" aria-describedby="sizing-addon1" required>
      </div>

      <br>

      <script type="text/javascript">
      function showOtherField(name){
        if(name=='Other'){
          document.getElementById('otherField').innerHTML='<input type="text" name="other" class="form-control" placeholder="Non-binary, agender, etc." aria-describedby="sizing-addon1" required/>';
        }
        else{
           document.getElementById('otherField').innerHTML='';
        }
      }
      </script>

      <div class="form-group">
        <label for="gender">Gender:</label>
        <select required class="form-control" id="gender" name="gender" onchange="showOtherField(this.options[this.selectedIndex].value)">
          <option value="">Please select an option</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Prefer not to say">Prefer not to say</option>
          <option value="Other">Other:</option>
        </select>
      </div>
      <div id="otherField"></div>
      <br>

      <div class="form-group">
        <label for="advisorType">Advisor Type:</label>
        <select required class="form-control" id="advisorType" name="advisorType">
          <option value="">Please select an option</option>
          <option value="Rotarian Advisor">Rotarian Advisor</option>
          <option value="Faculty Advisor">Faculty Advisor</option>
        </select>
      </div>
      <br>


      <script type="text/javascript">
      function showOtherDietField(name){
        if(name=='Other'){
          document.getElementById('otherDietField').innerHTML='<input type="text" name="otherDiet" class="form-control" placeholder="Enter your other dietary restrictions here" aria-describedby="sizing-addon1" required/>';
        }
        else{
           document.getElementById('otherDietField').innerHTML='';
        }
      }
      </script>
      <div class="form-group">
        <label for="diet">Dietary Restrictions:</label>
        <select required class="form-control" id="diet" name="diet" onchange="showOtherDietField(this.options[this.selectedIndex].value)">
          <option value="">Please select an option</option>
          <option value="Vegetarian">Vegetarian</option>
          <option value="Vegan">Vegan</option>
          <option value="Kosher">Kosher</option>
          <option value="Halal">Halal</option>
          <option value="Gluten-Free">Gluten-Free</option>
          <option value="Daily-Free">Dairy-Free</option>
          <option value="None">None</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div id="otherDietField"></div>
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
