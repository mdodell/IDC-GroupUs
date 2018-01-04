<?php
session_start();
$_SESSION['count'] = 0;
if($_SESSION['section3Name']){
  $_SESSION['count']++;
}
if($_SESSION['section4Name']){
  $_SESSION['count']++;
}
if($_SESSION['section5Name']){
  $_SESSION['count']++;
}
if($_SESSION['section7Names']){
  for($i=0; $i<count($_SESSION['section7Names']); $i++){
    $_SESSION['count']++;
  }
}
if($_SESSION['section8Names']){
  for($i=0; $i<count($_SESSION['section8Names']); $i++){
    $_SESSION['count']++;
  }
}
if($_SESSION['section9Names']){
  for($i=0; $i<count($_SESSION['section9Names']); $i++){
    $_SESSION['count']++;
  }
}
include 'totalAmount.php';
$count = $totalCount + $_SESSION['count'];
$var_str = var_export($count, true);
$var = "<?php\n\n\$totalCount = $var_str;\n\n?>";
file_put_contents('totalAmount.php', $var);
?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Thank You!</title>

  <!-- CSS assets -->

  <link href="style.css" rel="stylesheet">

  <link href="bootstrap.min.css" rel="stylesheet">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>

  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->

  <!-- JS assets -->

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

  <script src="//use.fonticons.com/981576d2.js"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>

  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>





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

          <li><a href="section1.php#"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;&nbsp;Start Over</a></li>

        </ul>

      </div>

    </div>

  </nav>

  <div class="container">

    <div class="jumbotron">

      <div id="center">

        <h2>Interact District Conference 2018 Registration - Thank You!</h2>

        <div id="confirmStatus"></div>

        <?php

        echo '<h4>Thank you for registering for the 2018 Interact District Conference. The conference will be held at Perry High School (1919 E Queen Creek Rd, Gilbert, AZ 85297) on Saturday, February 24th, 2018. <br><br> Please review all of the information in your registration below. If any of the information is incorrect, please contact Kathy Rossetti (kathy.rossetti@cox.net). <br><br> You have <strong>' . $_SESSION['count'] . ' ' . ($_SESSION['count'] == 1 ? 'person' : 'people') . ' registered.</strong> Your registration totals to <strong>$' . ($_SESSION['count'] * 20) . '.</strong> Checks should be made payable to Interact District 5495. Please sent a check to Kathy Rossetti, Interact Registrar, 21405 W. Brittle Bush Lane, Buckeye, AZ 85396. </h4>';

        ?>

        <br>

        <!-- Section 3 -->
        <?php
        if($_SESSION['section3Name']){
          echo '<h4>Registered Individual Interactor:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Interact Club Name:</th> <th>Email:</th> <th>Phone Number:</th> <th>Gender:</th> <th>Grade:</th> <th>Diet:</th> </tr> </thead> <tbody>';
          echo "<tr><td>" .  $_SESSION['section3Name'] . "</td>".
          "<td>" . $_SESSION['section3ClubName'] . "</td>".
          "<td>" . $_SESSION['section3Email'] . "</td>".
          "<td>" . $_SESSION['section3Phone'] . "</td>".
          "<td>" . ($_SESSION['section3OtherGender'] ? $_SESSION['section3OtherGender'] : $_SESSION['section3Gender']) . "</td>".
          "<td>" . $_SESSION['section3Grade'] . "</td>".
          "<td>" . ($_SESSION['section3OtherDiet'] ? $_SESSION['section3OtherDiet'] : $_SESSION['section3Diet']) . "</td></tr>";

          echo '</tbody></table><br>';
        }
        ?>
        <!-- Section 4 -->
        <?php
        if($_SESSION['section4Name']){
          echo '<h4>Registered Individual Rotaractor:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Rotaract Club Name:</th> <th>Email:</th> <th>Phone Number:</th> <th>Gender:</th> <th>Age:</th> <th>Diet:</th> </tr> </thead> <tbody>';
          echo "<tr><td>" .  $_SESSION['section4Name'] . "</td>".
          "<td>" . $_SESSION['section4ClubName'] . "</td>".
          "<td>" . $_SESSION['section4Email'] . "</td>".
          "<td>" . $_SESSION['section4Phone'] . "</td>".
          "<td>" . ($_SESSION['section4OtherGender'] ? $_SESSION['section4OtherGender'] : $_SESSION['section4Gender']) . "</td>".
          "<td>" . $_SESSION['section4Age'] . "</td>".
          "<td>" . ($_SESSION['section4OtherDiet'] ? $_SESSION['section4OtherDiet'] : $_SESSION['section4Diet']) . "</td></tr>";

          echo '</tbody></table><br>';
        }
        ?>
        <!-- Section 5 -->

        <?php
        if($_SESSION['section5Name']){
          echo '<h4>Registered Individual Rotarian:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Rotary Club Name:</th> <th>Email:</th> <th>Phone Number:</th> <th>Gender:</th> <th>Advisor Type:</th> <th>Diet:</th> </tr> </thead> <tbody>';
          echo "<tr><td>" .  $_SESSION['section5Name'] . "</td>".
          "<td>" . $_SESSION['section5ClubName'] . "</td>".
          "<td>" . $_SESSION['section5Email'] . "</td>".
          "<td>" . $_SESSION['section5Phone'] . "</td>".
          "<td>" . ($_SESSION['section5OtherGender'] ? $_SESSION['section5OtherGender'] : $_SESSION['section5Gender']) . "</td>".
          "<td>" . $_SESSION['section5AdvisorType'] . "</td>".
          "<td>" . ($_SESSION['section5OtherDiet'] ? $_SESSION['section5OtherDiet'] : $_SESSION['section5Diet']) . "</td></tr>";

          echo '</tbody></table><br>';
        }
        ?>
        <!-- Section 6 -->
        <?php
        if($_SESSION['section6GroupName']){
          echo '<h4>Registered Group Information:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Group Name:</th> <th>Primary Contact Name:</th> <th>Primary Contact Email:</th> <th>Primary Contact Phone Number:</th> </tr> </thead> <tbody>';
          echo "<tr><td>" .  $_SESSION['section6GroupName'] . "</td>".
          "<td>" . $_SESSION['section6ContactName'] . "</td>".
          "<td>" . $_SESSION['section6ContactEmail'] . "</td>".
          "<td>" . $_SESSION['section6ContactPhone'] . "</td></tr>";

          echo '</tbody></table><br>';
        }
        ?>
        <!-- Section 7 -->
        <?php
        if($_SESSION['section7Names']){
          echo '<h4>Registered Faculty/Rotarian Advisors:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Advisor Type:</th> <th>Gender:</th> <th>Club Name:</th> <th>Email:</th> <th>Phone:</th> <th>Diet:</th></tr> </thead> <tbody>';
          for($i=0; $i<count($_SESSION['section7Names']); $i++){
            echo "<tr><td>" .  $_SESSION['section7Names'][$i] . "</td>".
            "<td>" . $_SESSION['section7AdvisorTypes'][$i] . "</td>".
            "<td>" . ($_SESSION['section7OtherGenders'][$i] ? $_SESSION['section7OtherGenders'][$i] : $_SESSION['section7Genders'][$i]) . "</td>".
            "<td>" . $_SESSION['section7ClubNames'][$i] . "</td>".
            "<td>" . $_SESSION['section7Emails'][$i] . "</td>".
            "<td>" . $_SESSION['section7Phones'][$i] . "</td>".
            "<td>" . ($_SESSION['section7OtherDiets'][$i] ? $_SESSION['section7OtherDiets'][$i] : $_SESSION['section7Diets'][$i]) . "</td></tr>";
          }
          echo '</tbody></table><br>';
        }
        ?>
        <!-- Section 8 -->
        <?php
        if($_SESSION['section8Names']){
          echo '<h4>Registered Students:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Grade:</th> <th>Gender:</th> <th>Email:</th> <th>Phone:</th> <th>Diet:</th></tr> </thead> <tbody>';
          for($i=0; $i<count($_SESSION['section8Names']); $i++){
            echo "<tr><td>" .  $_SESSION['section8Names'][$i] . "</td>".
            "<td>" . $_SESSION['section8Grades'][$i] . "</td>".
            "<td>" . ($_SESSION['section8OtherGenders'][$i] ? $_SESSION['section8OtherGenders'][$i] : $_SESSION['section8Genders'][$i]) . "</td>".
            "<td>" . $_SESSION['section8Emails'][$i] . "</td>".
            "<td>" . $_SESSION['section8Phones'][$i] . "</td>".
            "<td>" . ($_SESSION['section8OtherDiets'][$i] ? $_SESSION['section8OtherDiets'][$i] : $_SESSION['section8Diets'][$i]) . "</td></tr>";
          }
          echo '</tbody></table><br>';
        }
        ?>
        <!-- Section 9 -->
        <?php
        if($_SESSION['section9Names']){
          echo '<h4>Registered Rotaractors:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Age:</th> <th>Gender:</th> <th>Club Name:</th> <th>Email:</th> <th>Phone:</th> <th>Diet:</th></tr> </thead> <tbody>';
          for($i=0; $i<count($_SESSION['section9Names']); $i++){
            echo "<tr><td>" .  $_SESSION['section9Names'][$i] . "</td>".
            "<td>" . $_SESSION['section9Ages'][$i] . "</td>".
            "<td>" . ($_SESSION['section9OtherGenders'][$i] ? $_SESSION['section9OtherGenders'][$i] : $_SESSION['section9Genders'][$i]) . "</td>".
            "<td>" . $_SESSION['section9ClubNames'][$i] . "</td>".
            "<td>" . $_SESSION['section9Emails'][$i] . "</td>".
            "<td>" . $_SESSION['section9Phones'][$i] . "</td>".
            "<td>" . ($_SESSION['section9OtherDiets'][$i] ? $_SESSION['section9OtherDiets'][$i] : $_SESSION['section9Diets'][$i]) . "</td></tr>";
          }
          echo '</tbody></table><br>';
        }
        ?>
        <!-- File creation -->
        <?php
        require_once('vendor/autoload.php');
        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $rowNum = 1;

        //Data input
        $excelData = '';
        if($_SESSION['section3Name']){
          $sheet->setCellValue('A' . $rowNum, 'Name:');
          $sheet->setCellValue('B' . $rowNum, 'Interact Club Name:');
          $sheet->setCellValue('C' . $rowNum, 'Email:');
          $sheet->setCellValue('D' . $rowNum, 'Phone Number:');
          $sheet->setCellValue('E' . $rowNum, 'Gender:');
          $sheet->setCellValue('F' . $rowNum, 'Grade:');
          $sheet->setCellValue('G' . $rowNum, 'Diet:');
          $sheet->getStyle('A' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('B' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('C' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('D' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('E' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('F' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('G' . $rowNum)->getFont()->setBold(true);
          $rowNum++;
          $sheet->setCellValue('A' . $rowNum, $_SESSION['section3Name']);
          $sheet->setCellValue('B' . $rowNum, $_SESSION['section3ClubName']);
          $sheet->setCellValue('C' . $rowNum, $_SESSION['section3Email']);
          $sheet->setCellValue('D' . $rowNum, $_SESSION['section3Phone']);
          $sheet->setCellValue('E' . $rowNum, ($_SESSION['section3OtherGender'] ? $_SESSION['section3OtherGender'] : $_SESSION['section3Gender']));
          $sheet->setCellValue('F' . $rowNum, $_SESSION['section3Grade']);
          $sheet->setCellValue('G' . $rowNum, ($_SESSION['section3OtherDiet'] ? $_SESSION['section3OtherDiet'] : $_SESSION['section3Diet']));
          $rowNum++;
          $rowNum++; //Extra row for space
        }
        if($_SESSION['section4Name']){
          $sheet->setCellValue('A' . $rowNum, 'Name:');
          $sheet->setCellValue('B' . $rowNum, 'Rotaract Name:');
          $sheet->setCellValue('C' . $rowNum, 'Email:');
          $sheet->setCellValue('D' . $rowNum, 'Phone Number:');
          $sheet->setCellValue('E' . $rowNum, 'Gender:');
          $sheet->setCellValue('F' . $rowNum, 'Age:');
          $sheet->setCellValue('G' . $rowNum, 'Diet:');
          $sheet->getStyle('A' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('B' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('C' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('D' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('E' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('F' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('G' . $rowNum)->getFont()->setBold(true);
          $rowNum++;
          $sheet->setCellValue('A' . $rowNum, $_SESSION['section4Name']);
          $sheet->setCellValue('B' . $rowNum, $_SESSION['section4ClubName']);
          $sheet->setCellValue('C' . $rowNum, $_SESSION['section4Email']);
          $sheet->setCellValue('D' . $rowNum, $_SESSION['section4Phone']);
          $sheet->setCellValue('E' . $rowNum, ($_SESSION['section4OtherGender'] ? $_SESSION['section4OtherGender'] : $_SESSION['section4Gender']));
          $sheet->setCellValue('F' . $rowNum,  $_SESSION['section4Age']);
          $sheet->setCellValue('G' . $rowNum, ($_SESSION['section4OtherDiet'] ? $_SESSION['section4OtherDiet'] : $_SESSION['section4Diet']));
          $rowNum++;
          $rowNum++; //Extra row for space
        }
        if($_SESSION['section5Name']){
          $sheet->setCellValue('A' . $rowNum, 'Name:');
          $sheet->setCellValue('B' . $rowNum, 'Rotary Club Name:');
          $sheet->setCellValue('C' . $rowNum, 'Email:');
          $sheet->setCellValue('D' . $rowNum, 'Phone Number:');
          $sheet->setCellValue('E' . $rowNum, 'Gender:');
          $sheet->setCellValue('F' . $rowNum, 'Advisor Type:');
          $sheet->setCellValue('G' . $rowNum, 'Diet:');
          $sheet->getStyle('A' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('B' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('C' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('D' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('E' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('F' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('G' . $rowNum)->getFont()->setBold(true);
          $rowNum++;
          $sheet->setCellValue('A' . $rowNum, $_SESSION['section5Name']);
          $sheet->setCellValue('B' . $rowNum, $_SESSION['section5ClubName']);
          $sheet->setCellValue('C' . $rowNum, $_SESSION['section5Email']);
          $sheet->setCellValue('D' . $rowNum, $_SESSION['section5Phone']);
          $sheet->setCellValue('E' . $rowNum, ($_SESSION['section5OtherGender'] ? $_SESSION['section5OtherGender'] : $_SESSION['section5Gender']));
          $sheet->setCellValue('F' . $rowNum,  $_SESSION['section5AdvisorType']);
          $sheet->setCellValue('G' . $rowNum, ($_SESSION['section5OtherDiet'] ? $_SESSION['section5OtherDiet'] : $_SESSION['section5Diet']));
          $rowNum++;
          $rowNum++; //Extra row for space
        }
        if($_SESSION['section6GroupName']){
          $sheet->setCellValue('A' . $rowNum, 'Group Name:');
          $sheet->setCellValue('B' . $rowNum, 'Primary Contact Name:');
          $sheet->setCellValue('C' . $rowNum, 'Primary Contact Email:');
          $sheet->setCellValue('D' . $rowNum, 'Primary Contact Phone Number:');
          $sheet->getStyle('A' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('B' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('C' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('D' . $rowNum)->getFont()->setBold(true);
          $rowNum++;
          $sheet->setCellValue('A' . $rowNum, $_SESSION['section6GroupName']);
          $sheet->setCellValue('B' . $rowNum, $_SESSION['section6ContactName']);
          $sheet->setCellValue('C' . $rowNum, $_SESSION['section6ContactEmail']);
          $sheet->setCellValue('D' . $rowNum, $_SESSION['section6ContactPhone']);
          $rowNum++;
          $rowNum++; //Extra row for space
        }
        if($_SESSION['section7Names']){
          $sheet->setCellValue('A' . $rowNum, 'Name:');
          $sheet->setCellValue('B' . $rowNum, 'Advsior Type:');
          $sheet->setCellValue('C' . $rowNum, 'Gender:');
          $sheet->setCellValue('D' . $rowNum, 'Club Name:');
          $sheet->setCellValue('E' . $rowNum, 'Email:');
          $sheet->setCellValue('F' . $rowNum, 'Phone:');
          $sheet->setCellValue('G' . $rowNum, 'Diet:');
          $sheet->getStyle('A' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('B' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('C' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('D' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('E' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('F' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('G' . $rowNum)->getFont()->setBold(true);
          $rowNum++;
          for($i=0; $i<count($_SESSION['section7Names']); $i++){
            $sheet->setCellValue('A' . $rowNum, $_SESSION['section7Names'][$i]);
            $sheet->setCellValue('B' . $rowNum, $_SESSION['section7AdvisorTypes'][$i]);
            $sheet->setCellValue('C' . $rowNum, ($_SESSION['section7OtherGenders'][$i] ? $_SESSION['section7OtherGenders'][$i] : $_SESSION['section7Genders'][$i]));
            $sheet->setCellValue('D' . $rowNum, $_SESSION['section7ClubNames'][$i]);
            $sheet->setCellValue('E' . $rowNum, $_SESSION['section7Emails'][$i]);
            $sheet->setCellValue('F' . $rowNum,  $_SESSION['section7Phones'][$i]);
            $sheet->setCellValue('G' . $rowNum, ($_SESSION['section7OtherDiets'][$i] ? $_SESSION['section7OtherDiets'][$i] : $_SESSION['section7Diets'][$i]));
            $rowNum++;
          }
          $rowNum++; //Extra row for space
        }
        if($_SESSION['section8Names']){
          $sheet->setCellValue('A' . $rowNum, 'Name:');
          $sheet->setCellValue('B' . $rowNum, 'Grade:');
          $sheet->setCellValue('C' . $rowNum, 'Gender:');
          $sheet->setCellValue('D' . $rowNum, 'Email:');
          $sheet->setCellValue('E' . $rowNum, 'Phone:');
          $sheet->setCellValue('F' . $rowNum, 'Diet:');
          $sheet->getStyle('A' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('B' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('C' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('D' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('E' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('F' . $rowNum)->getFont()->setBold(true);
          $rowNum++;
          for($i=0; $i<count($_SESSION['section8Names']); $i++){
            $sheet->setCellValue('A' . $rowNum, $_SESSION['section8Names'][$i]);
            $sheet->setCellValue('B' . $rowNum, $_SESSION['section8Grades'][$i]);
            $sheet->setCellValue('C' . $rowNum, ($_SESSION['section8OtherGenders'][$i] ? $_SESSION['section8OtherGenders'][$i] : $_SESSION['section8Genders'][$i]));
            $sheet->setCellValue('D' . $rowNum, $_SESSION['section8Emails'][$i]);
            $sheet->setCellValue('E' . $rowNum, $_SESSION['section8Phones'][$i]);
            $sheet->setCellValue('F' . $rowNum, ($_SESSION['section8OtherDiets'][$i] ? $_SESSION['section8OtherDiets'][$i] : $_SESSION['section8Diets'][$i]));
            $rowNum++;
          }
          $rowNum++; //Extra row for space
        }
        if($_SESSION['section9Names']){
          $sheet->setCellValue('A' . $rowNum, 'Name:');
          $sheet->setCellValue('B' . $rowNum, 'Age:');
          $sheet->setCellValue('C' . $rowNum, 'Gender:');
          $sheet->setCellValue('D' . $rowNum, 'Club Name:');
          $sheet->setCellValue('E' . $rowNum, 'Email:');
          $sheet->setCellValue('F' . $rowNum, 'Phone:');
          $sheet->setCellValue('G' . $rowNum, 'Diet:');
          $sheet->getStyle('A' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('B' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('C' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('D' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('E' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('F' . $rowNum)->getFont()->setBold(true);
          $sheet->getStyle('G' . $rowNum)->getFont()->setBold(true);
          $rowNum++;
          for($i=0; $i<count($_SESSION['section9Names']); $i++){
            $sheet->setCellValue('A' . $rowNum, $_SESSION['section9Names'][$i]);
            $sheet->setCellValue('B' . $rowNum, $_SESSION['section9Ages'][$i]);
            $sheet->setCellValue('C' . $rowNum, ($_SESSION['section9OtherGenders'][$i] ? $_SESSION['section9OtherGenders'][$i] : $_SESSION['section9Genders'][$i]));
            $sheet->setCellValue('D' . $rowNum, $_SESSION['section9ClubNames'][$i]);
            $sheet->setCellValue('E' . $rowNum, $_SESSION['section9Emails'][$i]);
            $sheet->setCellValue('F' . $rowNum, $_SESSION['section9Phones'][$i]);
            $sheet->setCellValue('G' . $rowNum, ($_SESSION['section9OtherDiets'][$i] ? $_SESSION['section9OtherDiets'][$i] : $_SESSION['section9Diets'][$i]));
            $rowNum++;
          }
          $rowNum++; //Extra row for space
        }

        //File naming
        $excelFileName = 'test';
        if($_SESSION['section3Email']){
          $excelFileName = 'Individual - ' . $_SESSION['section3Name'];
        }
        else if($_SESSION['section4Email']){
          $excelFileName = 'Individual - ' . $_SESSION['section4Name'];
        }
        else if($_SESSION['section5Email']){
          $excelFileName = 'Individual - ' . $_SESSION['section5Name'];
        }
        else{
          $excelFileName = 'Group - ' . $_SESSION['section6GroupName'];
        }
        $excelFileName = $excelFileName . '.xlsx';

        //File writing
        $writer = new Xlsx($spreadsheet);
        $writer->save($excelFileName);

        ?>

        <?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require './PHPMailer-6.0.2/src/Exception.php';
        require './PHPMailer-6.0.2/src/PHPMailer.php';
        require './PHPMailer-6.0.2/src/SMTP.php';

        $mail = new PHPMailer(true);
        try {

          //Recipients
          $mail->setFrom('noreply@groupus.events'); //Change out when hosted externally
          $mail->addAddress('lorallilyn@gmail.com');
          $mail->addAddress('ryleehanson27@gmail.com');
          $mail->addAddress('arthts@msn.com');
          $mail->addAddress('kathy.rossetti@cox.net');
          $mail->addAddress('idc5495contact@gmail.com');
          $mail->addCC('adamfleishaker@gmail.com');
          $mail->addCC('dodellmitchell@gmail.com');


          //Attachments
          $mail->addAttachment($excelFileName); // Add attachments

          //Content
          $mail->isHTML(true); // Set email format to HTML
          $mail->AltBody = 'Confirmation email. Please view this in an HTML-enabled browser.';

          // Subject
          $subject = 'IDC Confirmation: ';

          if($_SESSION['section3Email']){
            $subject.= 'Individual - ' . $_SESSION['section3Name'];
          }
          else if($_SESSION['section4Email']){
            $subject.= 'Individual - ' . $_SESSION['section4Name'];
          }
          else if($_SESSION['section5Email']){
            $subject.= 'Individual - ' . $_SESSION['section5Name'];
          }
          else{
            $subject.= 'Group - ' . $_SESSION['section6GroupName'];
          }
          $subject.= " [". date('Y/m/d H:i:s') . "]";


          $mail->Subject = $subject;

          // Message
          $body = '<html> <body> <h2>Interact District Conference 2018 Registration Confirmation</h2> <h4>Thank you for registering for the 2018 Interact District Conference. The conference will be held at Perry High School (1919 E Queen Creek Rd, Gilbert, AZ 85297) on Saturday, February 24th, 2018. <br><br> Please review all of the information in your registration below. If any of the information is incorrect, please contact Kathy Rossetti (kathy.rossetti@cox.net). <br><br> You have <strong>' . $_SESSION['count'] . ' ' . ($_SESSION['count'] == 1 ? 'person' : 'people') . ' registered.</strong> Your registration totals to <strong>$' . ($_SESSION['count'] * 20) . '.</strong> Checks should be made payable to Interact District 5495. Please sent a check to Kathy Rossetti, Interact Registrar, 21405 W. Brittle Bush Lane, Buckeye, AZ 85396. </h4> <br>';

          if($_SESSION['section3Name']){
            $body = $body . '<h4>Registered Individual Interactor:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Interact Club Name:</th> <th>Email:</th> <th>Phone Number:</th> <th>Gender:</th> <th>Grade:</th> <th>Diet:</th> </tr> </thead> <tbody>';
            $body = $body . "<tr><td>" .  $_SESSION['section3Name'] . "</td>".
            "<td>" . $_SESSION['section3ClubName'] . "</td>".
            "<td>" . $_SESSION['section3Email'] . "</td>".
            "<td>" . $_SESSION['section3Phone'] . "</td>".
            "<td>" . ($_SESSION['section3OtherGender'] ? $_SESSION['section3OtherGender'] : $_SESSION['section3Gender']) . "</td>".
            "<td>" . $_SESSION['section3Grade'] . "</td>".
            "<td>" . ($_SESSION['section3OtherDiet'] ? $_SESSION['section3OtherDiet'] : $_SESSION['section3Diet']) . "</td></tr>";

            $body = $body . '</tbody></table><br>';
          }
          if($_SESSION['section4Name']){
            $body = $body . '<h4>Registered Individual Rotaractor:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Rotaract Club Name:</th> <th>Email:</th> <th>Phone Number:</th> <th>Gender:</th> <th>Age:</th> <th>Diet:</th> </tr> </thead> <tbody>';
            $body = $body . "<tr><td>" .  $_SESSION['section4Name'] . "</td>".
            "<td>" . $_SESSION['section4ClubName'] . "</td>".
            "<td>" . $_SESSION['section4Email'] . "</td>".
            "<td>" . $_SESSION['section4Phone'] . "</td>".
            "<td>" . ($_SESSION['section4OtherGender'] ? $_SESSION['section4OtherGender'] : $_SESSION['section4Gender']) . "</td>".
            "<td>" . $_SESSION['section4Age'] . "</td>".
            "<td>" . ($_SESSION['section4OtherDiet'] ? $_SESSION['section4OtherDiet'] : $_SESSION['section4Diet']) . "</td></tr>";

            $body = $body . '</tbody></table><br>';
          }
          if($_SESSION['section5Name']){
            $body = $body . '<h4>Registered Individual Rotarian:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Rotary Club Name:</th> <th>Email:</th> <th>Phone Number:</th> <th>Gender:</th> <th>Advisor Type:</th> <th>Diet:</th> </tr> </thead> <tbody>';
            $body = $body . "<tr><td>" .  $_SESSION['section5Name'] . "</td>".
            "<td>" . $_SESSION['section5ClubName'] . "</td>".
            "<td>" . $_SESSION['section5Email'] . "</td>".
            "<td>" . $_SESSION['section5Phone'] . "</td>".
            "<td>" . ($_SESSION['section5OtherGender'] ? $_SESSION['section5OtherGender'] : $_SESSION['section5Gender']) . "</td>".
            "<td>" . $_SESSION['section5AdvisorType'] . "</td>".
            "<td>" . ($_SESSION['section5OtherDiet'] ? $_SESSION['section5OtherDiet'] : $_SESSION['section5Diet']) . "</td></tr>";

            $body = $body . '</tbody></table><br>';
          }
          if($_SESSION['section6GroupName']){
            $body = $body . '<h4>Registered Group Information:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Group Name:</th> <th>Primary Contact Name:</th> <th>Primary Contact Email:</th> <th>Primary Contact Phone Number:</th> </tr> </thead> <tbody>';
            $body = $body . "<tr><td>" .  $_SESSION['section6GroupName'] . "</td>".
            "<td>" . $_SESSION['section6ContactName'] . "</td>".
            "<td>" . $_SESSION['section6ContactEmail'] . "</td>".
            "<td>" . $_SESSION['section6ContactPhone'] . "</td></tr>";

            $body = $body . '</tbody></table><br>';
          }
          if($_SESSION['section7Names']){
            $body = $body . '<h4>Registered Faculty/Rotarian Advisors:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Advisor Type:</th> <th>Gender:</th> <th>Club Name:</th> <th>Email:</th> <th>Phone:</th> <th>Diet:</th></tr> </thead> <tbody>';
            for($i=0; $i<count($_SESSION['section7Names']); $i++){
              $body = $body . "<tr><td>" .  $_SESSION['section7Names'][$i] . "</td>".
              "<td>" . $_SESSION['section7AdvisorTypes'][$i] . "</td>".
              "<td>" . ($_SESSION['section7OtherGenders'][$i] ? $_SESSION['section7OtherGenders'][$i] : $_SESSION['section7Genders'][$i]) . "</td>".
              "<td>" . $_SESSION['section7ClubNames'][$i] . "</td>".
              "<td>" . $_SESSION['section7Emails'][$i] . "</td>".
              "<td>" . $_SESSION['section7Phones'][$i] . "</td>".
              "<td>" . ($_SESSION['section7OtherDiets'][$i] ? $_SESSION['section7OtherDiets'][$i] : $_SESSION['section7Diets'][$i]) . "</td></tr>";
            }
            $body = $body . '</tbody></table><br>';
          }
          if($_SESSION['section8Names']){
            $body = $body . '<h4>Registered Students:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Grade:</th> <th>Gender:</th> <th>Email:</th> <th>Phone:</th> <th>Diet:</th></tr> </thead> <tbody>';
            for($i=0; $i<count($_SESSION['section8Names']); $i++){
              $body = $body . "<tr><td>" .  $_SESSION['section8Names'][$i] . "</td>".
              "<td>" . $_SESSION['section8Grades'][$i] . "</td>".
              "<td>" . ($_SESSION['section8OtherGenders'][$i] ? $_SESSION['section8OtherGenders'][$i] : $_SESSION['section8Genders'][$i]) . "</td>".
              "<td>" . $_SESSION['section8Emails'][$i] . "</td>".
              "<td>" . $_SESSION['section8Phones'][$i] . "</td>".
              "<td>" . ($_SESSION['section8OtherDiets'][$i] ? $_SESSION['section8OtherDiets'][$i] : $_SESSION['section8Diets'][$i]) . "</td></tr>";
            }
            $body = $body . '</tbody></table><br>';
          }
          if($_SESSION['section9Names']){
            $body = $body . '<h4>Registered Rotaractors:</h4><div class="table-responsive"> <table class="table"> <thead> <tr> <th>Name:</th> <th>Age:</th> <th>Gender:</th> <th>Club Name:</th> <th>Email:</th> <th>Phone:</th> <th>Diet:</th></tr> </thead> <tbody>';
            for($i=0; $i<count($_SESSION['section9Names']); $i++){
              $body = $body . "<tr><td>" .  $_SESSION['section9Names'][$i] . "</td>".
              "<td>" . $_SESSION['section9Ages'][$i] . "</td>".
              "<td>" . ($_SESSION['section9OtherGenders'][$i] ? $_SESSION['section9OtherGenders'][$i] : $_SESSION['section9Genders'][$i]) . "</td>".
              "<td>" . $_SESSION['section9ClubNames'][$i] . "</td>".
              "<td>" . $_SESSION['section9Emails'][$i] . "</td>".
              "<td>" . $_SESSION['section9Phones'][$i] . "</td>".
              "<td>" . ($_SESSION['section9OtherDiets'][$i] ? $_SESSION['section9OtherDiets'][$i] : $_SESSION['section9Diets'][$i]) . "</td></tr>";
            }
            $body = $body . '</tbody></table><br></body></html>';
          }
          $mail->Body    = $body;

          // CC
          if($_SESSION['section3Email']){
            $mail->addCC($_SESSION['section3Email']);
          }
          else if($_SESSION['section4Email']){
            $mail->addCC($_SESSION['section4Email']);
          }
          else if($_SESSION['section5Email']){
            $mail->addCC($_SESSION['section5Email']);
          }
          else{
            $mail->addCC($_SESSION['section6ContactEmail']);
          }

          //Send attempt
          if($mail->send()){
            echo "<script>document.getElementById('confirmStatus').innerHTML = \"<div class='alert alert-success'><strong>Success!</strong> Confirmation email sent!</div>\";</script>";
          }
          else{
            echo "<script>document.getElementById('confirmStatus').innerHTML = \"<div class='alert alert-danger'><strong>Warning!</strong> Confirmation email failed to send. Please try again or contact Kathy Rossetti (kathy.rossetti@cox.net).</div>\";</script>";
          }
        } catch (Exception $e) {
          echo "<script>document.getElementById('confirmStatus').innerHTML = \"<div class='alert alert-danger'><strong>Warning!</strong> Confirmation email failed to send. Please try again or contact Kathy Rossetti (kathy.rossetti@cox.net). Mailer Error: " . $mail->ErrorInfo . "</div>\";</script>";
        }

        //Clear session
        $_SESSION = array();
        ?>
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

  <footer class="footer">

    <div class="container">

      <img style="float: right; width: 50%" src="interactLogo.png" itemprop="image" alt="Interact"/>

    </div>

  </footer>

  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
