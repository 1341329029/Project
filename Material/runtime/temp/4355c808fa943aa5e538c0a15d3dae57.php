<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpstudy\WWW\material\public/../application/admin\view\login\index.html";i:1534204698;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>北华大学材料科学与工程学院</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static//admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static//admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/static//admin/style/beyond.css" rel="stylesheet">
    <link href="/static//admin/style/demo.css" rel="stylesheet">
    <link href="/static//admin/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" placeholder="name" name="name" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" style="width:100px;float:left;" name="code" type="text">
                    <img src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" width="120" style="float:left; cursor:pointer;" alt="captcha" />
                </div>
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" style="margin-top: 20px" value="Login" type="submit">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center">北华大学</p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="/static//admin/style/jquery.js"></script>
    <script src="/static//admin/style/bootstrap.js"></script>
    <script src="/static//admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="/static//admin/style/beyond.js"></script>




</body><!--Body Ends--></html>