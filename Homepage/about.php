<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/misc/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>三三社企-關於三三
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
    <header data-background="img/about_team.jpg" class="intro introhalf">
      <!-- Intro Header-->
      <div class="intro-body">
        <h1>關於我們</h1>

      </div>
    </header>
    <!-- About Section-->
    <section id="about">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-6">
            <h3>理念</h3>
            <p class="no-pad">討厭歧視，討厭壓迫，或許我們未來都可以做一個夢
為了做一個沒有歧視的夢而努力。
社工系相關領域，2015年因為認知到社福團體需要解決的問題而成為三三的創辦人之一
在三三中扮演研發與社福小農之間的串聯者，在跟小農洽談的時候愛上了臺東。在三三草創的時期也經歷過許多挫折，但因為接受到一次嚴重地對憨兒的歧視，燃起了想要推動三三的信念，「三三不僅是一個品牌，更是改變社會的一個生活態度。」</p>
            <h2 class="classic">Trisoap</h2>
          </div>
          <div class="col-lg-5 col-lg-offset-1 text-center">
            <h3>&nbsp;</h3>
            <div data-value="0.93" class="circle"><span></span>
              <div class="agenda">公益</div>
            </div>
            <div data-value="0.82" class="circle"><span></span>
              <div class="agenda">企業</div>
            </div>
            <div data-value="0.68" class="circle"><span></span>
              <div class="agenda">目標</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Team Section-->
    <section id="team" class="bg-white text-center">
      <div class="container">
        <h3>團隊</h3>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <h4>尹又令</h4>
            <p><img src="img/team/avatar5.jpg" alt="" class="img-responsive center-block"></p>
            <ul class="list-inline">
              <li><a href="/"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
              <li><a href="/"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
              <li><a href="/"><i class="fa fa-google-plus fa-2x fa-fw"></i></a></li>
            </ul>
            <h5>Pusher</h5>
          </div>
          <div class="col-md-3 col-sm-6">
            <h4>Chieh Young</h4>
            <p><img src="img/team/avatar2.jpg" alt="" class="img-responsive center-block"></p>
            <ul class="list-inline">
              <li><a href="/"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
              <li><a href="/"><i class="fa fa-youtube fa-2x fa-fw"></i></a></li>
              <li><a href="/"><i class="fa fa-steam fa-2x fa-fw"></i></a></li>
            </ul>
            <h5>Manager</h5>
          </div>
          <div class="col-md-3 col-sm-6">
            <h4>Maggy Chen</h4>
            <p><img src="img/team/avatar3.jpg" alt="" class="img-responsive center-block"></p>
            <ul class="list-inline">
              <li><a href="/"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
              <li><a href="/"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
              <li><a href="/"><i class="fa fa-instagram fa-2x fa-fw"></i></a></li>
            </ul>
            <h5>Developer</h5>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Footer Section-->
    <section class="footer bg-gray">
      <div class="container">
     
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