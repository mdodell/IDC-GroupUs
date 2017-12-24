<?php
session_start();
echo("<script>console.log('Initial attempt');</script>");

if(isset($_POST['submit'])){
  if($_SESSION['student'] == true){
    echo("<script>console.log('Student attempt');</script>");
    echo("<script>window.location = '../section8.php';</script>");
  }
  else if($_SESSION['rotaractor'] == true){
    echo("<script>console.log('Rotaractor attempt');</script>");
    echo("<script>window.location = '../section9.php';</script>");
  }



}
?>

<!DOCTYPE html>

<head>

  <title>Group Registration - Advisor Information</title>

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

        <h2>Group Registration - Advisor Information</h2>

        <form name="Contact" method="POST">

          <div class="htmlField">

            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1">How many advisors are you registering?</span>
              <input type="text" name="advisorAmount" class="form-control" placeholder="I.e. 3, 5, 13, etc." aria-describedby="sizing-addon1">
            </div>

            <br>

            <script>
            function getInputs(amount){
              console.log("Script test");
              var div = document.createElement('div');
              var myHtml = "";

              for (i = 0; i < amount; i++) {
                console.log("In loop test");
                myHtml = '<p>Member #'+ i + ':</p><br>' + '<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Name</span> <input type="text" name="name[]" class="form-control" placeholder="Your first/last name" aria-describedby="sizing-addon1"> </div> <br>' + '<div class="form-group"> <label for="advisortype[]">Advisor Type:</label> <select class="form-control" id="advisortype[]"> <option selected>Please select an option</option> <option value="Rotarian Advisor">Rotarian Advisor</option> <option value="Faculty Advisor">Faculty Advisor</option> </select> </div> <br>';
                myHtml = myHtml + '<div class="form-group"> <label for="gender[]">Gender:</label> <select class="form-control" id="gender[]" onchange="showOtherField(this.options[this.selectedIndex].value)"> <option selected>Please select an option</option> <option value="Male">Male</option> <option value="Female">Female</option> <option value="Prefer not to say">Prefer not to say</option> <option value="Other">Other:</option> </select> </div> <div id="otherField"></div> <br>' + '<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Rotary Club/School Name</span> <input type="text" name="rotaryClubName[]" class="form-control" placeholder="I.e. Phoenix Squaw Peak Rotary Club, Centennial High School, etc." aria-describedby="sizing-addon1"> </div> <br>';
                myHtml = myHtml + '<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">E-mail</span> <input type="text" name="email[]" class="form-control" placeholder="In proper user@example.com format" aria-describedby="sizing-addon1"> </div><br>' + '<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Phone Number</span> <input type="text" name="phone[]" class="form-control" placeholder="In proper 123-456-7890 format" aria-describedby="sizing-addon1"> </div> <br>';
                myHtml = myHtml + '<div class="form-group"> <label for="diet[]">Dietary Restrictions:</label> <select class="form-control" id="diet[]" onchange="showOtherDietField(this.options[this.selectedIndex].value)"> <option selected>Please select an option</option> <option value="Vegetarian">Vegetarian</option> <option value="Vegan">Vegan</option> <option value="Kosher">Kosher</option> <option value="Halal">Halal</option> <option value="Gluten-Free">Gluten-Free</option> <option value="Daily-Free">Dairy-Free</option> <option value="None">None</option> <option value="Other">Other</option> </select> </div> <div id="otherDietField"></div> <br>';

              }
              div.innerHTML = myHtml + '<p><input class="btn btn-primary btn-lg" type="submit" name="submit" role="button"></p>';

              document.getElementById('htmlField').innerHTML = div.innerHTML;
              console.log("Post set test");

            }
            </script>

            <p><button type="button" class="btn btn-primary" onclick="getInputs(document.getElementById("advisorAmount").value)"><i class="btl bt-plus bt-lg"></i>&nbsp;&nbsp;Submit</button></p>
            
          </div>

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
