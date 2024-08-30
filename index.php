<?php
require "php-qrcode/qrcode.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR Code Generator</title>
</head>
<style>
    body{
        font-family: Arial, 'sans-serif';
    }
    h1{
        text-align: center;
    }
    table tr td:first-child{
        padding-left: 20px;
    }
    table tr td:not(:first-child){
        padding-left: 20px;
    }
    .text-box{
        width: 200px;
        height: 20px;
    }
    .submit_box{
        width: 100px;
        height: 25px;
        border-radius: 5px;
    }
    .submit_box:hover{
        border-color: white;
    }
    #image-box {
        width: 300px;
        height: 300px;
        border: 2px solid #ccc;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f0f0f0;
        background-size: cover;
        background-position: center;
        margin-top: 20px;
        margin: 0 auto;
    }
    .selector{
        width: 100px;
        height: 25px;
    }
</style>

<body>
    <h1>QR Code Generator</h1>
    <div id="image-box">
        <?php
        if(isset($_GET['url'])){
            if(isset($_GET['size'])){
                $size = $_GET['size'];
            }
            else{
                $size = "qrl";
            }
            $url = $_GET['url'];
        ?>
        <p><img src="php-qrcode/qrcode.php?s=<?php echo $size ?>&d=<?php echo $url ?>"></p>
        <?php } ?>
    </div>
    <br>
    <form action="index.php" method="get">
        <table>
            <tr>
                <td>
                    URL:
                </td>
                <td>
                    <input name="url" class="text-box" type="text" placeholder="https://google.com">
                </td>
                <td>
                    QR Type:
                </td>
                <td>
                    <select class="selector" name="size" id="size">
                        <option value="qr_l">QR_L</option>
                        <option value="qr_m">QR</option>
                        <option value="qr_q">QR_M</option>
                        <option value="qr_q">QR_Q</option>
                        <option value="qr_h">QR_H</option>
                    </select>
                </td>
                <td colspan="2">
                    <input class="submit_box" type="submit" name="btn_submit" value="Generate">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>