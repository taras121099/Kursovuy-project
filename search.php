
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
<?php 
require('connect.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO users (username, email, password) VALUES ('$username','$email', '$password')";
  $result = mysqli_query($connection, $query);

  if($result){
    $smsg = "Регістрація пройшла успішно";
  } else {
    $fsmsg = "Помилка";
  }
  
}
?>
   <div class="container">
    <form class="form-singin" method ="POST">
      <h2>Регістрація</h2>
      <?php  if(isset($smsg)){?><div class="alert alert-success" role="alert"><?php echo $smsg;?></div><?php }?>
      <?php  if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"><?php echo $fsmsg;?></div><?php }?>
      <input type="text" name="username" class="form-control" placeholder="Username" required>
      <input type="email" name="email" class="form-control" placeholder="Email" required>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Регістрація</button>
       <a href="login.php" class="btn btn-lg btn-primary btn-block">Вхід</a>
       <a href="admin/index.php" class="btn btn-lg btn-primary btn-block">Адмін вхід</a> 
    </form>
   </div>
   

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
        <li><a href="search1.php">Пошук</a></li>
        
    
      </ul>                      
    </div>
    <div id="body">
      <div id="body-top">
        <div id="body-bot">
          





   <div class="container">
    <form class="form-singin" method ="POST" action="search1.php">    
<H1> Туроператор "МАНДРИ".</H1>
<H2> Пошук даних про туриста.</H2>
<INPUT type="hidden" name="posted" value="true">
Виберіть критерій пошуку:<br>
<SELECT name="DateVidprav">
<OPTION value="DateVidprav">Дата відправлення
<OPTION value="Name">Назва тура
</SELECT><br>
Введіть рядок:<br>
<INPUT name="FirstName" type=TEXT><br>
<button href="search1.php" class="btn btn-lg btn-primary btn-block" type="submit">Пошук</button>
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