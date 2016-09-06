
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>房屋中介网</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css"/>
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>
<!-- NAVBAR================================================== -->
    <body>
        <div class="container">
            <div class="header">
                <ul class="nav nav-pills pull-right" role="tablist">
                    <?php 
                    if(!isset($_SESSION['user'])){
                       ?>
                       <li role="presentation"><a href="index.php?c=user&m=UserLoginview">登录</a></li>
                       <li role="presentation"><a href="index.php?c=index&m=UserRegview">注册</a></li>
                       <?php 
                   } else {
                    echo "<li role='presentation'><a href='index.php?c=user&m=userinfro&uname=".$_SESSION['user']."'>".$_SESSION['user']."</a></li>
                    <li role='presentation'><a href='index.php?c=user&m=userlogout'>注销</a></li>";
                }
                ?>

                <li>
                    <form class="navbar-form" action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="key" placeholder="例:三室一厅" required>
                        </div>
                        <button type="submit" class="btn btn-info">搜索</button>
                    </form>
                </li>
            </ul>
            <h1 class="text-muted"><a href="index.php?c=index&m=getindex" role="button" class="btn btn-primary btn-lg active">房屋中介网</a></h1>
        </div>
<!-- Carousel================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="asset/images/cs.jpg" alt="First slide" class="img-rounded">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>寻找你心中的家</h1>
                        <p>在茫茫的城市中</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">进入寻找房源之旅</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.carousel -->
        <br>
        <div class="alert alert-success" role="alert"><h4 align="center">热门租房推荐</h4></div>
        <br>
<!-- Marketing messaging and featurettes================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <?php
            foreach($h_data as $row) {
                echo '<div class="col-lg-4">';
                echo ' <img class="img-circle" src="asset/images/'.$row['pic'].'"d alt="Generic placeholder image" style="width: 140px; height: 140px;">';
                echo '<br>';
                echo '<h4>'.'所在区域:  '.$row['region'].'</h4>';
                echo '<h4>'.'房屋类型:  '.$row['housetype'].'</h4 >';
                echo '<h4>'.'房屋租金:  '.$row['rent'].'元/月'.'</h4 >';
                echo '<p><a class="btn btn-success" href = "#" role = "button">房屋详情</a ></p >';
                echo '</div>';
            }
            ?>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
            <br>
            <div class="alert alert-success" role="alert"><h4 align="center">热门售房推荐</h4></div>
            <br>
            <?php
            foreach($p_data as $row){
                echo '<div class="col-md-7">';
                echo '<h4>'.'所在区域:  '.$row['region'].'</h4>';
                echo '<h4>'.'房屋售价:  '.$row['price'].'万元'.'</h4 >';
                echo '<h4>房源特色:</h4>';
                echo '<p>'.$row['demo'].'</p>';
                echo '<p><a class="btn btn-success" href = "#" role = "button">房屋详情</a ></p >';
                echo '</div>';
                echo '<div align="right" class="col-md-5">';
                echo '<img class="featurette-image img-responsive" src="asset/images/'.$row['pic'].'" alt="Not Found" style="width: 200px; height:150px;">';
           // echo '</div>';
                echo '</div>';
                echo '<br>';
            }
            ?>
        </div>
    </div>
</div>
<hr class="featurette-divider">
<!-- /END THE FEATURETTES -->
<!-- FOOTER -->
<footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>&copy;14003班 余仕帆 余思赵 魏靖程 刘重洋 &middot; <a href="admin.php?c=user&m=adminloginview">管理员登录</a></p>
</footer>
</div><!-- /.container -->
<!-- Bootstrap core JavaScript================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../asset/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>