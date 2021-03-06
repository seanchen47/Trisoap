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
		<title>購物須知｜三三吾鄉手工皂Trisoap</title>
		<meta name="description" content="如何購買 / 付款說明 / 發票說明 / 退換貨說明 / 配送說明，三三吾鄉不僅提供你好品質的產品，也提供你最好的服務。">
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
		<header data-background="img/jumbotrons/guide.png" class="intro introhalf" id="intro-product">
			<!-- Intro Header-->
			<div class="intro-body">
				<h1>購物須知</h1>
			</div>
		</header>

		<section id="shopping-guide" class="bg-white">
			<div class="container">
				<h3>購物說明</h3>
				<div>
					<a href="#shop-guide">如何購買</a><span> / </span>
					<a href="#pay-guide">付款說明</a><span> / </span>
					<a href="#invoice-guide">發票說明</a><span> / </span>
					<a href="#return-guide">退換貨說明</a><span> / </span>
					<a href="#delivery-guide">配送說明</a>
				</div>
				<div class="row" id="shop-guide">
					<div class="col-xs-10 col-xs-offset-1">
						<h4>
							如何購買
							<img class="guide" src="img/guide/cash.png">
							<!-- cash by Shmidt Sergey from the Noun Project -->
						</h4>
						<h5>
							電話購買
							<img class="guide" src="img/guide/phone.png">
							<!-- Phone by Icons Bazaar from the Noun Project -->
						</h5>
						<p>	服務電話：<a href="tel:0952527077">0952527077</a>
							電子郵件購買：<a href="mailto:service@trisoap.com">service@trisoap.com</a>
							¶ 海外訂購適用電話及電子郵件購買
							¶ 服務時間：09 : 00 – 17 : 00 例假日除外
						</p>
						<h5>
							網路購物
							<img class="guide" src="img/guide/web.png">
							<!-- Browser by Sergey Demushkin from the Noun Project -->
						</h5>
						<p>	三三吾鄉官方形象網站提供顧客詳細的商品介紹、生產合作單位以及相關產品資訊，可登入會員會進行選購。
							¶ 官網將不定時推出優惠訊息，請密切關注！
						</p>
						<h5>其他通路購買</h5>
						<p>	三三提供多元的購買管道，也可至相關合作單位購買。
							Pinkoi設計館 ：<a href="https://www.pinkoi.com/product/HrSMGBn3">https://www.pinkoi.com/product/HrSMGBn3</a>
						</p>
					</div>
				</div>
				<hr class="seperate">
				<div class="slogan">
					<h4>目前全館滿777及可享臺灣本島免運費！</h4>
				</div>
				<hr class="seperate">
				<div class="row" id="pay-guide">
					<div class="col-xs-10 col-xs-offset-1">
						<h4>
							付款說明
							<img class="guide" src="img/guide/wallet.png">
							<!-- Wallet by anbileru adaleru from the Noun Project -->
						</h4>
						<h5>信用卡付款</h5>
						<p>	我們將為您轉向至歐付寶第三方支付平台，提供您最安心的資料保密以及嚴謹順暢的購物流程。歐付寶通過經濟部Cash Inbound/Cash Outbound網路代結匯資格，且逐步推出整合系統。金流方面已與聯合信用卡處理中心、臺灣銀行、第一銀行、華南銀行、台北富邦、國泰世華、玉山銀行、台新銀行、中國信託……等多家銀行合作(以銀行代碼排序)，共同推展信頼之第三方支付交易履約保證平台。
						</p>
						<h5>網路ATM</h5>
						<p>	我們將為您轉向至歐付寶第三方支付平台，提供您最安心的資料保密以及嚴謹順暢的購物流程。將由歐付寶提供您線上匯款的服務。
						</p>
						<h5>ATM轉帳</h5>
						<p>	我們將為您轉向至歐付寶第三方支付平台，提供您安心的資料保密以及嚴謹順暢的購物流程。並將由您選擇方便的匯款銀行，提供您銀行匯款資訊。
							¶ 為方便以及加速購物流程，也可事先申請歐付寶會員哦！
						</p>
					</div>
				</div>
				<hr class="seperate">
				<div class="row" id="invoice-guide">
					<div class="col-xs-10 col-xs-offset-1">
						<h4>
							發票說明
							<img class="guide" src="img/guide/invoice.png">
							<!-- Dollar Invoice by Stock Image Folio from the Noun Project -->
						</h4>
						<p>	發票可於購買時之特殊需求中填寫需要二聯式或三聯式之發票以及是否需要統一編號，若無填寫則由三三吾鄉官方依照法規程序開立發票。
						</p>
					</div>
				</div>
				<hr class="seperate">
				<div class="row" id="return-guide">
					<div class="col-xs-10 col-xs-offset-1">
						<h4>
							退換貨說明
							<img class="guide" src="img/guide/return.png">
							<!-- Package box return by arloenl evinniev from the Noun Project -->
						</h4>
						<p>	三三秉持社企精神，出貨前皆透過層層品質控管以及特殊篩選模式，替消費者把關產品的最高品質。如若發現商品於配送過程或其他因素造成瑕疵，三三亦遵照消費者保護法提供七天內退換貨服務。
						¶ 若遇瑕疵需退換貨請電洽服務專線<a href="tel:0952527077">0952-527077</a>或來信客服信箱<a href="mailto:service@trisoap.com">service@trisoap.com</a>，我們將最快速度為您服務。
						¶ 如欲瑕疵請保留原包裝以及發票，遵照退換貨流程指示進行退換貨。
						</p>
					</div>
				</div>
				<hr class="seperate">
				<div class="row" id="delivery-guide">
					<div class="col-xs-10 col-xs-offset-1">
						<h4>
							配送說明
							<img class="guide" src="img/guide/delivery.png">
							<!-- package accept by unlimicon from the Noun Project -->
						</h4>
						<p>	一律交由中華郵政進行配送，涵蓋地區包含臺灣本島以及離島地區。若遇假日期間，配送時間還請耐心等候。
						¶ 不適用國外地區配送，若需國外訂購請電話洽詢。
						</p>
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