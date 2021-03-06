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
    <title>田靜山巒禾風皂｜三三吾鄉手工皂Trisoap</title>
    <meta name="description" content="徐徐微風拂過，隨風搖曳的稻禾色調，是種清心舒適的享受。艾草底層與金盞花粉夾層的色澤設計，凸顯台東的小農意象。">
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
                <div class="item active"><img src="img/product/rice.png" alt=""></div>
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
              <h4>田靜山巒禾風皂 (米皂) </h4>
              <p>
                徐徐微風拂過，隨風搖曳的稻禾色調，是種清心舒適的享受。
                艾草底層與金盞花粉夾層的色澤設計，凸顯台東的小農意象。
              </p>
              <!-- Indicators-->
              <ol class="carousel-indicators mCustomScrollbar">
                <li data-target="#carousel-shop" data-slide-to="0" class="active"><img src="img/product/rice.png" alt=""></li>
                <!-- <li data-target="#carousel-shop" data-slide-to="1"><img src="" alt=""></li> -->
              </ol>
              <hr>
              <p>主要成分 / 乳油木果脂、甜杏仁油、橄欖油、椰子油、棕梠油、池上米、研磨艾草粉、研磨金盞花粉</p>
              <p>適用膚質 / 敏感性膚質、中性與冬天易乾燥之膚質適用</p>
              <div class="panel panel-default">
                <div id="heading1" role="tab" class="panel-heading">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">
                    <h4 class="panel-title">產品特色</h4>
                  </a>
                </div>
                <div id="collapse1" role="tabpanel" aria-labelledby="heading1" class="panel-collapse collapse">
                  <div class="panel-body">
                    甜杏仁油－－蘊含天然維他命的豐富油，甜杏仁油是手工皂界的優良油品，富含天然維他命對於改善過乾的肌膚有良好的作用，亦適用於敏感性肌膚調理且是保濕與舒緩的不二人選。禾風皂由台東池上在地小農「高家米倉」提供的純淨米糠乾燥研磨後添加至皂中，可藉由純淨米糠的顆粒清除肌膚中的細微髒汙，不僅滋潤更帶有全新的洗感體驗。田靜山巒禾風皂，在乾燥的冬天帶給自己更滋潤的享受。
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
                    高家米倉 －－ 田園風的原始餐桌
                    田靜山巒禾風皂，其中的米糠乃是由台東池上的「高家米倉」合作提供。產量不到全台灣1%極為珍貴的高家米倉池上米，位於花東縱谷制高點的池上鄉，擁有肥沃土壤及清澈水質，在零工業污染的潔淨環境孕育出的高品質稻米，是我們的首選素材。
                    從嚴謹的檢驗過程、精密的倉儲量控管、不定期的抽查及農藥殘毒檢驗，對於每項品質把關程序都不馬虎，這是高媽媽對池上米栽培發展的堅持，也是我們選擇高家米倉池上米的信念。
                    <a target="_blank" href="http://atp.cs.gov.tw/rplace.php">
                      高家米倉 http://atp.cs.gov.tw/rplace.php
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
                    李勝賢文教基金會－－憨兒們的歡笑天堂。
                    田靜山巒禾風皂，乃由TriSoap三三社會企業研發後，將技術免費移轉給李勝賢文教基金會，並由其協力生產。李勝賢文教基金會位於台東市區，是以服務憨兒為主的小型作業所，開辦愛心二手商店以及手工皂製作已有數年之久。裡頭的憨兒各個是作皂好手，只要提及作皂他們便展現優於一般人的專注力與專業程度。作皂不只為了成品，更在於每個憨兒在做好皂後的自信笑容。三三台東意象的每樣產品，在經過數個月的技術移轉與培訓後成功開發，每一顆手工皂，都是來自憨兒們歡笑天堂的純淨手作。
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
                  <input type="hidden" name="ITEMNO" value="product_sp_001">
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
