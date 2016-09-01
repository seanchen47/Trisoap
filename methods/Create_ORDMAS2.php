<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../Homepage/img/misc/favicon.png">
    <title>建立訂單</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='css/sign.css' rel='stylesheet' type='text/css'>
    <link href='css/table.css' rel='stylesheet' type='text/css'>
</head>

<body>
	<?php
	session_start();
	include_once("Helper/mysql_connect.php");
    include_once("Helper/sql_operation.php");
    include_once("Helper/redirect.js");
	$EMAIL = $_SESSION['EMAIL'];

	if($EMAIL != null){
    ?>
	<br>
    <div class="sign-block" style="width: 400px;">
        <form name="form" method="post" action="Create_ORDMAS2_finish.php">
            <input type="hidden" name="ORDTYPE" value="G" />
            <?
            $queryTEL = search('TEL', 'CUSMAS', 'EMAIL', $EMAIL);
            $queryCUSADD = search('CUSADD', 'CUSMAS', 'EMAIL', $EMAIL);
            if($queryTEL == null || $queryCUSADD == null){
                ?><h1>請先補充會員資料</h1><?
                if($queryTEL == null){
                    ?><label for="tel"><input type="hidden" name="TELid" value="Y"/>
                    <input type="text" name="TEL" placeholder="您的聯絡電話" id="tel"/></label><?
                }
                if($queryCUSADD == null){
                    ?><label for="add"><input type="hidden" name="CUSADDid" value="Y"/>
                    <input type="text" name="CUSADD" placeholder="您的通訊地址" id="add"/></label><?
                }
            }
            ?>
        	<h1>請先建立訂單</h1>
	        <label for="need"><textarea name="ORDINST" rows="5" placeholder="訂單特殊要求" id="need"></textarea></label>
            <h1>請選擇付款方式</h1>
            <label for="PAYTYPE">
                <div class="q-select">
                    <select name="PAYTYPE" id="PAYTYPE" required>
                        <option value="">付款方式</option>
                        <option value="A">信用卡</option>
                        <option value="B">ATM</option>
                        <option value="C">網路ATM</option>
                    </select>
                </div>
            </label>
            <button type="submit" class="promise">確定</button><br>
            <a href="View_Purchase.php"><button type="button" class="cancel">取消</button></a>
	    </form>
    </div>
	<?php
	}
	else{
        ?>
        <script>
        redirect("../Homepage/product.php");
        alert("請先登入或註冊!");
        </script>
        <?
	}
		?>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>