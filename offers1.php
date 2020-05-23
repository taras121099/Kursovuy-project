
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
    <h1> "МАНДРИ"</h1>
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
          


<?php

$name = $_POST['Name'];
$vidprav = $_POST['DateVidprav'];
$povern = $_POST['DatePovern'];
$price = $_POST['Price'];



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

$sql = "INSERT INTO tours (Name, DateVidprav, DatePovern, Price)
VALUES ( '$name', '$vidprav', '$povern', '$price')";

if ($conn->query($sql) === TRUE) {
  echo "Дані відправлені";
} else {
  echo "Помилка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<div class="container">
    <form class="form-singin" method ="POST" action="offers2.php">
      <h1 align="center" color= "red">Туроператор "МАНДРИ"</h1>
      <h1 align="center">Добавлення даних про туриста</h1>
      <input type="text" name="LastName" class="form-control" placeholder="Прізвище:" required>
      <input type="text" name="FirstName" class="form-control" placeholder="Ім'я:" required>
      <input type="text" name="Patronym" class="form-control" placeholder="По-батькові:" required>
      <input type="number" name="SeriaPassport" class="form-control" placeholder="Серія паспорта:" required>
      <input type="number" name="NumberPassport" class="form-control" placeholder="Номер паспорта:" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Добавити</button>
       
    </form>
   </div>




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