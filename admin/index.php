<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Туроператор "Мандри"</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="../style.css" type="text/css" charset="utf-8" />
</head>

<body>

<div class="container">
	 	<form class="form-singin" method ="POST">
	 		<h2>Вхід</h2>
	 		<input type="text" name="username" class="form-control" placeholder="Username" required>
	 		<input type="password" name="password" class="form-control" placeholder="Password" required>
	 		<button class="btn btn-lg btn-primary btn-block" type="submit">Ввійти</button>
			 <a href="../index.php" class="btn btn-lg btn-primary btn-block">Регістрація</a>
			 		
	 	</form>
	 </div>

<?php
session_start(); 
require('../connect.php');


	if  (isset($_POST['username']) and isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		$_SESSION['username'] = $username;
		}	else {
			$fmsg = "Помилка";
		}
}

if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		echo " Hello " . $username . "";
		echo " Ви ввійшли ";
		echo "<a href='../logout.php' class='btn btn-lg btn-primary'> Вийти </a>";
		
	

}
?>





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
        <li class="selected"><a href="../index.php">Головна</a></li>
        <li><a href="../index.php">Про нас</a></li>
        <li><a href="../tourlist.php">Пакет турів</a></li>
        <li><a href="../index.php">Події</a></li>
        <li><a href="../offers.php">Заказати</a></li>
        <li><a href="../search.php">Пошук</a></li>
        
      
      </ul>                      
    </div>
    <div id="body">
      <div id="body-top">
        <div id="body-bot">
          <h2><strong>Ласкаво просимо на наш сайт</strong> </h2>
          <h2><strong>Туроператор МАНДРИ</strong></h2>
                <p>
Сучасній людині відкритий весь світ. Головне – бажання і зовсім небагато можливостей. До того ж сьогодні туроператори Києва та України пропонують величезний вибір турів по Європі, доступних кожному туристу. Тури в Італію, тури в Чехію, тури в Іспанію, тури у Францію, тури в Туреччину і тури в інші країни та тури по Європі – все це стало реальністю. <p>Навіть не маючи великих доходів, людина може зібрати певну суму і відвідати будь-яку точку світу на свій вибір. Адже життя йде і дуже прикро прожити її, не покидаючи межі своєї країни.</p>

<p>В наш час є велика кількість варіантів перельоту на лоу-кост авіалініях, де вартість квитків може бути від 20 євро. Проте у бочці меду є ложка дьогтю. Завжди існують нюанси по багажу, пересадження і інші технічні моменти. Саме тому необхідно звертатися до спеціалізованих туроператорів, таким як туроператор Мандри.</p>

<p>Фахівці туроператора Альянс знають, як правильно скласти маршрут, підібрати найкращий варіант перельоту, захистять вас від всіх нюансів і підводних каменів.

Ми маємо чартерними і блоковими місцями на авіарейсах, тому перельоти доступні навіть тоді, коли на сайтах авіакомпанії не може бути квитків.

Також, доступний великий вибір екзотичних напрямків, як: Таїланд, Індонезія (Балі), Мальдіви, Сейшели, Маврикій, Мексика і тд.</p>

<p>Чому варто вибрати туроператор Альянс серед інших туроператорів Києва та України?</p>
<p>До основних наших переваг належать:

<p>Ексклюзивні контракти з готелями по всьому світу
Свої регулярні і чартерні місця на авіарейсах
оформлення заявок онлайн, включаючи послуги бронювання квитків і номерів в готелях;</br>
мінімальну кількість часу на замовлення туру по Європі;</br>
робота з всіма жителями України, а не тільки з киянами;</br>
великий вибір країн і міст, які ви зможете побачити разом з нами;</br>
широкий асортимент екскурсійних турів (сімейні, активні, товариські і т. д.);</br>
індивідуальний підхід до кожного клієнта завдяки роботі першокласних менеджерів;</br>
постійна наявність гарячих турів;</br>
великий досвід роботи в сфері надання туристичних послуг;</br>
наявність системи знижок, акцій та інших програм лояльності особливо до постійним клієнтам.</p>
<p>Перераховувати всі переваги довго, тому давайте спробуємо разом зробити життя яскравіше і цікавіше. Не обмежуйте себе в можливості поглянути на світ не по телевізору, а на власні очі.</p>
          
          
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






