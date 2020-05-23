<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Туроператор "Мандри"</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
  <style>
   .container {
     
    color: #930;
   }
  </style>
</head>

<body>

   

<div id="wrapper">
  <div id="left">
    <h1> "Мандри"</h1>
    <div id="copyright">
      <p>Copyright Information goes here.</p>
      <p>Всі права захищені</p>
    </div>
  </div>
  <div id="right">
    <div id="nav">
      <ul>
        <li class="selected"><a href="index.php">Головна</a></li>
        <li><a href="index.php">Про нас</a></li>
        <li><a href="tourlist.php">Пакет турів</a></li>
        <li><a href="index.php">Події</a></li>
        <li><a href="offers.php">Заказати</a></li>
        <li><a href="search.php">Пошук</a></li>

        
        
      </ul>                      
    </div>
    <div id="body">
      <div id="body-top">
        <div id="body-bot">
          
<H1> Туроператор "МАНДРИ".</H1>
<H2> Добавлення даних про туриста.</H2>
<?php

$lastname = $_POST['LastName'];
$firstname = $_POST['FirstName'];
$patronym = $_POST['Patronym'];
$seriapassport = $_POST['SeriaPassport'];
$numberpassport = $_POST['NumberPassport'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "turoperator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO turist (LastName, FirstName, Patronym, SeriaPassport, NumberPassport)
VALUES ( '$lastname', '$firstname', '$patronym', '$seriapassport', '$numberpassport')";

if ($conn->query($sql) === TRUE) {
  echo "Дані відправлені";
} else {
  echo "Помилка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<img src="images/travelagency_10.jpg" width="92" height="103" alt="Feel Good" class="left" />
          
          <div class="clear"></div>

          <div class="body-hr"> </div>
          
          <div id="footer">
            <div id="footer-1">
              Наші авторизовані  <strong>Агенти</strong>
            </div>
          
            <div id="footer-2">
              <img src="images/pic_2.gif" width="31" height="42" alt="Pic 2" class="left" />
              Famous Cook
            </div>
          
            <div id="footer-3">
              <img src="images/pic_3.gif" width="60" height="42" alt="Pic 3" class="left" />
              Навколо <br />
              Світу
            </div>
            
            <div class="clear"> </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>



</body>
</html>