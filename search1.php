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
        <li><a href="index.html">Про нас</a></li>
        <li><a href="tourlist.php">Пакет турів</a></li>
        <li><a href="index.html">Події</a></li>
        <li><a href="offers.php">Заказати</a></li>
        <li><a href="search1.php">Пошук</a></li>
        
        
      </ul>                      
    </div>
    <div id="body">
      <div id="body-top">
        <div id="body-bot">

<H1> Туроператор "Мандри".</H1>
<H2> Пошук данних про туриста.</H2>
<?php
$DateVidprav = $_POST['DateVidprav'];
$FirstName = $_POST['FirstName'];

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

$sql = "SELECT DateVidprav, Name, DatePovern FROM tours
WHERE   ".$DateVidprav." LIKE '%".$FirstName."%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Дата відправлення: " . $row["DateVidprav"].   " Назва: " . $row["Name"]. " - Дата повернення: " . $row["DatePovern"]."<br>";
  }
} else {
  echo "0 results";
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
