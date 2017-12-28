<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Thank You</title>

  <!-- CSS assets -->

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>

  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->

  <!-- JS assets -->

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

  <script src="//use.fonticons.com/981576d2.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>

  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>





</head>

<body>



  <!-- Navbar -->

  <div class="container">

    <div class="jumbotron">

      <div id="center">

        <h2>Interact District Conference 2018 Registration - Thank You!</h2>

        <h4>Thank you for completing registration! You will receive a confirmation email promptly.</h4>

        <!-- Section 3 -->
        <?php
        if($_SESSION['section3Name']){
        echo '<div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Interact Club Name:</th> <th>Email:</th> <th>Phone Number:</th> <th>Gender:</th> <th>Grade:</th> <th>Diet:</th> </tr> </thead> <tbody>';
                echo "<tr><td>" .  $_SESSION['section3Name'] . "</td>".
                "<td>" . $_SESSION['section3ClubName'] . "</td>".
                "<td>" . $_SESSION['section3Email'] . "</td>".
                "<td>" . $_SESSION['section3Phone'] . "</td>".
                "<td>" . ($_SESSION['section3OtherGender'] ? $_SESSION['section3OtherGender'] : $_SESSION['section3Gender']) . "</td>".
                "<td>" . $_SESSION['section3Grade'] . "</td>".
                "<td>" . ($_SESSION['section3OtherDiet'] ? $_SESSION['section3OtherDiet'] : $_SESSION['section3Diet']) . "</td></tr>";

          echo '</tbody></table>';
        }
          ?>
          <!-- Section 4 -->
          <?php
          if($_SESSION['section4Name']){
          echo '<div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Rotaract Club Name:</th> <th>Email:</th> <th>Phone Number:</th> <th>Gender:</th> <th>Age:</th> <th>Diet:</th> </tr> </thead> <tbody>';
                  echo "<tr><td>" .  $_SESSION['section4Name'] . "</td>".
                  "<td>" . $_SESSION['section4ClubName'] . "</td>".
                  "<td>" . $_SESSION['section4Email'] . "</td>".
                  "<td>" . $_SESSION['section4Phone'] . "</td>".
                  "<td>" . ($_SESSION['section4OtherGender'] ? $_SESSION['section4OtherGender'] : $_SESSION['section4Gender']) . "</td>".
                  "<td>" . $_SESSION['section4Age'] . "</td>".
                  "<td>" . ($_SESSION['section4OtherDiet'] ? $_SESSION['section4OtherDiet'] : $_SESSION['section4Diet']) . "</td></tr>";

            echo '</tbody></table>';
          }
            ?>
          <!-- Section 5 -->

          <?php
          if($_SESSION['section5Name']){
          echo '<div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Rotary Club Name:</th> <th>Email:</th> <th>Phone Number:</th> <th>Gender:</th> <th>Advisor Type:</th> <th>Diet:</th> </tr> </thead> <tbody>';
                  echo "<tr><td>" .  $_SESSION['section5Name'] . "</td>".
                  "<td>" . $_SESSION['section5ClubName'] . "</td>".
                  "<td>" . $_SESSION['section5Email'] . "</td>".
                  "<td>" . $_SESSION['section5Phone'] . "</td>".
                  "<td>" . ($_SESSION['section5OtherGender'] ? $_SESSION['section5OtherGender'] : $_SESSION['section5Gender']) . "</td>".
                  "<td>" . $_SESSION['section5AdvisorType'] . "</td>".
                  "<td>" . ($_SESSION['section5OtherDiet'] ? $_SESSION['section5OtherDiet'] : $_SESSION['section5Diet']) . "</td></tr>";

            echo '</tbody></table>';
          }
            ?>
          <!-- Section 6 -->
          <?php
          if($_SESSION['section6GroupName']){
          echo '<div class="table-responsive"> <table class="table"> <thead> <tr> <th>Group Name:</th> <th>Primary Contact Name:</th> <th>Primary Contact Email:</th> <th>Primary Contact Phone Number:</th> </tr> </thead> <tbody>';
                  echo "<tr><td>" .  $_SESSION['section6GroupName'] . "</td>".
                  "<td>" . $_SESSION['section6ContactName'] . "</td>".
                  "<td>" . $_SESSION['section6ContactEmail'] . "</td>".
                  "<td>" . $_SESSION['section6ContactPhone'] . "</td></tr>";

            echo '</tbody></table>';
          }
            ?>
          <!-- Section 7 -->

          <!-- Section 8 -->

          <!-- Section 9 -->

          <!-- End -->
          <script>
          $(document).ready(function() {
            $('.table').DataTable({
              "order": [[ 0, "asc" ]],
              "pageLength": 100
            });
          });
          </script>
        </div>

      </div>

    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>

  </html>
