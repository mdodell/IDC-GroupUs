<!DOCTYPE html>

<head>

<title>Interactor Individidual Registration</title>

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

      <h2>Interactor Individidual Registration</h2>

      <br>

      <form name="Contact" method="POST">

      <div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1">Name</span>
<input type="text" name="name" class="form-control" placeholder="Your first/last name" aria-describedby="sizing-addon1" required>
      </div>

      <br>

      <div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1">Interact Club Name</span>
<input type="text" name="interactClubName" class="form-control" placeholder="I.e. Perry High School Interact Club, Centennial High School Interact Club" aria-describedby="sizing-addon1" required>
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
          document.getElementById('otherField').innerHTML='<input type="text" name="other" class="form-control" placeholder="Non-binary, agender, etc." aria-describedby="sizing-addon1" required />';
        }
        else{
           document.getElementById('otherField').innerHTML='';
        }
      }
      </script>

      <div class="form-group">
        <label for="gender">Gender:</label>
        <select required class="form-control" id="gender" onchange="showOtherField(this.options[this.selectedIndex].value)">
          <option value="">Please select an option</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Prefer not to say">Prefer not to say</option>
          <option value="Other:">Other:</option>
        </select>
      </div>
      <div id="otherField"></div>
      <br>

      <div class="form-group">
        <label for="grade">Grade:</label>
        <select required class="form-control" id="grade">
          <option value="">Please select an option</option>
          <option value="6th">6th</option>
          <option value="7th">7th</option>
          <option value="8th">8th</option>
          <option value="9th">9th</option>
          <option value="10th">10th</option>
          <option value="11th">11th</option>
          <option value="12th">12th</option>
        </select>
      </div>
      <br>


      <script type="text/javascript">
      function showOtherDietField(name){
        if(name=='Other'){
          document.getElementById('otherDietField').innerHTML='<input type="text" name="otherDiet" class="form-control" placeholder="Enter your other dietary restrictions here" aria-describedby="sizing-addon1" required />';
        }
        else{
           document.getElementById('otherDietField').innerHTML='';
        }
      }
      </script>
      <div class="form-group">
        <label for="diet">Dietary Restrictions:</label>
        <select required class="form-control" id="diet" onchange="showOtherDietField(this.options[this.selectedIndex].value)">
          <option value="">Please select an option</option>
          <option value="Vegetarian">Vegetarian</option>
          <option value="Vegan">Vegan</option>
          <option value="Kosher">Kosher</option>
          <option value="Halal">Halal</option>
          <option value="Gluten-Free">Gluten-Free</option>
          <option value="Daily-Free">Dairy-Free</option>
          <option value="None">None</option>
          <option value="Other">Other:</option>
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
