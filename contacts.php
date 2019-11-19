<!DOCTYPE html>
<html lang="ru">
<?php
session_start();
?>

<head>
  <meta charset="UTF-8">
  <title>Школа №1 г.Нурафшон</title>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

  <!-- <meta name="theme-color" content=""> -->
  <!-- <meta name="apple-mobile-web-app-status-bar-style" content="default"> -->

  <!-- Search Engine -->
  <!-- <meta name="description" content="DESCRIPTION"> -->
  <!-- <meta name="image" content="https://mysite.com/image.png"> -->

  <!-- Schema.org for Google -->
  <!-- <meta itemprop="name" content="TITLE"> -->
  <!-- <meta itemprop="description" content="DESCRIPTION"> -->
  <!-- <meta itemprop="image" content="https://mysite.com/image.png"> -->

  <!-- Twitter -->
  <!-- <meta name="twitter:card" content="summary"> -->
  <!-- <meta name="twitter:title" content="TITLE"> -->
  <!-- <meta name="twitter:description" content="DESCRIPTION"> -->
  <!-- <meta name="twitter:image:src" content="https://mysite.com/image.png"> -->

  <!-- <meta name="twitter:site" content="@twitterpublisher"> -->
  <!-- <meta name="twitter:creator" content="@twitterauthor"> -->

  <!-- Open Graph general (Facebook, Pinterest & Google+) -->
  <!-- <meta name="og:title" content="TITLE"> -->
  <!-- <meta name="og:description" content="DESCRIPTION"> -->
  <!-- <meta name="og:image" content="https://mysite.com/image.png"> -->
  <!-- <meta name="og:url" content="https://mysite.com/"> -->
  <!-- <meta name="og:site_name" content="SITE_NAME"> -->
  <!-- <meta name="og:locale" content="en-US"> -->
  <!-- <meta name="og:type" content="website"> -->

  <!-- <meta name="og:video" content="https://mysite.com/video.mpeg"> -->

  <link rel="stylesheet" href="styles/common.css">
  <link rel="stylesheet" href="styles/contacts.css">

  <!-- link rel="icon" href="favicon-16.png" sizes="16x16" type="image/png" -->
  <!-- link rel="icon" href="favicon-32.png" sizes="32x32" type="image/png" -->
  <!-- link rel="icon" href="favicon-48.png" sizes="48x48" type="image/png" -->
  <!-- link rel="icon" href="favicon-62.png" sizes="62x62" type="image/png" -->
</head>

<body>
  <!-- HEADER -->
  <header id="header" class="header">
    <div class="topbar">
      <div class="container">
        <div class="logo-box">
          <div class="logo-wrapper">
            <a class="logo" href="/">
              <svg data-bbox="39.975 30.05 120 139.95" xmlns="http://www.w3.org/2000/svg" viewBox="39.975 30.05 120 139.95" role="img" width="56" height="68">
                <g>
                  <path d="M159.3 116.9c-1-1-2.6-1-3.6 0l-9.3 9.3-7.7-7.7c12-13.3 15.1-31.6 9.5-47.7-2.3-6.5-5.9-12.7-11.1-17.9-8.5-8.5-19.6-13.4-31.5-13.9-5-.5-11.4 1-11.4 1-8.4 1.6-16.2 5.5-22.6 11.3l-7.7-7.7 9.3-9.3c1-1 1-2.6 0-3.5-1-1-2.6-1-3.6 0l-11.1 11c-24.7 24.7-24.7 65 0 89.7 11.9 11.9 27.3 18 42.9 18.5-.9 4.7-4.2 15-15.1 15h-3.1c-1.4 0-3.6 1.1-3.6 2.5s2.2 2.5 3.6 2.5H125c1.4 0 2.5-1.1 2.5-2.5s-1.1-2.5-2.5-2.5H99.2c4.5-4.3 6.6-10.4 7.3-15.1 15.2-.8 30.1-6.8 41.7-18.4l11.1-11.1c.9-1 .9-2.6 0-3.5zm-17.5-48.6h-5.3l-7.3-8.6c-.3-.4-.7-.7-1.2-.8-12.4-3.5-13.9-2.5-14.8-2-.7.5-1.9 1.1-2.7 1.6l-8.2-3.8-3.3-3.4 3.4-7.3c.3 0 .6-.1.8-.1 11.4 0 22.2 4.4 30.2 12.5 3.7 3.6 6.3 7.6 8.4 11.9zM73.1 56.4c6.5-6.5 14.7-10.5 23.6-11.9l-2.9 6.2c-.4.9-.2 2 .5 2.8l4.8 5c.2.2.5.4.7.5l9.7 4.6c.7.3 1.6.3 2.2 0 0 0 2.4-1.3 3.9-2.2 1.5 0 6.2 1.1 10.3 2.2l7.5 8.9c.5.6 1.2.9 1.9.9h8.4c4.9 14.8 1.6 31.8-10.2 43.6-8.1 8.1-18.8 12.5-30.2 12.5-11.4 0-22.1-4.5-30.2-12.5-5-5.1-8.4-11.1-10.4-17.5l4.4-1.4 5.8 4.2c.4.3 1 .5 1.5.5.7 0 1.4-.3 1.9-.9L85 91.7c.7-.7.8-1.8.4-2.7-.4-.9-1.3-1.5-2.3-1.5H77l-3.2-2.2-.2-4.2 4.1-2.8c.7-.5.9-1.5.9-2.3V61.1c0-1.4-.9-2.2-2.3-2.2h-5.1c.6-.8 1.2-1.7 1.9-2.5zm-4.3 30.4c0 .8.4 1.5 1.1 2l4.9 3.4c.4.3.9.4 1.4.4h1.4L74 96.9l-5-3.6c-.6-.5-1.5-.6-2.2-.4l-5.5 1.7c-1.9-10.4 0-21.4 5.9-30.7h6.5V75l-4.1 2.9c-.7.5-1.1 1.3-1.1 2.2l.3 6.7zM62.1 128C40 105.9 39.5 70.3 60.5 47.4l7.5 7.5c-1.4 1.5-2.7 3.1-3.9 4.7 0 0-.1.1-.1.2-12.7 18.6-10.9 44.2 5.6 60.7 9 9 21 14 33.8 14 11.9 0 23.1-4.5 31.8-12.4l7.5 7.5c-22.9 20.9-58.5 20.5-80.6-1.6z"></path>
                  <path d="M78.5 108v8.6c0 1.1.8 2.2 1.9 2.4l13 2.9h21c.5 0 1-.2 1.4-.4l6-5c.7-.5 1.1-1.3 1.1-2.1v-8.7c0-.6-.2-1.1-.5-1.5L114.5 94c-.6-.8-1.6-1.1-2.5-.9-.9.2-1.7.9-1.9 1.9-.4 1.6-.9 3.5-1.4 5-1.6-1.2-3.9-2.9-7.5-5.1l-9.3-5.8c-.6-.4-1.5-.5-2.2-.2-.7.3-1.3.9-1.5 1.6L86 97.8l-6.9 8.7c-.4.4-.6.9-.6 1.5zm5.1.9l6.7-8.4c.2-.3.4-.6.5-.9l1.4-4.7 6.4 4.1c3.7 2.4 8.2 5.5 8.7 5.9.3 1 1.4 1.9 2.5 1.9 1.7 0 2.5-.6 3.9-5.6l4.3 5.6v6.5l-6.2 3.9-17.8.1-10.3-2.6v-5.8z"></path>
                  <path d="M126.6 91c.4.3 1 .5 1.5.5.2 0 .5 0 .7-.1l9.3-2.7c1.1-.3 1.5-1.3 1.5-2.4v-6.8c0-1.4-.8-2.5-2.2-2.5h-9.3c-1.4 0-2.5 1.1-2.5 2.5V89c-.1.8.3 1.5 1 2zm4-9h4.3v2.4l-4.3 1.2V82z"></path>
                </g>
              </svg>
              <h1>Первая школа</h1>
            </a>
          </div>
        </div>

        <div class="hamburger" id="hamburger">
          <div class="icon-left"></div>
          <div class="icon-right"></div>
        </div>

        <?php require("floor/f1.php");?>

      </div>
    </div> <!-- topbar END -->
  </header>
  <!-- HEADER end -->

  <header id="header-banner" class="header-banner">
    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Toytepa%201%20elementary%20school&t=&z=15&ie=UTF8&iwloc=&output=embed&hl=ru" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div>
  </header>

  <main id="content" class="content-section">
    <div class="container">
      <div class="content_box">
        <div class="contact_tit">
          <h2>Свяжитесь с нами</h2>
        </div>
        <!--
        <div class="contact_content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </p>
        </div>
        -->
      </div>

      <div class="forms_box">
        <div class="left_box">
          <p>
            По любым вопросам вы можете связатся со школьной администрацией 
          </p>
          <form class="form">
            <input type="text" name="name" placeholder="Ваше имя *" required>
            <input type="email" name="email" placeholder="Ваша e-почта *" required>
            <input type="text" name="subject" placeholder="Тема">
            <textarea placeholder="Письмо *" required></textarea>
            <button type="submit" class="clearfix">Отправить</button>
          </form>
        </div>

        <div class="right_box">
          <p class="contact-declaration">
            Вы можете задать нам любой вопрос по телефону: +7 (495) 000-00-00 (с 9:00 до 18:00).
          </p>

          <div class="contact-details">
            <div class="contact-address">О.Шарафуддинова 1и г.Нурафшон</div>
            <div class="contact-tel">Телефон: +99899 999-99-99</div>
            <div class="contact-email">Email: firstschool@gmail.com</div>
          </div>

        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="footer-box">
        <div class="footer-item social-net-and-copyright">
          <div class="top">
            <ul class="social-net">
              <li class="social-net-item">
                <a href="#"><img src="img/instagram.png" class="sn-icon" height="22" alt="vk"></a>
              </li>
              <li class="social-net-item">
                <a href="#"><img src="img/telegram.png" class="sn-icon" height="22" alt="vk"></a>
              </li>
            </ul>
          </div>
          <p class="copyright">&copy;2019 Общеобразовательная школа №1 им. Пушкина г. Нурафшон</p>
        </div>
        <div class="footer-item contacts">
          <h2 class="top">Мы на связи</h2>
          <p>Телефон: +7 (495) 000-00-00<br>
             <a href="mailto: oneschull@gmail.com">Gmail: oneschull@gmail.com</a>
          </p>
        </div>
        <div class="footer-item address">
          <h2 class="top">Aдресс</h2>
          <p>О.Шарафуддинова 1и г.Нурафшон</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- FOOTER end -->

  <!-- SCRIPTS -->
  <script src="scripts/hamburger.js"></script>
  <script src="scripts/common.js"></script>
</body>

</html>
