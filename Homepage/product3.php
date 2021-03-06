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
    <link rel="shortcut icon" href="img/misc/favicon.png">
    <title>釋迦手感果力皂｜三三吾鄉手工皂Trisoap</title>
    <meta name="description" content="翠綠的果實結在樹上，粼粼片片的果殼像極了小羊身上蜷曲的羊毛。純天然入皂的棕色，極為天然的提煉手法將一顆一顆的釋迦果力完美融入，帶給你洗感上的全新體驗。">
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
    <header data-background="img/product/detail/series.jpg" class="intro introhalf">
      <!-- Intro Header-->
      <div class="intro-body">
        <h1>商品一覽</h1>
        <h4>單品</h4>
        </h4>
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
                <div class="item active"><img src="img/product/shakya.png" alt=""></div>
                <!-- <div class="item"><img src="" alt=""></div> -->
              </div>
              <!-- Controls-->
              <a href="#carousel-shop" data-slide="prev" class="left carousel-control">
                <span class="icon-prev"></span>
              </a>
              <a href="#carousel-shop" data-slide="next" class="right carousel-control">
                <span class="icon-next"></span>
              </a>
            </div>
            <div class="col-lg-6 slide">
              <h4>釋迦手感果力皂 (釋迦皂)</h4>
              <p>
                翠綠的果實結在樹上，粼粼片片的果殼像極了小羊身上蜷曲的羊毛。
                純天然入皂的棕色，極為天然的提煉手法將一顆一顆的釋迦果力完美融入，帶給你洗感上的全新體驗。
              </p>
              <!-- Indicators-->
              <ol class="carousel-indicators mCustomScrollbar">
                <li data-target="#carousel-shop" data-slide-to="0" class="active"><img src="img/product/shakya.png" alt=""></li>
                <!-- <li data-target="#carousel-shop" data-slide-to="1"><img src="" alt=""></li> -->
              </ol>
              <hr>
              <p>主要成分 / 葡萄籽油 橄欖油 棕梠油 乳油木果脂 葡萄籽油 釋迦果砂</p>
              <p>適用膚質 / 中性與乾性之膚質適用</p>
              <div class="panel panel-default">
                <div id="heading1" role="tab" class="panel-heading">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">
                    <h4 class="panel-title">產品特色</h4>
                  </a>
                </div>
                <div id="collapse1" role="tabpanel" aria-labelledby="heading1" class="panel-collapse collapse">
                  <div class="panel-body">
                    葡萄籽油－－洗淨後的清爽感受，葡萄籽油是軟油中的特色油品，洗淨後帶給肌膚非常清爽而不黏膩的感受，與橄欖油的成分交疊，會有大小泡沫交雜的豐富洗感。取自台東小農「釋迦小羊牧場」所提供的釋迦果實，藉由果泥入皂的方式，將微弱的果酸添加減低肥皂中過於刺激的鹼性，再藉由獨門的乾燥手法提煉出釋迦中的果砂，可藉由磨砂效果達成天然的去除膚質表面髒汙的獨家體驗。
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
                    釋迦小羊牧場 －－ 青綠糖蘋果的純真天堂
                    座落太麻里的「釋迦小羊牧場」。牧場在向陽面陽光充足的情況下，搭配上山泉水的灌溉，產出的台東二號釋迦碩大又飽滿。堅持產地自銷，從施肥、剪枝、開花、授粉、疏果、除草、套袋，親手處理每一個從小羊牧場產出的釋迦；對於各種細節的注重，以及對於果實品質安全的堅持，都可看出負責人陳志韋的認真和堅毅。
                    高溫後的降雨容易使釋迦產生裂果，裂果賣相不佳，常是小農的困擾。三三向釋迦小羊牧場合作購買部分裂果，純手工取出果泥、果皮與果沙整顆果實充分利用，製作成三三臺東意象的原料之一。「裂果的釋迦，像是在開懷大笑的小羊。」
                    <a target="_blank" href="https://www.facebook.com/taimalicustardapple/">
                      釋迦小羊牧場 https://www.facebook.com/taimalicustardapple/
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
                    釋迦手感果力皂，乃由TriSoap三三社會企業研發後，將技術免費移轉給李勝賢文教基金會，並由其協力生產。李勝賢文教基金會位於台東市區，是以服務憨兒為主的小型作業所，開辦愛心二手商店以及手工皂製作已有數年之久。裡頭的憨兒各個是作皂好手，只要提及作皂他們便展現優於一般人的專注力與專業程度。作皂不只為了成品，更在於每個憨兒在做好皂後的自信笑容。三三台東意象的每樣產品，在經過數個月的技術移轉與培訓後成功開發，每一顆手工皂，都是來自憨兒們歡笑天堂的純淨手作。
                  </div>
                </div>
              </div>
              <form class="form-inline" method="post" action="../methods/Purchase_finish.php">
                <div class="form-group">
                  <h2 class="no-pad">$300</h2>
                </div>
                <div class="form-group">
                  <label for="number"></label>
                  <input id="number" type="number" name="ORDAMT" value="1" max="50" min="1" class="form-control">
                  <input type="hidden" name="ITEMNO" value="product_sp_003">
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
