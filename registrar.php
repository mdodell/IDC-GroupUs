<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Registrar's Page</title>

  <!-- CSS assets -->

  <link href="style.css" rel="stylesheet">

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



  <!-- Navbar -->


  <nav class="navbar navbar-default">

    <div class="container-fluid">

      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

          <span class="sr-only">Toggle navigation</span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

        </button>

        <a class="navbar-brand" href="#"><span class="icon-GroupUs"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span></span>&nbsp;&nbsp;IDC GroupUs</a>

      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav">

          <li><a href="section1.php#"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;&nbsp;Home</a></li>

        </ul>

      </div>

    </div>

  </nav>

  <div class="container">

    <div class="jumbotron">

      <div id="center">

        <h2>Interact District Conference 2018 Registration</h2>

        <br>
        <?php

        $files = array();
        foreach (glob("*.xlsx") as $file) {
          $files[] = $file;
        }
        echo '<h4>Individual Registrations:</h4>';
        for($i=0; $i<count($files); $i++){
          if(substr( $files[$i], 0, 10 ) === "Individual"){
            echo '<p><a href="' . $files[$i] . '">' . $files[$i] . '</a></p>';
          }
        }
        echo '<h4>Group Registrations:</h4>';
        for($i=0; $i<count($files); $i++){
          if(substr( $files[$i], 0, 5 ) === "Group"){
            echo '<p><a href="' . $files[$i] . '">' . $files[$i] . '</a></p>';
          }
        }
        include 'totalAmount.php';
        echo '<h4>Total Number of People Registered:</h4>';
        echo '<p>' . $totalCount . '</p>';

        echo '<h4>Total $ Amount Owed:</h4>';
        echo '<p>$' . ($totalCount * 20) . '</p>';

        ?>

      </div>

    </div>

  </div>

  <footer class="footer">

    <div class="container">

      <img style="float: right; width: 50%" src="interactLogo.png" itemprop="image" alt="Interact"/>

    </div>

  </footer>

  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
