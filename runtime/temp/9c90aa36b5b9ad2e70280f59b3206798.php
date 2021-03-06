<?php /*a:1:{s:59:"E:\phpstudy\WWW\tp5\application\admin\view\login\login.html";i:1600320393;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo htmlentities($title); ?></title>
	<link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../../../public/static/admin/login/css/htmleaf-demo.css">
	<script src="../../../../public/static/admin/login/js/jquery-1.11.0.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../../../../public/static/admin/login/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="../../../../public/static/admin/login/css/message.css">
	<script src="../../../../public/static/admin/login/js/message.js"></script>

	<style type="text/css">
		.form-bg{
		    padding: 2em 0;
		}
		.form-horizontal{
		    background: #fff;
		    padding-bottom: 40px;
		    border-radius: 15px;
		    text-align: center;
		}
		.form-horizontal .heading{
		    display: block;
		    font-size: 35px;
		    font-weight: 700;
		    padding: 35px 0;
		    border-bottom: 1px solid #f0f0f0;
		    margin-bottom: 30px;
		}
		.form-horizontal .form-group{
		    padding: 0 40px;
		    margin: 0 0 25px 0;
		    position: relative;
		}
		.form-horizontal .form-control{
		    background: #f0f0f0;
		    border: none;
		    border-radius: 20px;
		    box-shadow: none;
		    padding: 0 20px 0 45px;
		    height: 40px;
		    transition: all 0.3s ease 0s;
		}
		.form-horizontal .form-control:focus{
		    background: #e0e0e0;
		    box-shadow: none;
		    outline: 0 none;
		}
		.form-horizontal .form-group i{
		    position: absolute;
		    top: 12px;
		    left: 60px;
		    font-size: 17px;
		    color: #c8c8c8;
		    transition : all 0.5s ease 0s;
		}
		.form-horizontal .form-control:focus + i{
		    color: #00b4ef;
		}
		.form-horizontal .fa-question-circle{
		    display: inline-block;
		    position: absolute;
		    top: 12px;
		    right: 60px;
		    font-size: 20px;
		    color: #808080;
		    transition: all 0.5s ease 0s;
		}
		.form-horizontal .fa-question-circle:hover{
		    color: #000;
		}
		.form-horizontal .main-checkbox{
		    float: left;
		    width: 20px;
		    height: 20px;
		    background: #11a3fc;
		    border-radius: 50%;
		    position: relative;
		    margin: 5px 0 0 5px;
		    border: 1px solid #11a3fc;
		}
		.form-horizontal .main-checkbox label{
		    width: 20px;
		    height: 20px;
		    position: absolute;
		    top: 0;
		    left: 0;
		    cursor: pointer;
		}
		.form-horizontal .main-checkbox label:after{
		    content: "";
		    width: 10px;
		    height: 5px;
		    position: absolute;
		    top: 5px;
		    left: 4px;
		    border: 3px solid #fff;
		    border-top: none;
		    border-right: none;
		    background: transparent;
		    opacity: 0;
		    -webkit-transform: rotate(-45deg);
		    transform: rotate(-45deg);
		}
		.form-horizontal .main-checkbox input[type=checkbox]{
		    visibility: hidden;
		}
		.form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{
		    opacity: 1;
		}
		.form-horizontal .text{
		    float: left;
		    margin-left: 7px;
		    line-height: 20px;
		    padding-top: 5px;
		    text-transform: capitalize;
		}
		.form-horizontal .btn{
		    float: right;
		    font-size: 14px;
		    color: #fff;
		    background: #00b4ef;
		    border-radius: 30px;
		    padding: 10px 25px;
		    border: none;
		    text-transform: capitalize;
		    transition: all 0.5s ease 0s;
		}
		@media only screen and (max-width: 479px){
		    .form-horizontal .form-group{
		        padding: 0 25px;
		    }
		    .form-horizontal .form-group i{
		        left: 45px;
		    }
		    .form-horizontal .btn{
		        padding: 10px 20px;
		    }
		}
	</style>
</head>
<body>
	<div class="htmleaf-container">
		<header class="htmleaf-header">
			<h1><?php echo lang('login_logo_text'); ?></h1>
			<div class="htmleaf-links">
			</div>
		</header>
		<div class="demo form-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-offset-3 col-md-6">
	                    <form class="form-horizontal" id="frm" >
	                        <span class="heading"><?php echo lang('login_login_text'); ?></span>
	                        <div class="form-group">
	                            <input type="text" name="login_name" class="form-control text_message" id="inputEmail3"  onblur="usererror()"    placeholder="<?php echo lang('login_username_text'); ?>">
	                            <i class="fa fa-user"></i>
	                        </div>
	                        <div class="form-group help">
	                            <input type="password" name="login_pwd" class="form-control text_pwd" id="inputPassword3"       onblur="pwderror()"  placeholder="<?php echo lang('login_login_pwd_text'); ?>">
	                            <i class="fa fa-lock"></i>
	                            <a href="#" class="fa fa-question-circle"></a>
	                        </div>
	                        <div class="form-group">
	                            <div class="main-checkbox">
	                                <input type="checkbox" value="None"  id="checkbox1" name="check"/>
	                                <label for="checkbox1"></label>
	                            </div>
	                            <span class="text"><?php echo lang('login_remember_pwd'); ?></span>
	                            <button type="button" id="submit" class="btn btn-default"><?php echo lang('login_button_text'); ?></button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>

	</div>

<script type="text/javascript">
	//登录
	$(function (){

		$("#submit").on('click',function () {

			$.ajax({
				type:'post',
				url:"<?php echo url('admin/Login/login'); ?>",
				data:$("#frm").serialize(),
				dataType:'json',
				success:function (data) {

					switch (data.status) {
						case 1:
							$.message({
								message:data.message,
								type:'success',
							});



							//$(location).attr('href', "<?php echo url('admin/index/index'); ?>");

							setTimeout('url()',2500 );
							break;
						case 0:
							$.message({
								message:data.message,
								type:'error'
							});
							break;
						case -1:
							$.message({
								message:data.message,
								type:'warning'
							});

							window.location.back();
						
					}
				}

			});

		});


	});

	//验证用户名称长度
function usererror()
{
	$username=$(".text_message").val();
	if($username=="" || $username.length < 5  || $username.length > 18 ){
		$.message({
			message:"<?php echo lang('login_username_format'); ?>",
			type:'warning',

		});
	}

}
//验证密码长度
	function pwderror()
	{
		$pwd=$(".text_pwd").val();
		if($pwd=="" || $pwd.length < 6  || $pwd.length > 18 ){
			$.message({
				message:"<?php echo lang('login_login_pwd_format'); ?>",
				type:'warning'
			});
		}

	}


	function url(){
			window.location = "<?php echo url('admin/index/index'); ?>";
	}

	/*var t=2;//设定跳转的时间
	setInterval("url()",1000); //启动1秒定时
	function url(){

		if(t==0){
			window.location = "<?php echo url('admin/index/index'); ?>";
			//location="http://www.daimajiayuan.com/sitejs-17251-1.html"; //#设定跳转的链接地址
		}
		document.getElementById('show').innerHTML=""+t+"秒后跳转"; // 显示倒计时
		t--; // 计数器递减

	}
*/


</script>
</body>
</html>