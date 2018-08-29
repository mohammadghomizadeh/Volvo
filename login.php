
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ورود | کنترل پنل</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="adminpanel/_Content/Stylesheet/bootstrap-theme.css">
    <!-- Bootstrap rtl -->
    <link rel="stylesheet" href="adminpanel/_Content/Stylesheet/rtl.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="adminpanel/_Content/Plugin/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="adminpanel/_Content/Plugin/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminpanel/_Content/Stylesheet/AdminLTE.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="adminpanel/_Content/Plugin/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>ورود به سایت</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">فرم زیر را تکمیل کنید و ورود بزنید</p>

        <form action="login-check.php" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="نام کاربری" name="username" id="username">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="رمز عبور" name="password" id="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> مرا به خاطر بسپار
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit" id="submit">ورود</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="social-auth-links text-center">
            <?php
                if(isset($_GET['err']))
                {
                    $err = $_GET['err'];
                    if($err == "usernamefail")
                    {
                       ?>
                        <a  class="btn btn-block btn-social btn-google btn-flat">نام کاربری صحیح نیست</a>
            <?php
                    }elseif($err == "passwordfail")
                    {
                        ?>
                        <a  class="btn btn-block btn-social btn-google btn-flat">کلمه عبور صحیح نیست</a>
                        <?php
                    }
                }
            ?>

        </div>

        <!-- /.social-auth-links -->




    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="adminpanel/_Content/Plugin/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="adminpanel/_Content/Plugin/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="adminpanel/_Content/Plugin/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
