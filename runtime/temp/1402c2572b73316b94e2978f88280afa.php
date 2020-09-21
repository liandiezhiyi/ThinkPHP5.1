<?php /*a:1:{s:43:"E:\phpstudy\WWW\tp5\thinkphp\tpl/error.html";i:1600310105;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>


    <style type="text/css">
        *{ padding: 0; margin: 0; }
        body{ background: #fff; font-family: "Microsoft Yahei","Helvetica Neue",Helvetica,Arial,sans-serif; color: #333; font-size: 16px; }
        .system-message{ padding: 24px 48px; }
        .system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
        .system-message .jump{ padding-top: 10px;   }
        .system-message .jump a{ color: #333; }
        .system-message .success,.system-message .error{ line-height: 1.8em; font-size: 30px; }
        .system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display: none; }
        div#mother{ margin:0 auto; width:943px; height:572px; position:relative; }
        div#errorBox{ background: url(../../public/img/404_bg.png) no-repeat top left; width:943px; height:572px; margin:auto; }
        div#errorText{ color:#39351e; padding:146px 0 0 446px }
        div#errorText p{ width:303px; font-size:14px; line-height:26px; }
        div.link{ /*background:#f90;*/ height:50px; width:145px; float:left; }
        div#home{ margin:20px 0 0 444px;}
        div#contact{ margin:20px 0 0 25px;}
        h1{ font-size:40px; margin-bottom:35px; }
    </style>
</head>
<body>

<div class="system-message" >
    <p class="error">

        <?php switch ($code) {case 1:?>
    <h1>操作成功!</h1>
    <p class="success"><?php echo(strip_tags($msg));?></p>
    <?php break;case 0:?>
    <!--<h1>抱歉,出错啦!</h1>-->
    <div id="mother">
        <div id="errorBox">
            <div id="errorText">
                <h1 class="error"><?php echo(strip_tags($msg));?></h1>

                <p>
                    似乎你所寻找的网页已移动或丢失了。
                <p> 或者也许你只是键入错误了一些东西。</p>
                    请不要担心，这没事。如果该资源对你很重要，请与管理员联系。
                </p>
                <p>
                    火星不太安全，我可以免费送你回地球
                </p>
                <p class="detail"></p>
                <p class="jump" style="font-size:20px; line-height: 1.2em;" >
                    页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
                </p>

            </div>

        </div>
    </div>

    <?php break;} ?>

    </p>



</div>
<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
        window.stop = function (){
            console.log(111);
            clearInterval(interval);
        }
    })();
</script>
</body>
</html>