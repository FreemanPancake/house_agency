<!-- 
<!DOCTYPE html>
<html lang="zh-CN" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>管理员登录</title>
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
        <form class="form-signin" action="admin.php?c=user&m=adminlogin">
            <br><br>
            <h2 class="form-signin-heading">管理员登录</h2>
            <label for="inputEmail" class="sr-only">用户名</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
            <br/>
            <label for="inputPassword" class="sr-only">密码</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me">记住我
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
        </form>
    </div>
</div>
<script src="asset/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html> -->

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>管理员登录</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="aasset/css/bootstrap.css" />
    <link rel="stylesheet" href="asset/css/login.css" />
    <link rel="stylesheet" href="asset/css/magic.css" />
    <link rel="stylesheet" href="asset/css/my.css"/>
</head>
<body>
    <div class="container">
        <img src="asset/images/logo1.png" class="img-responsive center-block"/>
        <br/>
        <form method="post" action="admin.php?c=user&m=adminlogin" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
                <div class="col-md-4 col-md-offset-4">
                    <span class="text-muted text-center btn-block btn btn-primary" style="font-size:18px">HouseAgency管理平台</span>
                </div>
            </div>

            <br/>

            <div class="form-group">
                <label for="InputAdminName" class="col-md-offset-4 col-md-1 control-label">用户名:</label>
                <div class="col-md-2">
                    <input type="text" name="admin" class="form-control" id="InputAdminName" placeholder="用户名" required>
                </div>
            </div>

            <div class="form-group">
                <label for="InputPassword" class="col-md-offset-4 col-md-1 control-label">密 码:</label>
                <div class="col-md-2">
                    <input type="password" name="password" class="form-control" id="InputPassword" placeholder="密码" required>
                </div>
            </div>
            <br/>
            <div class="form-group">
                <div class="col-md-12 text-center">
                    <input type="submit" class="btn btn-success" value="登陆">
                    <input type="reset" class="btn btn-primary" value="重置">
                </div>
            </div>
        </form>
    </div>
</body>
</html>