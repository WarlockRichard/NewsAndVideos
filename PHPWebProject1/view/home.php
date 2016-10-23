<?php error_reporting(E_ALL);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>News and Videos</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/view/padding.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">News and Videos</a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/news">News</a></li>
                    <li><a href="/videos">Videos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2>News</h2>
        <div class="row">
            <?php foreach ($news as $aNews):?>
            <div class="col-md-4">
                <h3> <?= $aNews->title;?> </h3>
                <p><?=$aNews->preview;?></p>
                <p> <a class="btn btn-default" href="/news/<?=$aNews->id;?>" role="button">View details &raquo;</a></p>
            </div>
            <?php endforeach;?>
        </div>
        <hr>
    </div> <!-- /container -->
    <div class="container">
        <h2>Video</h2>
        <div class="row">
            <?php foreach ($videos as $video):?>
            <div class="col-md-4">
                <h3><?= $video->title;?></h3>
                <p><?=$video->description;?></p>
                <video width="320" height="240">
                    <source src="<?=$video->path;?>" type="<?=$video->type;?>">
                        Your browser does not support the video tag.
                </video>
                <p><a class="btn btn-default" href="/videos/<?=$video->id;?>" role="button">View details &raquo;</a></p>
            </div>
            <?php endforeach;?>
        </div>
        <hr />
    </div><!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>
