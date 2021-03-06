<?php
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION['advisor'] = false;
$_SESSION['student'] = false;
$_SESSION['rotaractor'] = false;
echo("<script>console.log('Initial attempt');</script>");

echo("<script>var session = eval('(" . json_encode($_SESSION) . ")');
 console.log(session);</script>");

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

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Group Registration</title>

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

                <li><a href="section1.php#"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;&nbsp;Start Over</a></li>

            </ul>

        </div>

    </div>

</nav>

<div class="container">

    <div class="jumbotron">

        <div id="center">

            <h2>Group Registration</h2>

            <p><strong>NOTE:</strong> Primary Contact <strong><span style="color: #8A0707">should also count themselves in their proper registration section</span></strong> (Interactor, Rotaractor, Adult/Advisor) if they plan on attending the Fall Leadership Conference. <br><br> This page is solely for contact as a whole, and the person noted here will not count as registered unless they are also included within the later sections.</p>

            <script>
                function checkYes(){
                    $(document).ready(function() {
                        if(document.querySelector('input[name="advisorRadio"]:checked').value == "No" && document.querySelector('input[name="studentRadio"]:checked').value == "No" && document.querySelector('input[name="rotaractorRadio"]:checked').value == "No"){
                            alert("Please say \"Yes\" to one of the three registration options, Interactor, Rotaractor, or Rotarian.");
                        }
                    });
                }
            </script>

            <form name="Contact" onsubmit="checkYes()" method="POST">

                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">Group Name</span>
                    <input type="text" name="groupName" class="form-control" placeholder="I.e. ASU Rotaract Club, Phoeix Squaw Peak Rotary Club, Mohave High School Interact Club" aria-describedby="sizing-addon1" required>
                </div>

                <br>

                <p>Primary Contact Information:</p>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">Name</span>
                    <input type="text" name="primaryContactName" class="form-control" placeholder="I.e. Jim Smith, Jane Doe" aria-describedby="sizing-addon1" required>
                </div>

                <br>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">Email Address</span>
                    <input type="email" name="primaryContactEmail" class="form-control" placeholder="In proper user@example.com format" aria-describedby="sizing-addon1" required>
                </div>

                <br>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">Phone Number</span>
                    <input type="tel" name="primaryContactPhone" class="form-control" placeholder="In proper 123-456-7890 format" aria-describedby="sizing-addon1" required>
                </div>

                <br>

                <div class="radio">
                    <p>Are you registering any Adults/Advisors?</p>
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
                <p><input class="btn btn-primary btn-lg" type="submit" name="submit" role="button"></p>

            </form>
        </div>

    </div>

</div>

<footer class="footer">

    <div class="container">

        <img style="float: right; width: 50%" src="interactLogo.png" itemprop="image" alt="Interact"/>

        <figcaption><i class="fas fa-code"></i>&nbsp;&nbsp; by Mitchell Dodell, Adam Fleishaker, Anthony Fong</figcaption>

    </div>

</footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
