<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/misc/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>三三社企-產品故事
    </title>
    <!-- Bootstrap Core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="css/trisoap.css" rel="stylesheet">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
    <!-- Preloader-->
    <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- Navigation-->
    <nav class="navbar navbar-custom navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#page-top" class="navbar-brand page-scroll">
            <!-- Img or text logo--><img src="img/logo2.png" alt="" class="logo"></a>
        </div>
        <div class="collapse navbar-collapse navbar-main-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="hidden"><a href="#page-top"></a></li>
            <li><a href="index.php">首頁<i class="fa fa-angle-down"></i><span class="caret"></span></a></li>
            <li><a href=#>關於三三<i class="fa fa-angle-down"></i><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="about.php">三三團隊</a></li>
                <li><a href="faq.php">顧客問答</a></li>
                <li><a href="contact.php">聯絡我們</a></li>
              </ul>
            </li>
            <li><a href="product.php">產品故事<i class="fa fa-angle-down"></i><span class="caret"></span></a></li>
            <li><a href="service.php">如何購皂<i class="fa fa-angle-down"></i><span class="caret"></span></a></li>
            <li><a href="../message/Message.html">希望留心語<i class="fa fa-angle-down"></i><span class="caret"></span></a></li>
            <?
            session_start();
            include("../methods/Helper/mysql_connect.php");
            include("../methods/Helper/sql_operation.php");
            $COMTEL = search('COMTEL', 'OWNMAS', 'COMNM', 'Trisoap');
            $COMEMAIL = search('COMEMAIL', 'OWNMAS', 'COMNM', 'Trisoap');
            $COMADD = search('COMADD', 'OWNMAS', 'COMNM', 'Trisoap');
            $CUSIDT = $_SESSION['CUSIDT'];
            if($CUSIDT == 'A'){
              ?>
              <li><a href="#">管理平台<i class="fa fa-angle-down"></i><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../manager/Update_Manager.php">權限管理</a></li>
                  <li><a href="../methods/Update_ITEMMAS.php">商品管理</a></li>
                  <li><a href="../methods/Update_ORDMAS.php">訂單管理</a></li>
                  <li><a href="../methods/Update_MSGMAS.php">留心語管理</a></li>
                </ul>
              </li>
              <li><a href="#">會員中心/登出<i class="fa fa-angle-down"></i><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../methods/View_ORDMAS.php">查看訂單</a></li>
                  <li><a href="../methods/Update_CUSMAS1.php">修改資料</a></li>
                  <li><a href="../methods/User_ChangePW1.php">修改密碼</a></li>
                  <li><a href="../methods/Order_Confirm.php">購物車內容</a></li>
                  <li><a href="../methods/User_logout.php">登出</a></li>
                </ul>
              </li>
              <?
            }
            elseif($CUSIDT == 'B'){
              ?>
              <li><a href="#">會員中心/登出<i class="fa fa-angle-down"></i><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../methods/View_ORDMAS.php">查看訂單</a></li>
                  <li><a href="../methods/Update_CUSMAS1.php">修改資料</a></li>
                  <li><a href="../methods/User_ChangePW1.php">修改密碼</a></li>
                  <li><a href="../methods/Order_Confirm.php">購物車內容</a></li>
                  <li><a href="../methods/User_logout.php">登出</a></li>
                </ul>
              </li>
              <?
            }
            else{
              ?>
              <li><a href="#">註冊/登入<i class="fa fa-angle-down"></i><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../methods/Create_CUSMAS1.php">註冊</a></li>
                  <li><a href="../methods/User_login1.php">登入</a></li>
                </ul>
              </li>
              <?
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <header data-background="img/product/product_idea.jpg" class="intro introhalf">
      <!-- Intro Header-->
      <div class="intro-body">
        <h1>商品一覽</h1>
        <h4>單品 / 禮盒</h4>
      </div>
    </header>
    <!-- News Block-->
    <section id="news" class="section-small">
      <div class="container">
        <h3 class="pull-left">商品一覽</h3>
        
        <div class="clearfix"></div>
        <div class="row grid-pad">
          <div class="col-sm-6"><a href="news-single-sidebar.html"><img src="img/product/rice.jpg" alt="" class="img-responsive center-block">
              <h5>田靜山巒禾風皂 (米皂）</h5></a>
            <p>甜杏仁油－蘊含天然維他命的豐富油，甜杏仁油是手工皂界的優良油品，富含天然維他命對於改善過乾的肌膚有良好的作用，亦適用於敏感性肌膚調理。禾風皂由台東池上在地小農「高家米倉」提供的純淨米糠乾燥研磨後添加至皂中，可藉由純淨米糠的顆粒清除肌膚中的細微髒汙</p><a href="product1.php" class="btn btn-gray btn-xs">更多</a>
          </div>
          <div class="col-sm-6"><a href="news-single-sidebar.html"><img src="img/product/lily.jpg" alt="" class="img-responsive center-block">
              <h5>金絲森林渲染皂 (金針花皂）</h5></a>
            <p>乳油木果脂－神奇奶油樹的聖品，由非洲乳油木樹中的果油提煉而出，在洗感上帶給肌膚滋潤卻又不黏膩的舒適體驗；搭配台東池上的乾燥金針，點點花絲由手作渲染而出的花紋更在視覺上帶來豐富感受。四種油品的經典配方是TriSoap三三的經典皂款，帶給你不論視覺或洗感上都獨一無二的經典旅程</p><a href="product2.php" class="btn btn-gray btn-xs">更多</a>
          </div>
          <div class="col-sm-6"><a href="news-single-sidebar.html"><img src="img/product/shakya.jpg" alt="" class="img-responsive center-block">
              <h5>釋迦手感果力皂 (釋迦皂）</h5></a>
            <p>葡萄籽油－洗淨後的清爽感受，葡萄籽油是軟油中的特色油品，洗淨後帶給肌膚非常清爽而不黏膩的感受，與橄欖油的成分交疊，會有大小泡沫交雜的豐富洗感。取自台東小農「釋迦小羊牧場」所提供的釋迦果實，藉由將微弱的果酸添加減低肥皂中過於刺激的鹼性達成天然的去除膚質表面髒汙的獨家體驗</p><a href="product3.php" class="btn btn-gray btn-xs">更多</a>
          </div>
          <div class="col-sm-6"><a href="news-single-sidebar.html"><img src="img/product/taitung.jpg" alt="" class="img-responsive center-block">
              <h5>三三臺東意象禮盒組</h5></a>
            <p>三三臺東意象禮盒，乃由TriSoap三三社會企業研發後，將技術免費移轉給李勝賢文教基金會，並由其協力生產。李勝賢文教基金會位於台東市，是以服務憨兒為主的小型作業所，開辦愛心二手商店及手工皂製作已有數年之久。裡頭的憨兒各個是作皂好手，只要提及作皂他們便展現優於一般人的專注力與專業程度。作皂不只為了成品，更在於每個憨兒在作好皂後的自信笑容</p><a href="product4.php" class="btn btn-gray btn-xs">更多</a>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Pagination
    <div class="section section-small bg-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <nav>
              <ul class="pagination">
                <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">&middot;&middot;&middot;</a><a href="#">38</a></li>
                <li><a href="#" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    -->
    <!-- Footer Section-->
    <section class="footer bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3><a href="about.html">關於我們</a></h3>
            <p>一切都是從一個座落在寧靜城市裡的、專門開辦二手販售
以及手工皂製作的小型作業所---「李勝賢文教基金會」開始的參訪李勝賢文教基金會的經驗讓我們留下了深刻的印象那天，我們第一次學做皂，也是第一次深深地被憨兒們打皂時嶄露出來的自信與笑容深深吸引
            </p>
          </div>
          <div class="col-md-4">
            <h3><a href="faq.html">常見問題</a></h3>
            <p>「冷製手工皂」是使用純天然的基底植物油，搭配上鹼水調配
  再經過攪拌、保溫、晾皂等各種精細的過程，而後皂化成一個
  具有不同皂性的產品。有別於一般大型賣場，或是各式衛妝開
  架式商店所販售的工廠壓製肥皂或沐浴精</p>
          </div>
          <div class="col-md-3">
            <h3><a href="contact.html">聯絡我們</a></h3>
            <p><i class="fa fa-phone fa-fw fa-lg"></i> <?echo $COMTEL;?> <br>
            <i class="fa fa-envelope fa-fw fa-lg"></i> <?echo $COMEMAIL;?> <br>
            <i class="fa fa-map-marker fa-fw fa-lg"></i> <?echo $COMADD;?>
            </p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-4">
            <ul class="list-inline">
              <li><a href="/"><i class="fa fa-twitter fa-fw fa-lg"></i></a></li>
              <li><a href="/"><i class="fa fa-facebook fa-fw fa-lg"></i></a></li>
              <li><a href="/"><i class="fa fa-google-plus fa-fw fa-lg"></i></a></li>
              <li><a href="/"><i class="fa fa-linkedin fa-fw fa-lg"></i></a></li>
            </ul>
          </div>
         
          <div class="col-md-3">
            <p class="small">&copy;2016 TriSoap All Rights Reserved</p>
          </div>
        </div>
      </div>
    </section>
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