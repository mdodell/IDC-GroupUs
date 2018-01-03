<?php
session_start();
echo("<script>console.log('Initial attempt');</script>");
if(isset($_POST['submit'])){
  $_SESSION['section9Amount'] = $_POST['advisorAmount'];
  $_SESSION['section9Names'] = $_POST['name'];
  $_SESSION['section9Ages'] = $_POST['age'];
  $_SESSION['section9Genders'] = $_POST['gender'];
  $_SESSION['section9OtherGenders'] = $_POST['other'];
  $_SESSION['section9ClubNames'] = $_POST['rotaryClubName'];
  $_SESSION['section9Emails'] = $_POST['email'];
  $_SESSION['section9Phones'] = $_POST['phone'];
  $_SESSION['section9Diets'] = $_POST['diet'];
  $_SESSION['section9OtherDiets'] = $_POST['otherDiet'];
  echo("<script>console.log('Finished attempt');</script>");
  echo("<script>window.location = 'section10.php';</script>");
}
?>

<!DOCTYPE html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Group Registration - Rotaractor Information</title>

  <!-- CSS assets -->

  <link href="bootstrap.min.css" rel="stylesheet">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->

  <!-- JS assets -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>

</head>

<body>

<nav class="navbar navbar-default">

  <div class="container-fluid">

    <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </button>

        <a class="navbar-brand" href="#">IDC GroupUs</a>

    </div>

  </div>

</nav>

  <div class="container">

    <div class="jumbotron">

      <div id="center">

        <h2>Group Registration - Rotaractor Information</h2>
        <h4>Please enter all of the information below.</h4>

        <form name="Contact" method="POST">

          <div id="htmlField">

            <div class="input-group input-group-lg">
              <p>How many Rotaractors are you registering?</p>
              <input type="number" id="advisorAmount" name="advisorAmount" class="form-control" placeholder="I.e. 3, 5, 13, etc." aria-describedby="sizing-addon1" required>
            </div>

            <br>

            <script>
            function showOtherField(name, index){
              console.log(index);
              console.log($(".otherField:eq("+index+")")[0]);
              if(name=='Other'){
                $(".otherField:eq("+index+")")[0].innerHTML='<input type="text" name="other[]" class="form-control" placeholder="Non-binary, agender, etc." aria-describedby="sizing-addon1" required/>';
              }
              else{
                $(".otherField:eq("+index+")")[0].innerHTML='<input type="hidden" name="other[]" class="form-control" placeholder="Non-binary, agender, etc." aria-describedby="sizing-addon1"/>';
              }
            }
            function showOtherDietField(name,index){
              console.log(index);
              console.log($(".otherDietField:eq("+index+")")[0]);
              if(name=='Other'){
                $(".otherDietField:eq("+index+")")[0].innerHTML='<input type="text" name="otherDiet[]" class="form-control" placeholder="Enter your other dietary restrictions here" aria-describedby="sizing-addon1" required/>';
              }
              else{
                $(".otherDietField:eq("+index+")")[0].innerHTML='<input type="hidden" name="otherDiet[]" class="form-control" placeholder="Enter your other dietary restrictions here" aria-describedby="sizing-addon1"/>';
              }
            }
            function getInputs(amount){
              if(document.getElementById('advisorAmount').validity.valid && !document.getElementById('advisorAmount').validity.typeMismatch && document.getElementById('advisorAmount').value > 0){
                console.log("Script test");
                var myHtml = "";

                for (i = 0; i < amount; i++) {
                  console.log("In loop test");
                  myHtml = myHtml + '<p>Member #'+ parseInt(i+1) + ':</p><br>' + '<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Name</span> <input type="text" name="name[]" class="form-control" placeholder="Your first/last name" aria-describedby="sizing-addon1" required> </div> <br>' + '<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Age</span> <input type="number" name="age[]" class="form-control" placeholder="I.e. 18, 28, etc." aria-describedby="sizing-addon1" required> </div><br>';
                  myHtml = myHtml + '<div class="form-group"> <label for="gender[]">Gender:</label> <div id="'+i+'"><select required class="form-control" id="gender[]" name="gender[]" onchange="showOtherField(this.options[this.selectedIndex].value, this.parentElement.id)"> <option value="">Please select an option</option> <option value="Male">Male</option> <option value="Female">Female</option> <option value="Prefer not to say">Prefer not to say</option> <option value="Other">Other:</option> </select> </div> </div> <div id="otherField" class="otherField"></div> <br>' + '<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Rotary Club/School Name</span> <input type="text" name="rotaryClubName[]" class="form-control" placeholder="I.e. Phoenix Squaw Peak Rotary Club, Centennial High School, etc." aria-describedby="sizing-addon1" required> </div> <br>';
                  myHtml = myHtml + '<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">E-mail</span> <input type="email" name="email[]" class="form-control" placeholder="In proper user@example.com format" aria-describedby="sizing-addon1" required> </div><br>' + '<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Phone Number</span> <input type="tel" name="phone[]" class="form-control" placeholder="In proper 123-456-7890 format" aria-describedby="sizing-addon1" required> </div> <br>';
                  myHtml = myHtml + '<div class="form-group"> <label for="diet[]">Dietary Restrictions:</label> <div id="'+i+'"><select required class="form-control" id="diet[]" name="diet[]" onchange="showOtherDietField(this.options[this.selectedIndex].value, this.parentElement.id)"> <option value="">Please select an option</option> <option value="Vegetarian">Vegetarian</option> <option value="Vegan">Vegan</option> <option value="Kosher">Kosher</option> <option value="Halal">Halal</option> <option value="Gluten-Free">Gluten-Free</option> <option value="Daily-Free">Dairy-Free</option> <option value="None">None</option> <option value="Other">Other:</option> </select> </div> </div> <div id="otherDietField" class="otherDietField"></div> <br>';

                }
                myHtml = myHtml + '<p><input class="btn btn-primary btn-lg" type="submit" name="submit" role="button"></p>';

                document.getElementById('htmlField').innerHTML = myHtml;
                console.log("Post set test");
              }
              else{
                alert("Please enter a valid positive amount.");
              }

            }
            </script>

            <p><button type="button" class="btn btn-primary" onclick="getInputs(parseInt(document.getElementById('advisorAmount').value))"><i class="btl bt-plus bt-lg"></i>&nbsp;&nbsp;Submit</button></p>

          </div>

        </form>


      </div>

    </div>

  </div>

  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
