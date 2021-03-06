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
    <title>三三臺東意象皂絲旅行組｜三三吾鄉手工皂Trisoap</title>
    <meta name="description" content="內涵臺東洛神紅麴、萱草米黃、暖暖薑黃皂絲旅用組。天然手打皂絲，綿密的起泡讓你在旅途當中享受不同的驚奇。添加台東在地素材的旅行組，讓你在洗澡的時候也像在旅行。">
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
                <div class="item active"><img src="img/product/string_gift.jpg" alt="產品封面照片"></div>
                <div class="item"><img src="img/product/detail/string_gift00.jpg" alt="產品照片0"></div>
                <div class="item"><img src="img/product/detail/string_gift01.jpg" alt="產品照片1"></div>
                <div class="item"><img src="img/product/detail/string_gift02.jpg" alt="產品照片2"></div>
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
                <li data-target="#carousel-shop" data-slide-to="0" class="active"><img src="img/product/string_gift.jpg" alt="產品封面小圖"></li>
                <li data-target="#carousel-shop" data-slide-to="1"><img src="img/product/detail/string_gift00.jpg" alt="產品小圖0"></li>
                <li data-target="#carousel-shop" data-slide-to="2"><img src="img/product/detail/string_gift01.jpg" alt="產品小圖1"></li>
                <li data-target="#carousel-shop" data-slide-to="3"><img src="img/product/detail/string_gift02.jpg" alt="產品小圖2"></li>
              </ol>
            </div>

            <div class="col-lg-6 slide">
              <h4>三三臺東意象皂絲旅行組</h4>
              <p>
                臺東皂絲旅行組
                內含臺東洛神紅麴、萱草米黃、暖暖薑黃皂絲旅用組。
                天然手打皂絲，綿密的起泡讓你在旅途當中享受不同的驚奇。
                添加台東在地素材的旅行組，
                讓你在洗澡的時候也像在旅行。
              </p>
              <hr>
              <p>
                禮盒內含 /
                臺東洛神紅麴皂絲組 x 2
                臺東萱草米黃皂絲組 x 2
                臺東暖暖薑黃皂絲組 x 2
              </p>
              <div class="panel panel-default">
                <div id="heading1" role="tab" class="panel-heading">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">
                    <h4 class="panel-title">在地小農</h4>
                  </a>
                </div>
                <div id="collapse1" role="tabpanel" aria-labelledby="heading1" class="panel-collapse collapse">
                  <div class="panel-body">
                    台東自然主義 – 台東自然農法的幕後推手。
                    三三洛神紅麴皂絲，乃是採用台東自然主義友善耕種乾燥過後的洛神花。臺東自然主義經營人呂宏文，從耕種開始並秉持著自然友善以及追求一種對大地自然循環的尊重，不施藥與化肥的堅持，並且擔任推廣台東友善耕種「共好」的概念，希望更多農友加入自然主義的概念同行。
                    <a href="https://www.facebook.com/maturalism/">
                      臺東自然主義：https://www.facebook.com/maturalism/
                    </a>

                    台東薑黃伯 – 台東樂山的薑黃淨土。
                    臺東薑黃樂山野菜香草園，園區座落於台灣最後一塊淨土，其中含有多項礦物質又受太平洋水氣影響，成為種植的良好場所。台東薑黃伯園區經過20年的耕耘，堅持無施灑農藥，以最優質的束骨秋鬱金為主，強調「純淨、優質、安心」，經過多項有機認證測驗通過，堅持帶給你最好的薑黃農產。
                    <a href="http://www.tailosan.com/">
                      臺東薑黃伯：http://www.tailosan.com/
                    </a>

                    臺東小農食在
                    金絲森林渲染皂當中的金針，乃是由「小農食在」所提供。小農食在的金針花田，有別於一般種植於高山上，而是在台東縣池上鄉的平地栽培，因此在非高山金針產季時，也能夠提供最新鮮的金針花。市面上的金針花的加工品，為保有其鮮豔色澤與延長保存期間，經常添加二氧化硫，使含硫量超標，這些含硫金針，亦稱為「紅針、有毒金針」。而小農食在在製作過程中，完全不添加亞硫酸及其他添加物，是用於製作肥皂最好、安心的無硫金針。
                    <a href="https://www.facebook.com/pinganmipu/">
                      小農食在：https://www.facebook.com/pinganmipu/
                    </a>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="heading2" role="tab" class="panel-heading">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed">
                    <h4 class="panel-title">愛心協力</h4>
                  </a>
                </div>
                <div id="collapse2" role="tabpanel" aria-labelledby="heading2" class="panel-collapse collapse">
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
                  <h2 class="no-pad">$240</h2>
                </div>
                <div class="form-group">
                  <label for="number"></label>
                  <input id="number" type="number" name="ORDAMT" value="1" max="50" min="1" class="form-control">
                  <input type="hidden" name="ITEMNO" value="product_ss_box_001">
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
