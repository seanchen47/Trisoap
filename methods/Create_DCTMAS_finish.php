<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../Homepage/img/misc/favicon.png">
<?php
session_start();
include_once("Helper/mysql_connect.php");
include_once("Helper/handle_string.php");
include_once("Helper/sql_operation.php");
include_once("Helper/redirect.js");
$EMAIL = $_SESSION['EMAIL'];
$CUSIDT = $_SESSION['CUSIDT'];
$DCTNM = input('DCTNM');
$DCTPRICE = input('DCTPRICE');
$DCTSTAT = input('DCTSTAT');
$PW = input('PW');
$message = null;

if($EMAIL != null && $CUSIDT == 'A'){
        $queryPW = search('CUSPW', 'CUSMAS', 'EMAIL', $EMAIL);
        if(encrypt($PW) != $queryPW){
                $message = $message . '密碼錯誤';
        }

        if($message == null){
                $str = "23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ";
                $code = '';
                do{
                        $code = '';
                        $DCTcheck = FALSE;
                        for($i = 0; $i < 12; $i++) {
                                $code .= $str[mt_rand(0, strlen($str)-1)];
                        }
                        $queryDCTID = search('DCTID', 'DCTMAS', 'DCTID', $code);
                        if($queryDCTID == $code){
                                $DCTcheck = TRUE;
                        }
                }
                while($DCTcheck);
                date_default_timezone_set('Asia/Taipei');
                $CREATEDATE = date("Y-m-d H:i:s");
                $sql = "insert into DCTMAS (DCTID, DCTNM, DCTPRICE, DCTSTAT, CREATEPERSON, CREATEDATE) values ('$code', '$DCTNM', '$DCTPRICE', '$DCTSTAT', '$EMAIL', '$CREATEDATE')";
                if(mysql_query($sql)){
                        ?>
                        <script>
                        redirect("Update_DCTMAS.php");
                        alert("新增成功，兌換碼為 <?echo $code;?>");
                        </script>
                        <?
                }
                else{
                        ?>
                        <script>
                        redirect("Create_DCTMAS.php");
                        alert("新增失敗");
                        </script>
                        <?
                }
        }
        else{
                ?>
                <script>
                redirect("Create_DCTMAS.php");
                alert("密碼錯誤");
                </script>
                <?
        }
}
else{
        ?>
        <script>
        redirect("../Homepage/index.php");
        alert("您無權限觀看此頁面!");
        </script>
        <?
}