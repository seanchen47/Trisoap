<?php
  session_start();
  include "../methods/Helper/mysql_connect.php";
  include "../methods/Helper/sql_operation.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="Homepage/img/misc/favicon.png">
    <title>三三吾鄉手工皂Trisoap</title>
    <meta name="description" content="三三吾鄉手工皂，結合在地小農、社福公益、社會企業等三方元素，利用嶄新的旅行用皂絲組，期待翻轉公益社福的悲情形象。">
    <!-- Bootstrap Core CSS-->
    <link href="Homepage/css/bootstrap.min.css" rel="stylesheet">
    <!-- FlexSlider CSS -->
    <link href="../FlexSlider/flexslider.css" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="Homepage/css/trisoap.css" rel="stylesheet">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
    <!-- GA -->
    <?php include_once("../methods/Helper/analyticstracking.php") ?>

    <!-- Preloader-->
    <div id="preloader">
      <div id="status"></div>
    </div>

    <!-- Navigation-->
    <?php include 'nav_Homepage.php'; ?>

    <!-- Header-->
    <header>
      <!-- Intro Header-->
      <div class="container-fluid flexslider">
        <ul class="slides">
          <li>
            <div>
              <a href="Homepage/moonfest_products.php">
                <img class="flexslides" src="Homepage/img/index/index_moonfest.jpg" alt="中秋禮皂">
              </a>
            </div>
          </li>
          <li>
            <div>
              <a href="Homepage/about.php">
                <img class="flexslides" src="Homepage/img/index/index1.png" alt="三三吾鄉 About">
              </a>
            </div>
          </li>
          <li>
            <div>
              <a href="Homepage/trial.php">
                <img class="flexslides" src="Homepage/img/index/index2.png" alt="試用皂免費申請中 Trial">
              </a>
            </div>
          </li>
          <li>
            <div>
              <a href="Homepage/message.php">
                <img class="flexslides" src="Homepage/img/index/index3.png" alt="希望留心語 Activity">
              </a>
            </div>
          </li>
          <li>
            <div>
              <a href="https://www.facebook.com/trisoap/" target="_blank">
                <img class="flexslides" src="Homepage/img/index/index4.png" alt="工作坊開催中 Workshop">
              </a>
            </div>
          </li>
        </ul>
        <div class="flexslider-controls">
          <ol class="flex-control-nav">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ol>
        </div>
      </div>
    </header>

    <section id="buy-product">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="product-element" id="product-element1">
              <div class="img-cover">
                <a href="Homepage/product4.php" class="buy-now vertical-middle">立即購買</a>
              </div>
              <img src="Homepage/img/product/gift.png" alt="三三臺東意象禮盒組 Gift Boxs">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="product-element" id="product-element2">
              <div class="img-cover">
                <a href="Homepage/product1.php" class="buy-now vertical-middle">立即購買</a>
              </div>
              <img src="Homepage/img/product/rice.png" alt="田靜山巒禾風皂 (米皂) Rice Soap">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section-->
    <section id="services" class="bg-orange">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <h3>三個故事 Tri Story</h3>
            <p>一切都是從一個座落在寧靜城市裡的、專門開辦二手販售以及手工皂製作的
            小型作業所「李勝賢文教基金會」開始的</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Slider Section-->
    <section class="about-slider">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <img src="Homepage/img/society.png" class="img-responsive" alt="愛的釀皂 Story 1">
          </div>
          <div class="col-lg-5 col-lg-offset-1 col-md-12">
            <h3>愛的釀皂</h3>
            <p>
              我們故事的第一主角，就是一個個穿上工作服、蓄勢待發地在一旁準備的憨兒們。我們在學習打皂時，他們活像個監督我們生產流程的督導一般。我們非常迅速地在「攪拌」關卡中，不到十分鐘便棄械投降，一旁的憨兒主動地替補了我們的工作，在測量每一種油品時的專注力高的嚇人，連一滴油都不會逃過他們的法眼，當時的我們，深深被這一幅畫面所震懾。
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Slider Section-->
    <section class="about-slider">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <img src="Homepage/img/farm.png" class="img-responsive" alt="吾鄉小農 Story 2">
          </div>
          <div class="col-lg-5 col-lg-offset-1 col-md-12">
            <h3>吾鄉小農</h3>
            <p>
              第二個故事主角，就是位於台東的在地小農與三樣特色農作物－米、金針花跟釋迦。會成為我們主角的原因很簡單，因為他們堅持好品質、有機，照顧農作物像照顧自己的孩子一樣，用山泉水灌溉並使用自然農法，他們的堅持正完全符合我們的經營理念！
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Slider Section-->
    <section class="about-slider">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <img src="Homepage/img/intern.png" class="img-responsive" alt="社會企業 Story 3">
          </div>
          <div class="col-lg-5 col-lg-offset-1 col-md-12">
            <h3>社會企業</h3>
            <p>
              第三個故事就是因著在地小農和社福團體而生的社會企業的故事，三三吾鄉秉持著社會企業的精神，協助解決在地的社會問題，期待透過新的創新，帶動在地的新生。
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer Section-->
    <?php include 'footer_Homepage.php'; ?>

    <!-- jQuery-->
    <script src="Homepage/js/jquery-1.12.3.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="Homepage/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript-->
    <script src="Homepage/js/jquery.easing.min.js"></script>
    <script src="Homepage/js/jquery.countdown.min.js"></script>
    <script src="Homepage/js/device.min.js"></script>
    <script src="Homepage/js/form.min.js"></script>
    <script src="Homepage/js/jquery.placeholder.min.js"></script>
    <script src="Homepage/js/jquery.shuffle.min.js"></script>
    <script src="Homepage/js/jquery.parallax.min.js"></script>
    <script src="Homepage/js/jquery.circle-progress.min.js"></script>
    <script src="Homepage/js/jquery.swipebox.min.js"></script>
    <script src="Homepage/js/smoothscroll.min.js"></script>
    <script src="Homepage/js/tweecool.min.js"></script>
    <script src="Homepage/js/wow.min.js"></script>
    <script src="Homepage/js/jquery.smartmenus.js"></script>
    <!-- FlexSlider JS -->
    <script src="../FlexSlider/jquery.flexslider-min.js"></script>
    <!-- Custom Theme JavaScript-->
    <script src="Homepage/js/pheromone.js"></script>
    <script src="Homepage/js/flexslider_index.js"></script>
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </body>
</html>