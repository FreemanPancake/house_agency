
<!DOCTYPE html>
<html lang="zh-CN" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>用户登录</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css"/>
    <link href="asset/css/signin.css" rel="stylesheet">
    <script src="asset/js/ie-emulation-modes-warning.js"></script>
</head>
<body background="asset/images/bg.jpg">
<div class="container">
        <div class="header">
            <h1 class="text-muted"><a href="index.php?c=index&m=getindex" role="button" class="btn btn-warning btn-lg active">返回首页</a></h1>
        </div>
    <div class="col-md-4 col-md-offset-4">
        <form class="form-signin" action="index.php?c=user&m=userlogin" method="post">
            <br><br>
            <h2 class="form-signin-heading">用户登录</h2>
            <label for="inputEmail" class="sr-only">用户名</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="name" required autofocus>
            <br/>
            <label for="inputPassword" class="sr-only">密码</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me">记住我
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
        </form>
    </div>
</div> <!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="asset/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
