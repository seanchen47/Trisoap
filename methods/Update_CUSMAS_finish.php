<meta charset="utf-8">
<link rel="shortcut icon" href="../Homepage/img/misc/favicon.png">
<?php 
session_start();
include_once("Helper/mysql_connect.php");
include_once("Helper/handle_string.php");
include_once("Helper/redirect.js");
$EMAIL = $_SESSION['EMAIL'];
$CUSIDT = $_SESSION['CUSIDT'];

if($EMAIL != null){
        $CUSNM = input('CUSNM');
        $CUSADD = input('CUSADD');
        $CUSTYPE = $_POST['CUSTYPE'];
        $TEL = input('TEL');
        $SPEINS = input('SPEINS');
        $TAXID = input('TAXID');
        date_default_timezone_set('Asia/Taipei');
        $UPDATEDATE = date("Y-m-d H:i:s");

        $message = null;
        $sql = "UPDATE CUSMAS SET CUSNM='$CUSNM' WHERE EMAIL='$EMAIL'";
        if(!mysql_query($sql)){
                $message = $message . '更新姓名失敗 \n';
        }
        $sql = "UPDATE CUSMAS SET CUSADD='$CUSADD' WHERE EMAIL='$EMAIL'";
        if(!mysql_query($sql)){
                $message = $message . '更新地址失敗 \n';
        }
        $sql = "UPDATE CUSMAS SET CUSTYPE='$CUSTYPE' WHERE EMAIL='$EMAIL'";
        if(!mysql_query($sql)){
                $message = $message . '更新膚質失敗 \n';
        }
        $sql = "UPDATE CUSMAS SET TEL='$TEL' WHERE EMAIL='$EMAIL'";
        if(!mysql_query($sql)){
                $message = $message . '更新電話失敗 \n';
        }
        $sql = "UPDATE CUSMAS SET SPEINS='$SPEINS' WHERE EMAIL='$EMAIL'";
        if(!mysql_query($sql)){
                $message = $message . '更新特殊要求失敗 \n';
        }
        $sql = "UPDATE CUSMAS SET TAXID='$TAXID' WHERE EMAIL='$EMAIL'";
        if(!mysql_query($sql)){
                $message = $message . '更新統一編號失敗 \n';
        }
        $sql = "UPDATE CUSMAS SET UPDATEDATE='$UPDATEDATE' WHERE EMAIL='$EMAIL'";
        mysql_query($sql);

        if($message == null){    
                ?>
                <script>
                redirect("../Homepage/index.php");
                alert("資料修改成功");
                </script>
                <?php 
        }
        else{
                ?>
                <script>
                redirect("Update_CUSMAS.php");
                alert("<?php echo $message;?>");
                </script>
                <?php 
        }
}
else
{
        ?>
        <script>
        redirect("../Homepage/index.php");
        alert("您無權限觀看此頁面!");
        </script>
        <?php 
}
?>