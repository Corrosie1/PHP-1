<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">

    td {
        border: 1px solid black;
        width: 60px;
        height: 60px;
        border-radius: 15%;
        position: relative;
        left: 600px;
        bottom: 130px;
    }

    .Border {
        border: 8px solid black;
    }

    .Border_Red {
        border: 6px solid red;
        border-radius: 100%;
    }

    .fa {
      font-size: 30px;
      position: relative;
      left: 15px;
    }

    .Gamble {
      position: relative;
      top: 550px;
      left: 700px;
    }

    .Row {
      margin-left: 20px;
      width: 100px;
      height: 100px;
    }

    .submit {
      position: relative;
      top: 600px;
      left: 630px;
      margin-left: 65px;
      width: 100px;
      height: 50px;
      border: 1px solid black;
      border-radius: 15%;
      font-size: 22px;
      background-color: grey;
      color: white;
    }

    </style>
  </head>
  <body>
  <table>
    <form method="post">
    <?php
    $Random = mt_rand(1, 5);
    $Random_2 = mt_rand(1, 5);

    $Images = array (
    "<i class='fa fa-home'></i>",
    "<i class='fa fa-search'></i>",
    "<i class='fa fa-cloud'></i>",
    "<i class='fa fa-trash'></i>"
    );

    $Color = array (
      "yellow",
      "orange",
      "green",
      "white"
    );

    $Dobbelsteen = array (
      'https://www.workforcewellness.co.uk/captcha/dice1.gif',
      'https://www.workforcewellness.co.uk/captcha/dice2.gif',
      'https://www.workforcewellness.co.uk/captcha/dice3.gif',
      'https://www.workforcewellness.co.uk/captcha/dice4.gif',
      'https://www.workforcewellness.co.uk/captcha/dice5.gif',
      'https://www.workforcewellness.co.uk/captcha/dice6.gif'
    );

    for ($i=0; $i < 6 ; $i++) {
      echo "<tr>";
      for ($j=0; $j < 6 ; $j++) {
        $Random_3 = mt_rand(0, 3);
        $Random_4 = mt_rand(0, 3);
        if ($j == $Random && $i == $Random_2) {
          echo "<td bgcolor=$Color[$Random_3] class='Border_Red'> ";
          echo $Images[$Random_4];
          echo "</td>";

        } else if ($j == $Random || $i == $Random_2) {
          echo "<td bgcolor=$Color[$Random_3] class='Border'>";
          echo $Images[$Random_4];
          echo "</td>";

        } else {
          echo "<td bgcolor=$Color[$Random_3] >";
          echo $Images[$Random_4];
          echo "</td>";
        }
      }
      echo "</tr>";
    }

echo "<div class='Gamble'>";
    if ($Random_2 == 0) {
      echo "<img class='Row' src=$Dobbelsteen[0]>";
    } else if ($Random_2 == 1) {
      echo "<img class='Row' src=$Dobbelsteen[1]>";
    } else if ($Random_2 == 2) {
      echo "<img class='Row' src=$Dobbelsteen[2]>";
    } else if ($Random_2 == 3) {
      echo "<img class='Row' src=$Dobbelsteen[3]>";
    } else if ($Random_2 == 4) {
      echo "<img class='Row' src=$Dobbelsteen[4]>";
    } else if ($Random_2 == 5) {
      echo "<img class='Row' src=$Dobbelsteen[5]>";
    }

    if ($Random == 0) {
      echo "<img class='Row' src=$Dobbelsteen[0]>";
    } else if ($Random == 1) {
      echo "<img class='Row' src=$Dobbelsteen[1]>";
    } else if ($Random == 2) {
      echo "<img class='Row' src=$Dobbelsteen[2]>";
    } else if ($Random == 3) {
      echo "<img class='Row' src=$Dobbelsteen[3]>";
    } else if ($Random == 4) {
      echo "<img class='Row' src=$Dobbelsteen[4]>";
    } else if ($Random == 5) {
      echo "<img class='Row' src=$Dobbelsteen[5]>";
    }
    echo "</div>";
     ?>
     <input class="submit" type="submit" name="throw" value="throw">
     <input class="submit" type="submit" name="renew" value="renew">
     <?php
     if (isset($_POST['renew'])) {
       echo "<script>location.href = 'Eindopdracht.php';</script>";
     }
     ?>
   </form>
  </table>
  </body>
</html>
