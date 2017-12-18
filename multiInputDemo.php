<?php
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
       }

?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Multi-User Input Demo</title>

    <!-- CSS assets -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->



  </head>

  <body>



<!-- Navbar -->

<div class="container">

<div class="jumbotron">

    <div id="center">

        <h2>Registration Demo</h2>

        <br>

        <form name="Contact" method="POST">

<div id="entries">

        <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Name</span>
  <input type="text" name="name[]" class="form-control" placeholder="Your name" aria-describedby="sizing-addon1">
        </div>

        <br>

        <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Email</span>
  <input type="text" name="email[]" class="form-control" placeholder="In proper user@example.com format" aria-describedby="sizing-addon1">
        </div>

        <br>

        <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Phone Number</span>
  <input type="text" name="phone[]" class="form-control" placeholder="In proper 123-456-7890 format" aria-describedby="sizing-addon1">
        </div>

        <br>
</div>




        <script>
        function newInput(){
 var div = document.createElement('div');

    div.innerHTML = '<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Name</span> <input type="text" name="name[]" class="form-control" placeholder="Your name" aria-describedby="sizing-addon1"> </div> <br> <div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Email</span> <input type="text" name="email[]" class="form-control" placeholder="In proper user@example.com format" aria-describedby="sizing-addon1"> </div> <br> <div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Phone Number</span> <input type="text" name="phone[]" class="form-control" placeholder="In proper 123-456-7890 format" aria-describedby="sizing-addon1"> </div> <br>';

     document.getElementById('entries').appendChild(div);

        }
        </script>

        <p><button type="button" class="btn btn-primary" onclick="newInput()"><i class="btl bt-plus bt-lg"></i>&nbsp;&nbsp;Add Another User</button></p>

        <p><input class="btn btn-primary btn-lg" type="submit" name="submit" role="button"></p>

        </form>

    <?php

    if(isset($_POST['submit'])){
        echo "<br><p>";
       foreach ($name as $namevalue) {
          echo "Name Entry #" . array_search($namevalue, $name) . ": " . $namevalue . "<br>";
       }
echo "<br>";
       foreach ($email as $emailvalue) {
          echo "Email Entry #" . array_search($emailvalue, $email) . ": " . $emailvalue . "<br>";
       }
echo "<br>";
       foreach ($phone as $phonevalue) {
          echo "Phone Number Entry #" . array_search($phonevalue, $phone) . ": " . $phonevalue . "<br>";
       }
        echo "</p>";
    }
    ?>

    </div>

</div>

</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>

</html>
