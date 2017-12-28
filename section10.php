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

  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->

  <!-- JS assets -->

  <script src="//code.jquery.com/jquery-1.12.4.js"></script>

  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>




</head>

<body>



  <!-- Navbar -->

  <div class="container">

    <div class="jumbotron">

      <div id="center">

        <h2>Interact District Conference 2018 Registration - Thank You!</h2>

        <h4>Thank you for completing registration! You will receive a confirmation email promptly.</h4>

        //Section 3
        <?php
        echo "<div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Course Name:</th> <th>Course Code:</th> <th>Course Section:</th> </tr> </thead> <tbody>";

              while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
                echo "<tr><td>{$row['studentName']}</td>".
                "<td>{$row['className']}</td>".
                "<td>{$row['classCode']}</td>".
                "<td>{$row['classSection']}</td></tr>";
              }

          echo "</tbody></table>";
          ?>
          //Section 4

          //Section 5

          //Section 7

          //Section 8

          //Section 9

          //End
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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>

  </html>
