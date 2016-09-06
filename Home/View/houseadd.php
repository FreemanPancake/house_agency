<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加房屋信息</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css"/>
</head>
<body>
<div class="row mlist">
    <form method=post action="../../index.php?c=House&m=HouseAdd" enctype="multipart/form-data" class="form-horizontal">
        <h2 class="text-center">添加房屋信息</h2>
        <div class="form-group">
            <label class="col-md-offset-2 col-md-2 control-label">信息类型</label>
            <div class="col-md-4">
                <label class="radio-inline">
                    <input type="radio" name="type" value=0 checked>出租
                </label>
                <label class="radio-inline">
                    <input type="radio" name="type" value=1>出售
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="InputHouseName" class="col-md-offset-2 col-md-2 control-label">房屋类型</label>
            <div class="col-md-4">
                <input type="text" name="housetype" class="form-control" id="InputHouseName" placeholder="例:三室一厅" required>
            </div>
        </div>
        <div class="form-group">
            <label for="InputPassword" class="col-md-offset-2 col-md-2 control-label">房屋地址</label>
            <div class="col-md-4">
                <input type="text" name="address" class="form-control" id="InputPassword" placeholder="例:xxx街道xxx路xx号" required>
            </div>
        </div>
        <div class="form-group">
            <label for="age" class="col-md-offset-2 col-md-2 control-label">建筑时长</label>
            <div class="col-md-4">
                <input type="text" name="builddate" class="form-control" id="age" placeholder="例:十年" required>
            </div>
        </div>
        <div class="form-group">
            <label for="tel" class="col-md-offset-2 col-md-2 control-label">房屋面积</label>
            <div class="col-md-4">
                <input type="text" name="area" class="form-control" id="tel" placeholder="例:120平方米" required>
            </div>
        </div>

        <div class="form-group">
            <label for="tel" class="col-md-offset-2 col-md-2 control-label">房屋楼层</label>
            <div class="col-md-4">
                <input type="text" name="floor" class="form-control" id="tel" placeholder="例:3楼" required>
            </div>
        </div>
        <div class="form-group">
            <label for="tel" class="col-md-offset-2 col-md-2 control-label">总楼层</label>
            <div class="col-md-4">
                <input type="text" name="allfloor" class="form-control" id="tel" placeholder="例:20楼" required>
            </div>
        </div>
        <div class="form-group">
            <label for="tel" class="col-md-offset-2 col-md-2 control-label">所在区域</label>
            <div class="col-md-4">
                <input type="text" name="region" class="form-control" id="tel" placeholder="例:xxx区" required>
            </div>
        </div>
        <div class="form-group">
            <label for="tel" class="col-md-offset-2 col-md-2 control-label">房屋售价</label>
            <div class="col-md-4">
                <input type="text" name="price" class="form-control" id="tel" placeholder="若为出租可不填" >
            </div>
        </div>

        <div class="form-group">
            <label for="tel" class="col-md-offset-2 col-md-2 control-label">房屋租价</label>
            <div class="col-md-4">
                <input type="text" name="rent" class="form-control" id="tel" placeholder="若为出售可不填" >
            </div>
        </div>

        <div class="form-group">
            <label for="tel" class="col-md-offset-2 col-md-2 control-label">本人姓名</label>
            <div class="col-md-4">
                <input type="text" name="contact" class="form-control" id="tel" placeholder="例:x先生/女士" required>
            </div>
        </div>
        <div class="form-group">
            <label for="tel" class="col-md-offset-2 col-md-2 control-label">联系电话</label>
            <div class="col-md-4">
                <input type="tel" name="tel" class="form-control" id="tel" placeholder="例:186xxxxxxxx" required>
            </div>
        </div>
        <div class="form-group">
            <label for="InputTextarea" class="col-md-offset-2 col-md-2 control-label">备   注</label>
            <div class="col-md-4">
                <textarea class="form-control" rows="3" id="InputTextarea" placeholder="添加其他房屋信息" name="demo"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="InputFile" class="col-md-2 control-label col-md-offset-2">房屋图片</label>
            <div class="col-md-4">
                <input type="file" name="pic" id="InputFile">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-success" value="添加">
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