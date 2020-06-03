<?php require 'php/global.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
    <meta name="author" content="Brad Traversy">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/WOW.js"></script>
    <script src="js/wow.min.js"></script>
    <title>Компания "Dream"</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container wow fadeIn">
        <div id="branding">
          <h1><span class="highlight">Компания</span> "Dream"</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.html">Главная</a></li>
            <li><a href="about.html">О нас</a></li>
            <li><a href="services.php">Услуги</a></li>
          </ul>
        </nav>
      </div>
    </header>

    

    <section id="main">
      <div class="container wow fadeIn" style="margin-bottom: 10%;">
        <article id="main-col">
          <h1 class="page-title">Услуги</h1>
          <ul id="services">
           <?php print $db->print_services(); ?>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark wow fadeIn">
            <h3>Отправьте нам сообщение</h3>
            <form class="quote" method="POST" action="php/mailer/mail.php">
  						<div>
  							<label>Имя</label><br>
  							<input type="text" placeholder="Имя" name="name">
  						</div>
  						<div>
  							<label>Почта</label><br>
  							<input type="email" placeholder="Почта" name="email">
  						</div>
  						<div>
  							<label>Сообщение</label><br>
  							<textarea placeholder="Сообщение" name="msg"></textarea>
  						</div>
  						<button class="button_1" type="submit">Отправить</button>
					</form>
          </div>
        </aside>
      </div>
    </section>
    <footer class="wow fadeIn">
      <p>Компания "Dream", Copyright &copy; 2020</p>
      <p>Почта: test@mail.ru</p>
    </footer>

    <script type="text/javascript">
    	new WOW().init();
    </script>
  </body>
</html>
