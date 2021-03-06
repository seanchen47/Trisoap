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
		<title>試用品申請｜三三吾鄉手工皂Trisoap</title>
		<meta name="description" content="三三的好品質，讓試用過的人都一致好評，好皂不怕人試，輕鬆幾個按鈕，免費獲得三三吾鄉試用品。">
		<!-- Bootstrap Core CSS-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- FlexSlider CSS -->
    	<link href="../FlexSlider/flexslider.css" rel="stylesheet">
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
		<header data-background="img/jumbotrons/trial.png" class="intro introhalf" id="intro-product">
			<!-- Intro Header-->
			<div class="intro-body">
				<h1>試用品申請</h1>
				<a href="https://trisoap.typeform.com/to/voNGpg" target="_blank" role="button" class="btn">申請試用三三吾鄉皂</a>
			</div>
		</header>

		<section id="trial" class="bg-white text-center">
			<div class="slogan">
				<h3>三三的好品質，讓試用過的人都一致好評！</h3>
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div>
								<p>政大 陳同學</p>
								<p>在洗的時候小農的米糠顆粒感覺很明顯，有點磨砂去角質的感覺，對皮膚好又健康。</p>
							</div>
						</li>
						<li>
							<div>
								<p>文大 嚴同學</p>
								<p>第一次拿三三的試用皂來洗手的時候真的有嚇到！特殊的內袋設計起泡感覺完全加倍！</p>
							</div>
						</li>
						<li>
							<div>
								<p>臺北 蘇先生</p>
								<p>因為朋友的介紹認識三三的，收到試用品的時候很驚喜，洗起來很舒服，包裝也很有質感。</p>
							</div>
						</li>
						<li>
							<div>
								<p>台東 蘇小姐</p>
								<p>因為我皮膚有點油，所以不喜歡洗起來油膩的沐浴乳，<br>但三三的產品用起來不會乾澀但是又有滋潤的感覺，真的很棒。</p>
							</div>
						</li>
						<li>
							<div>
								<p>台北 王先生</p>
								<p>平常都是用肥皂洗澡，但是三三的手工皂洗起來很天然舒服，感覺對皮膚真的很好。</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="slogan bg-orange">
				<h3>三三捨去大筆金錢買廣告的行銷手法，選擇最貼近客人的試用計畫</h3>
				<p>好皂不怕人試，真正的好品質一洗就知道</p>
			</div>
			<div class="features" id="feature1">
				<div class="container vertical-middle">
					<h3>台東小農素材添加：池上米米糠、池上無硫金針，帶給你豐富體驗</h3>
					<p class="feature-text">池上米選用與高家米倉小農合作，碾米後的最後一道青殼，作為素材添加不僅天然也可增加去角質洗感。
					選用在地無硫金針乾燥的小農食在品牌，取代傳統的化學食用色素，用金針花絲點綴不同的視覺感受。</p>
				</div>
			</div>
			<div class="features" id="feature2">
				<div class="container vertical-middle">
					<h3>天然植物油調和，無毒無化學添加</h3>
					<p class="feature-text">皂內綜合食品級天然橄欖油、椰子油、乳油木果脂、葡萄籽油......等高達八項天然植物油品，
					堅持無化學溶劑、染劑、矽靈、起泡劑、防腐劑……等有害物添加，勢要讓消費者感受到天然洗感的特色。</p>
				</div>
			</div>
			<div class="features" id="feature3">
				<div class="container vertical-middle">
					<h3>冷製手作，堅持超過一個月以上量皂期</h3>
					<p class="feature-text">選用皂中最繁複冷製作法，並添加三三獨門步驟，完整16步驟毫不馬虎，堅持在中途加入超過一個月以上量皂期，
					並在出貨前使用試紙檢驗酸鹼值，高嚴謹的品管方法和高品質的冷製製成，是我們要帶給消費者的一種態度。</p>
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
		<!-- FlexSlider JS -->
	    <script src="../FlexSlider/jquery.flexslider-min.js"></script>
	    <script src="js/flexslider_message.js"></script>
	    <script src="js/typeform.js"></script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</body>
</html>