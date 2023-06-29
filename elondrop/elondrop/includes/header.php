<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elon Musk AirDrop</title>
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/custom.css">

</head>

<body class="main__body loaded">
<style>
    .preloader{position:fixed;left:0;top:0;right:0;bottom:0;background:#e0e0e0;z-index:1001}.preloader__row{position:relative;top:50%;left:50%;width:70px;height:70px;margin-top:-35px;margin-left:-35px;text-align:center;animation:2s linear infinite preloader-rotate}.preloader__item{position:absolute;display:inline-block;top:0;background-color:#337ab7;border-radius:100%;width:35px;height:35px;animation:2s ease-in-out infinite preloader-bounce}.preloader__item:last-child{top:auto;bottom:0;animation-delay:-1s}@keyframes preloader-rotate{100%{transform:rotate(360deg)}}@keyframes preloader-bounce{0%,100%{transform:scale(0)}50%{transform:scale(1)}}.loaded_hiding .preloader{transition:opacity .3s;opacity:0}.loaded .preloader{display:none}
</style>
<div class="preloader">
  <div class="preloader__row">
    <div class="preloader__item"></div>
    <div class="preloader__item"></div>
  </div>
</div>
  <!-- Header -->
  <header class="header" id="header">
  <!-- Navbar -->
  <nav class="nav">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a class="logo__link" href="#" onclick="openModal()">
            <img class="logo__link-img" src="img/logo.svg" alt="logo">
          </a>
        </div>

        <ul class="menu">
          <li class="menu__item"><a href="#header" class="menu__item-link  active" data-scroll>Home</a></li>
          <li class="menu__item"><a href="#rules" class="menu__item-link" data-scroll>About</a></li>
          <li class="menu__item"><a href="#faq" class="menu__item-link" data-scroll>FAQ</a></li>
        </ul>
        <div class="burger">
          <span></span>
        </div>
      </div>
    </div>
  </nav>
</header>