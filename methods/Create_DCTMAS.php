<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../Homepage/img/misc/favicon.png">
    <title>三三社企-新增折扣</title>
    <meta name="author" content="2016 NTUIM SA GROUP7">
    <meta name="description" content="">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- custim css -->
    <link href="css/sign.css" rel="stylesheet">
</head>

<body>
<br>
<div class="sign-block">
    <h1>新增折扣</h1>
        <?
        session_start();
        $EMAIL = $_SESSION['EMAIL'];
        $CUSIDT = $_SESSION['CUSIDT'];
        if($EMAIL != null && $CUSIDT == 'A'){
            ?>
            <form name="form" method="post" action="Create_DCTMAS_finish.php">
            <label for="name"><input type="text" name="DCTNM" placeholder="折扣名稱" id="name"/></label>
            <label for="price"><input type="text" name="DCTPRICE" placeholder="折扣金額" id="price"/></label>
            <label for="type">
                <div class="q-select">
                    <select name="DCTSTAT" id="type">
                        <option value="">有效方法</option>
                        <option value="1">一次有效</option>
                        <option value="2">永久有效</option>
                    </select>
                </div>
            </label>
            <label for="PW"><input type="text" name="PW" placeholder="再次輸入您的密碼" id="PW"/></label>
            <button type="submit" class="promise">確定</button>
            </form>
            <button type="button" class="cancel"></buttom><a href="Update_DCTMAS.php">取消</a>
            <?
        }
        else{
            ?>
            <script>
            redirect("../Homepage/index.php");
            alert("您無權限觀看此頁面!");
            </script>
            <?
        }
        ?>
</div>
</body>
</html>