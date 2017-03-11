<?php
  session_start();
  include "../methods/Helper/mysql_connect.php";
  include "../methods/Helper/sql_operation.php";
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/misc/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>三三吾鄉手工皂Trisoap</title>
    <!-- Bootstrap Core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="css/trisoap.css" rel="stylesheet">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
    <!-- GA -->
    <?php include_once("../methods/Helper/analyticstracking.php") ?>

    <!-- Preloader-->
    <div id="preloader">
      <div id="status"></div>
    </div>

    <!-- Navigation-->
    <?php include 'nav.php'; ?>

    <!-- Header-->
    <header data-background="img/jumbotrons/soapstring.jpg" class="intro introhalf">
      <!-- Intro Header-->
      <div class="intro-body">
        <h1>商品一覽</h1>
        <h4>旅用皂絲</h4>
      </div>
    </header>
    <!-- shop-->
    <section id="shop" class="section-small">
      <div class="container">
        <div class="row">
          <!-- shop carousel-->
          <div id="carousel-shop" class="carousel slide">
            <div class="col-lg-6 carousel-outer">
              <!-- Wrapper for slides-->
              <div class="carousel-inner">
                <div class="item active"><img src="img/product/string_roselle.jpg" alt="產品封面照片"></div>
                <div class="item"><img src="img/product/detail/string_roselle01.jpg" alt="產品照片1"></div>
                <div class="item"><img src="img/product/detail/string_roselle02.jpg" alt="產品照片2"></div>
              </div>
              <!-- Controls-->
              <a href="#carousel-shop" data-slide="prev" class="left carousel-control">
                <span class="icon-prev"></span>
              </a>
              <a href="#carousel-shop" data-slide="next" class="right carousel-control">
                <span class="icon-next"></span>
              </a>
              <!-- Indicators-->
              <ol class="carousel-indicators mCustomScrollbar">
                <li data-target="#carousel-shop" data-slide-to="0" class="active"><img src="img/product/string_roselle.jpg" alt="產品封面小圖"></li>
                <li data-target="#carousel-shop" data-slide-to="1"><img src="img/product/detail/string_roselle01.jpg" alt="產品小圖1"></li>
                <li data-target="#carousel-shop" data-slide-to="2"><img src="img/product/detail/string_roselle02.jpg" alt="產品小圖2"></li>
              </ol>
            </div>

            <div class="col-lg-6 slide">
              <h4>洛神紅麴皂絲旅行組</h4>
              <p class="small">REF. 9583301-234</p>
              <p>
                台東的艷麗珍寶，捧在農友的手上閃閃發光。
                自然主義之下的友善農法，
                將洛神與紅麴乾燥後添入的獨門絕配。
              </p>
              <hr>
              <p>主要成分 / 椰子油、棕櫚油、苦茶油、米糠油、蓖麻油、乾燥研磨臺東自然主義洛神花、天然紅麴粉</p>
              <p>適用膚質 / 油性中性膚質適用，亦適合作洗髮皂使用</p>
              <div class="panel panel-default">
                <div id="heading1" role="tab" class="panel-heading">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">
                    <h4 class="panel-title">產品特色</h4>
                  </a>
                </div>
                <div id="collapse1" role="tabpanel" aria-labelledby="heading1" class="panel-collapse collapse">
                  <div class="panel-body">
                    苦茶油 – 苦茶油被人稱為「台灣在地的好油」，苦茶油具有高抗氧化物質，讓皮膚頭髮處於良好狀態，能讓肌膚調整並保溼，滲透性快，能使用於全身肌膚它又能在表皮上形成一層很薄的保護膜，保住皮膚內的水份，是一款非常適合拿來洗髮的洗髮皂。
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="heading2" role="tab" class="panel-heading">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed">
                    <h4 class="panel-title">在地小農</h4>
                  </a>
                </div>
                <div id="collapse2" role="tabpanel" aria-labelledby="heading2" class="panel-collapse collapse">
                  <div class="panel-body">
                    台東自然主義 – 台東自然農法的幕後推手。
                    三三洛神紅麴皂絲，乃是採用台東自然主義友善耕種乾燥過後的洛神花。臺東自然主義經營人呂宏文，從耕種開始並秉持著自然友善以及追求一種對大地自然循環的尊重，不施藥與化肥的堅持，並且擔任推廣台東友善耕種「共好」的概念，希望更多農友加入自然主義的概念同行。
                    <a href="https://www.facebook.com/maturalism/">
                      臺東自然主義：https://www.facebook.com/maturalism/
                    </a>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="heading3" role="tab" class="panel-heading">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed">
                    <h4 class="panel-title">愛心協力</h4>
                  </a>
                </div>
                <div id="collapse3" role="tabpanel" aria-labelledby="heading3" class="panel-collapse collapse">
                  <div class="panel-body">
                    李勝賢文教基金會
                    李勝賢文教基金會位於台東市區，是以服務憨兒為主的小型作業所，開辦愛心二手商店以及手工皂製作已有數年之久。裡頭的憨兒各個是作皂好手，只要提及作皂他們便展現優於一般人的專注力與專業程度。作皂不只為了成品，更在於每個憨兒在做好皂後的自信笑容。三三台東意象的每樣產品，在經過數個月的技術移轉與培訓後成功開發，每一顆手工皂，都是來自憨兒們歡笑天堂的純淨手作。

                    台北自閉症基金會北投工坊
                    自閉症基金會北投工坊位於台北市北投區，是一個專門協助自閉症做職業培訓的小型作業所。裡頭的自閉症小孩有一個共同的特質便是「固著」，對於許多細節的一絲不苟。自閉症基金會北投工坊強調「將自閉症的特質化為優勢」，北投工坊不把自閉症的特質當作一種劣勢，而是運用一絲不苟的特質，來達成產品細節的完美。
                  </div>
                </div>
              </div>
              <form class="form-inline" method="post" action="../methods/Purchase_finish.php">
                <div class="form-group">
                  <h2 class="no-pad">$40</h2>
                </div>
                <div class="form-group">
                  <label for="number"></label>
                  <input id="number" type="number" name="ORDAMT" value="1" max="50" min="1" class="form-control">
                  <input type="hidden" name="ITEMNO" value="5">
                </div>
                <button type="submit" class="btn btn-dark">加入購物車</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer Section-->
    <?php include 'footer.php'; ?>

    <!-- jQuery-->
    <script src="js/jquery-1.12.3.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/form.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/jquery.parallax.min.js"></script>
    <script src="js/jquery.circle-progress.min.js"></script>
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/tweecool.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.smartmenus.js"></script>
    <!-- Custom Theme JavaScript-->
    <script src="js/pheromone.js"></script>
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </body>
</html>
