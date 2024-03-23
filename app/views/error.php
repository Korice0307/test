<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nick 教學頁面</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="page-<?php echo $page; ?>">

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="index.php?page=php">首頁</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#">錯誤訊息</a>
  </li>
</ul>

<div class="container">
    <div class="row">
        <div id="main-body">
            <?php echo $body; ?>
        </div>
    </div>
    <footer class="pt-4 my-md-3 pt-md-3 border-top fixed-bottom">
        <div class="row">
            <div class="col-12 col-md text-center">
                Nick PHP教學頁面
            </div>
        </div>
    </footer>
</div>
</body>
</html>
