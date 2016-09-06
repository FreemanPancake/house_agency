<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>用户注册</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css"/>
</head>
<body background="asset/images/bg.jpg">
<div class="row mlist">
    <div class="header">
        <div class="container">
            <div class="header">
                <h1 class="text-muted"><a href="index.php?c=index&m=getindex" role="button" class="btn btn-warning btn-lg active">返回首页</a></h1>
            </div>
            <form method=post action="../../index.php?c=user&m=UserAdd" enctype="multipart/form-data" class="form-horizontal">
        <br><br>
        <h2 class="text-center">用户注册</h2>
        <div class="form-group">
            <label for="InputUserName" class="col-md-offset-2 col-md-2 control-label">用户名</label>
            <div class="col-md-4">
                <input type="text" name="uname" class="form-control" id="InputUName" placeholder="姓名" required>
            </div>
        </div>
        <div class="form-group">
            <label for="InputPassword" class="col-md-offset-2 col-md-2 control-label">密 码</label>
            <div class="col-md-4">
                <input type="password" name="password" class="form-control" id="InputPassword" placeholder="密码" required>
            </div>
        </div>
        <div class="form-group">
            <label for="age" class="col-md-offset-2 col-md-2 control-label">年龄</label>
            <div class="col-md-4">
                <input type="text" name="age" class="form-control" id="age" placeholder="年龄" required>
            </div>
        </div>
        <div class="form-group">
            <label for="tel" class="col-md-offset-2 col-md-2 control-label">联系方式</label>
            <div class="col-md-4">
                <input type="tel" name="tel" class="form-control" id="tel" placeholder="电话" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-offset-2 col-md-2 control-label">性 别</label>
            <div class="col-md-4">
                <label class="radio-inline">
                    <input type="radio" name="gender" value=0 checked> 男
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value=1> 女
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-offset-2 col-md-2 control-label">用户类别</label>
            <div class="col-md-4">
                <label class="radio-inline">
                    <input type="radio" name="flag" value=0 checked> 买家
                </label>
                <label class="radio-inline">
                    <input type="radio" name="flag" value=1> 卖家
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="InputFile" class="col-md-2 control-label col-md-offset-2">头 像</label>
            <div class="col-md-4">
                <input type="file" name="pic" id="InputFile">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-success" value="注册">
                <input type="reset" class="btn btn-primary" value="重置">
            </div>
        </div>
        <!-- <div class="form-group">
          <div class="col-sm-1 col-sm-offset-4">
            <button class="btn text-muted text-center btn-danger" type="submit">登录</button>
            <button class="btn text-muted text-center btn-danger" type="reset">重置</button>
          </div>
        </div> -->
    </form>
</div>
</body>
</html>