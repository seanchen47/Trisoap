<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/misc/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>三三社企-顧客問答
    </title>
    <!-- Bootstrap Core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="css/trisoap.css" rel="stylesheet">
    <script>
    function closed(){
    	alert("此功能將在近期開放，敬請期待");
    }
    </script>
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
            <li><a href="#" onClick="closed()">希望留心語<i class="fa fa-angle-down"></i><span class="caret"></span></a></li>
            <?
            session_start();
            $CUSIDT = $_SESSION['CUSIDT'];
            if($CUSIDT == 'A'){
              ?>
              <li><a href="#">管理平台<i class="fa fa-angle-down"></i><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../methods/Update_Manager.php">權限管理</a></li>
                  <li><a href="../methods/Update_ITEMMAS.php">商品管理</a></li>
                  <li><a href="../methods/Update_ORDMAS.php">訂單管理</a></li>
                  <li><a href="../methods/Update_DCTMAS.php">折扣管理</a></li>
                  <li><a href="../methods/Update_MSGMAS.php">留心語管理</a></li>
                  <li><a href="../methods/View_CUSMAS.php">查看客戶</a></li>
                  <li><a href="../methods/Create_ORDMAS1.php">建立訂單</a></li>
                </ul>
              </li>
              <li><a href="#">會員中心/登出<i class="fa fa-angle-down"></i><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../methods/View_ORDMAS.php">查看訂單</a></li>
                  <li><a href="../methods/Update_CUSMAS.php">修改資料</a></li>
                  <li><a href="../methods/User_ChangePW.php">修改密碼</a></li>
                  <li><a href="../methods/View_Purchase.php">購物車內容</a></li>
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
                  <li><a href="../methods/Update_CUSMAS.php">修改資料</a></li>
                  <li><a href="../methods/User_ChangePW.php">修改密碼</a></li>
                  <li><a href="../methods/View_Purchase.php">購物車內容</a></li>
                  <li><a href="../methods/User_logout.php">登出</a></li>
                </ul>
              </li>
              <?
            }
            else{
              ?>
              <li><a href="#">註冊/登入<i class="fa fa-angle-down"></i><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../methods/Create_CUSMAS.php">註冊</a></li>
                  <li><a href="../methods/User_login.php">登入</a></li>
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
    <header data-background="img/jumbotrons/attitude.jpg" class="intro introhalf">
      <!-- Intro Header-->
      <div class="intro-body">
        <h1>FAQ</h1>
        <br>
        <h4>Frequently Asked Questions</h4>
      </div>
    </header>
    <!-- Buttons-->
    <section>
      <div class="container">
        <div class="row wow fadeIn">
          <div class="col-md-8 col-md-offset-2">
            <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
              <div class="panel panel-default">
                <div id="headingOne" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">三三的肥皂都是如何製作的？什麼是手工皂？ </a></h4>
                </div>
                <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                  <div class="panel-body">三三吾鄉皂堅持品質最高的「冷製」作法。「冷製手工皂」是使用純天然的基底植物油，搭配上鹼水調配，再經過攪拌、保溫、晾皂等各種精細的過程，而後皂化成一個個具有不同皂性的產品。有別於一般大型賣場，或是各式衛妝開架式商店所販售的工廠壓製肥皂或沐浴精（其中多為石油裂解而成的產物），冷製手工皂製作過程無任何化學添加，堅持33天以上的晾皂期，才能帶給你最天然的清潔享受。</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="headingTwo" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">三三為什麼堅持無香？</a></h4>
                </div>
                <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                  <div class="panel-body">「手工皂的本質是清潔，三三最終還是要回歸純粹」，目前市面上具有各種不同香氛和氣味的手工皂不外乎有兩種添加的形式－－香精添加與精油添加。經研究證實，過多的人工合成與化學合成添加的香精，會對人體及肌膚帶來危害，嚴重者更會造成皮膚過敏。而精油雖然是天然萃取而成，但對皂而言仍是添加物，且對於肥皂清潔之功能而言，並無任何幫助。此外，手工皂添加的精油，在皂化過程中會大量揮發，難以讓香氣延續，更導致手工皂保存、變質的問題；也因此，三三除了無香的呼籲與初心，更希望與各品牌同力推動回歸原始的自然，和更純粹的清潔。 </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="headingThree" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">三三沒有精油及香精的添加，為何價格仍然偏高呢？</a></h4>
                </div>
                <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                  <div class="panel-body">手工皂添加精油，不僅成本昂貴更效果不彰，故三三堅持無香，去除香精以及精油的添加。也因此，我們得以將更多的時間及成本，投注在研發試驗最適合手工皂的配方，並使用市面普遍為降低成本而不敢使用的，較高單價的高品質天然油品。  三三更將省去精油添加的成本，花費在技術移轉、社福團體協力、及在地小農的資源鏈結，創造共同協力宣傳的網絡，期待開創一個除了無香，更是嶄新的手工皂在地合作模式。 </div>
                </div>
              </div>
              <div class="panel panel-danger">
                <div id="heading4" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed">三三團隊只有三個人，那所有的產品都是由誰作出來的呢？ </a></h4>
                </div>
                <div id="collapse4" role="tabpanel" aria-labelledby="heading4" class="panel-collapse collapse">
                  <div class="panel-body">製作手工皂的過程中，需要經過鹼水的調配、量油、加熱、攪拌、入模、拉花、保溫、晾皂......等過程，而這些繁瑣的工作，全都由與我們合作的「李勝賢文教基金會」中的憨兒，在老師們的陪同下協力生產完成，不僅過程中對於憨兒們的職業訓練有所幫助，更能夠讓憨兒們透過產品的完成，獲得職業上的成就，他們每個人都是製作手工皂多年經驗的好手。 </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="heading5" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed">憨兒們的工作時數多少？會不會反而有剝削憨兒的疑慮？ </a></h4>
                </div>
                <div id="collapse5" role="tabpanel" aria-labelledby="heading5" class="panel-collapse collapse">
                  <div class="panel-body">三三與李勝賢文教基金會謹守<身心障礙者權益促進法>中，對於憨兒的勞動相關權益規定，並定期接受政府評估和開會，絕不會產生剝削憨兒的情況。也因此，三三非常注重生產及銷售之間的協調管控，若銷售訂單數量過高，而產能無法應付時，我們將委由其他合作的單位協助生產，或是延後出貨時間，以確保憨兒的勞動權益及三三產品的品質。</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="heading6" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed">三三的手工皂可以使用多久？</a></h4>
                </div>
                <div id="collapse6" role="tabpanel" aria-labelledby="heading6" class="panel-collapse collapse">
                  <div class="panel-body">就保存上來說，三三產品皆堅持33天以上的晾皂期，以臺灣的氣候而言，大約可放置一年半左右。而就使用上來說，因人而異，但平均來說三三吾鄉皂每100g供給一人每天洗澡一次的話，約可使用一個月至一個半月左右的時間，可依此類推。</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="heading7" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed">三三的手工皂可以洗身體或臉嗎？還是只能洗手？</a></h4>
                </div>
                <div id="collapse7" role="tabpanel" aria-labelledby="heading7" class="panel-collapse collapse">
                  <div class="panel-body">三三手工皂主要研發走向以沐浴皂為主，可用於洗臉、身體以及洗手，皂款配方中的滋潤搭配，泡沫非常細緻綿密，因此洗臉也非常適合哦！</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="heading8" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed">三三的肥皂都是憨兒作出來的會不會在過程中有疏失，產生對人體有害的物質？</a></h4>
                </div>
                <div id="collapse8" role="tabpanel" aria-labelledby="heading8" class="panel-collapse collapse">
                  <div class="panel-body">三三產品在出貨前皆會經過酚酞指示劑之檢驗，若檢驗結果顯示手工皂PH值在9以下，表示為非強鹼且皂化成熟之皂品。憨兒在製作過程中，全程皆有受過訓練之老師在旁陪同，憨兒在製作過程中有任何疑慮，皆由老師在旁解答。近期三三也將申請SGS之相關檢驗，請您安心使用。</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer Section-->
    <section class="footer bg-gray">
      <div class="container">
        <div class="row">
   
        <div class="row">
          <div class="col-md-4">
            <ul class="list-inline">
              <li><a href="https://www.facebook.com/trisoap/?fref=ts"><i class="fa fa-facebook fa-fw fa-lg"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter fa-fw fa-lg"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus fa-fw fa-lg"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin fa-fw fa-lg"></i></a></li>
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